#!/usr/bin/env python3
"""Bộ công cụ dịch web IMM Group (Việt -> Anh). Chỉ dùng thư viện chuẩn + bs4 + python-docx.

Lệnh:
  moi    <url|tệp> [--ten slug]   tạo thư mục việc, tách đoạn ra song-ngu.tsv, gợi ý từ bộ nhớ dịch
  tukhoa <thư-mục-việc> "hạt 1" "hạt 2" [--thi-truong us,gb,au,ca,sg,ae]
  tygia  <thư-mục-việc>           lấy tỷ giá USD/VND, USD/EUR... ghi ty-gia.json
  ghep   <thư-mục-việc>           dựng ban-giao/bai-dich.en.md + .html từ song-ngu.tsv
  kiem   <thư-mục-việc>           CỬA 0 bằng máy — thoát mã 1 nếu có LỖI
  nap    <thư-mục-việc>           nạp câu đã chốt vào bộ nhớ dịch (trùng thì xoá cũ giữ mới) + xuất TMX
  kiemtn                          kiểm bảng thuật ngữ (trùng, thiếu cột)
  xem    <thư-mục-việc> [--tu s001] [--den s150] [--anh]   in gọn nguồn (và bản Anh nếu --anh) để đọc/dịch
  dien   <thư-mục-việc> <tệp.txt>... [--tm100] [--trung]  điền bản dịch/bản sửa dạng "[s001] text" hoặc "[s008|#bo: lý do] [BO]"
"""
import csv, datetime as dt, difflib, html, json, re, subprocess, sys, time, unicodedata
import urllib.parse, urllib.request
from pathlib import Path

GOC = Path(__file__).resolve().parent.parent
TM = GOC / "bo-nho-dich" / "bo-nho-dich.jsonl"
TMX = GOC / "bo-nho-dich" / "bo-nho-dich.tmx"
THUAT_NGU = GOC / "thuat-ngu" / "thuat-ngu.csv"
COT = ["id", "loai", "vi", "en", "tm", "ghi_chu", "src"]
UA = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 Chrome/126 Safari/537.36"
KHOI = ["h1", "h2", "h3", "h4", "h5", "h6", "p", "li", "blockquote", "figcaption", "td", "th", "dt", "dd", "button"]
BO_QUA_TAG = ["script", "style", "noscript", "svg", "form", "nav", "header", "footer", "iframe", "select", "option", "template"]
BO_QUA_CLASS = re.compile(r"footer|breadcrumb|share|social|popup|modal|cookie|site-header|menu|material-(icons|symbols)|dashicons|\\bfa-|screen-reader", re.I)
TEN_ICON = re.compile(r"^[a-z]+(?:_[a-z]+)*$")
VN_CHU = re.compile(r"[ăâđêôơưàáảãạằắẳẵặầấẩẫậèéẻẽẹềếểễệìíỉĩịòóỏõọồốổỗộờớởỡợùúủũụừứửữựỳýỷỹỵ]", re.I)
# chữ CHỈ tiếng Việt mới có (é, í, ã… có cả trong tên Bồ Đào Nha, Tây Ban Nha, Pháp)
VN_RIENG = re.compile(r"[ăđơưạảấầẩẫậắằẳẵặẹẻẽếềểễệỉịọỏốồổỗộớờởỡợụủứừửữựỳỵỷỹ]", re.I)


def con_tieng_viet(s):
    """Có chữ riêng tiếng Việt, hoặc ≥2 từ mang dấu (vd "khách hàng") thì coi là còn tiếng Việt."""
    if VN_RIENG.search(s):
        return True
    # từ tiếng Việt là âm tiết ngắn; tên Tây có dấu (André, Jurídico) thường đứng lẻ hoặc dài hơn
    return sum(1 for w in re.findall(r"[\wÀ-ỹ]+", s) if VN_CHU.search(w) and len(w) <= 5) >= 2


# ---------- tiện ích ----------
def lay_url(url, timeout=25):
    req = urllib.request.Request(url, headers={"User-Agent": UA, "Accept-Language": "vi,en;q=0.8"})
    with urllib.request.urlopen(req, timeout=timeout) as r:
        return r.read().decode(r.headers.get_content_charset() or "utf-8", "replace")


def slugify(s, toi_da=60):
    s = unicodedata.normalize("NFD", s.replace("đ", "d").replace("Đ", "D"))
    s = "".join(c for c in s if unicodedata.category(c) != "Mn").lower()
    s = re.sub(r"[^a-z0-9]+", "-", s).strip("-")
    return s[:toi_da].strip("-") or "bai"


def chuan(s):
    return re.sub(r"\s+", " ", (s or "")).strip().lower()


def doc_tsv(p):
    with open(p, encoding="utf-8", newline="") as f:
        return list(csv.DictReader(f, delimiter="\t"))


def ghi_tsv(p, dong):
    with open(p, "w", encoding="utf-8", newline="") as f:
        w = csv.DictWriter(f, COT, delimiter="\t", extrasaction="ignore")
        w.writeheader()
        for d in dong:
            w.writerow({k: re.sub(r"[\t\r\n]+", " ", d.get(k, "") or "") for k in COT})


def doc_tm():
    if not TM.exists():
        return []
    return [json.loads(l) for l in TM.read_text(encoding="utf-8").splitlines() if l.strip()]


def doc_thuat_ngu():
    if not THUAT_NGU.exists():
        return []
    with open(THUAT_NGU, encoding="utf-8", newline="") as f:
        return [r for r in csv.DictReader(f) if (r.get("vi") or r.get("en"))]


# ---------- tách đoạn ----------
def inline_md(el):
    from bs4 import NavigableString, Comment
    out = []
    for c in el.children:
        if isinstance(c, Comment):
            continue
        if isinstance(c, NavigableString):
            out.append(str(c))
        elif c.name == "br":
            out.append(" ")
        elif c.name == "a" and c.get("href") and c.get_text(strip=True):
            out.append(f"[{c.get_text(' ', strip=True)}]({c['href']})")
        elif c.name in ("strong", "b") and c.get_text(strip=True):
            out.append(f"**{c.get_text(' ', strip=True)}**")
        elif c.name in BO_QUA_TAG:
            continue
        else:
            out.append(inline_md(c))
    return re.sub(r"\s+", " ", "".join(out)).strip()


def tach_html(src_html):
    from bs4 import BeautifulSoup, NavigableString, Comment
    s = BeautifulSoup(src_html, "html.parser")
    for cm in s.find_all(string=lambda t: isinstance(t, Comment)):
        cm.extract()
    meta = {"title": s.title.get_text(strip=True) if s.title else ""}
    for k, sel in [("description", {"name": "description"}), ("og_title", {"property": "og:title"})]:
        m = s.find("meta", attrs=sel)
        meta[k] = m.get("content", "") if m else ""
    for l in s.find_all("link", rel="alternate"):
        if l.get("hreflang"):
            meta["hreflang_" + l["hreflang"]] = l.get("href", "")
    c = s.find("link", rel="canonical")
    meta["canonical"] = c.get("href", "") if c else ""
    goc = s.select_one("#content") or s.find("main") or s.find("article") or s.body or s
    for t in goc.find_all(BO_QUA_TAG):
        t.decompose()
    for t in goc.find_all(True):
        if t.attrs is not None and BO_QUA_CLASS.search(" ".join(t.get("class", []) or []) + " " + (t.get("id") or "")):
            t.decompose()
    dong = []

    def them(loai, vi, src=""):
        vi = re.sub(r"\s+", " ", vi or "").strip()
        vi = re.sub(r"\s+(arrow_forward|arrow_back|chevron_right|expand_more|east|north_east)$", "", vi)
        if loai != "img" and TEN_ICON.fullmatch(vi) and ("_" in vi or vi in ("info", "school", "alarm", "check", "close", "menu", "search", "home", "star")):
            return
        if vi or loai == "img":
            dong.append({"loai": loai, "vi": vi, "src": src})

    def co_khoi_con(el):
        return el.find(KHOI + ["img"]) is not None

    def duyet(el):
        tam = []
        for c in el.children:
            if isinstance(c, NavigableString):
                if c.strip():
                    tam.append(str(c))
                continue
            if c.name is None:
                continue
            if c.name == "img":
                them("p", "".join(tam)); tam = []
                them("img", c.get("alt", ""), c.get("data-src") or c.get("src", ""))
            elif c.name in KHOI and not co_khoi_con(c):
                them("p", "".join(tam)); tam = []
                them("quote" if c.name == "blockquote" else ("cta" if c.name == "button" else c.name), inline_md(c))
            elif c.name in ("a", "strong", "b", "span", "em", "i") and not co_khoi_con(c):
                tam.append(inline_md(c) if c.name != "span" else c.get_text(" "))
            else:
                them("p", "".join(tam)); tam = []
                duyet(c)
        them("p", "".join(tam))

    duyet(goc)
    return meta, dong


def tach_md(text):
    dong, doan = [], []

    def xa():
        if doan:
            dong.append({"loai": "p", "vi": " ".join(doan).strip(), "src": ""}); doan.clear()

    for l in text.splitlines():
        l = l.rstrip()
        m_h = re.match(r"^(#{1,6})\s+(.*)", l)
        m_img = re.match(r"^!\[(.*?)\]\((.*?)\)\s*$", l)
        m_li = re.match(r"^\s*(?:[-*+]|\d+[.)])\s+(.*)", l)
        if not l.strip():
            xa()
        elif m_h:
            xa(); dong.append({"loai": f"h{len(m_h.group(1))}", "vi": m_h.group(2).strip(), "src": ""})
        elif m_img:
            xa(); dong.append({"loai": "img", "vi": m_img.group(1), "src": m_img.group(2)})
        elif m_li:
            xa(); dong.append({"loai": "li", "vi": m_li.group(1).strip(), "src": ""})
        elif l.startswith(">"):
            xa(); dong.append({"loai": "quote", "vi": l.lstrip("> ").strip(), "src": ""})
        else:
            doan.append(l.strip())
    xa()
    return dong


def tach_docx(p):
    import docx
    dong = []
    for para in docx.Document(p).paragraphs:
        t = para.text.strip()
        if not t:
            continue
        st = (para.style.name or "").lower()
        m = re.search(r"heading\s*(\d)", st)
        if st == "title":
            dong.append({"loai": "h1", "vi": t, "src": ""})
        elif m:
            dong.append({"loai": f"h{m.group(1)}", "vi": t, "src": ""})
        elif "list" in st:
            dong.append({"loai": "li", "vi": t, "src": ""})
        else:
            dong.append({"loai": "p", "vi": t, "src": ""})
    return dong


def goi_y_tm(vi, tm, nguong=0.85):
    k = chuan(vi)
    if not k or len(k) < 3:
        return ""
    tot = None
    for e in tm:
        kk = chuan(e["vi"])
        if kk == k:
            return f"100%: {e['en']}"
        sm = difflib.SequenceMatcher(None, k, kk)
        if sm.real_quick_ratio() < nguong or sm.quick_ratio() < nguong:
            continue
        r = sm.ratio()
        if r >= nguong and (not tot or r > tot[0]):
            tot = (r, e["en"])
    return f"{int(tot[0] * 100)}%: {tot[1]}" if tot else ""


def lenh_moi(args):
    if not args:
        sys.exit("Thiếu nguồn: url hoặc đường dẫn tệp")
    nguon = args[0]
    ten = args[args.index("--ten") + 1] if "--ten" in args else ""
    meta, dong, tho = {"nguon": nguon}, [], ""
    if re.match(r"https?://", nguon):
        tho = lay_url(nguon)
        m, dong = tach_html(tho)
        meta.update(m)
        ten = ten or slugify(urllib.parse.urlparse(nguon).path.strip("/").split("/")[-1] or meta.get("title", ""))
    else:
        p = Path(nguon).expanduser().resolve()
        if not p.exists():
            sys.exit(f"Không thấy tệp: {p}")
        duoi = p.suffix.lower()
        if duoi in (".html", ".htm"):
            tho = p.read_text(encoding="utf-8", errors="replace"); m, dong = tach_html(tho); meta.update(m)
        elif duoi == ".docx":
            dong = tach_docx(p)
        elif duoi == ".pdf":
            dong = tach_md(subprocess.run(["pdftotext", "-enc", "UTF-8", str(p), "-"], capture_output=True, text=True).stdout)
        else:
            dong = tach_md(p.read_text(encoding="utf-8", errors="replace"))
        ten = ten or re.sub(r"^\d{4}-\d{2}-\d{2}-", "", slugify(p.stem))
    viec = GOC / "viec" / f"{dt.date.today():%Y-%m-%d}-{ten}"
    viec.mkdir(parents=True, exist_ok=True)
    (viec / "ban-giao").mkdir(exist_ok=True)
    if tho:
        (viec / "nguon.html").write_text(tho, encoding="utf-8")
    tm = doc_tm()
    lan_dau = {}
    for i, d in enumerate(dong, 1):
        d["id"] = f"s{i:03d}"
        d["en"] = ""
        d["tm"] = goi_y_tm(d["vi"], tm)
        k = (d["loai"] == "img", chuan(d["vi"]))  # alt ảnh và chữ thường giống nhau vẫn dịch khác nhau
        d["ghi_chu"] = f"trung:{lan_dau[k]}" if k in lan_dau and len(k[1]) > 2 else ""
        lan_dau.setdefault(k, d["id"])
    ghi_tsv(viec / "song-ngu.tsv", dong)
    meta["ngay"] = f"{dt.datetime.now():%Y-%m-%d %H:%M}"
    meta["so_doan"] = len(dong)
    meta["so_tu_vi"] = sum(len(d["vi"].split()) for d in dong)
    en_url = meta.get("hreflang_en")
    if en_url and en_url.rstrip("/") != nguon.rstrip("/"):
        try:
            _, en_dong = tach_html(lay_url(en_url))
            (viec / "tham-khao-ban-en-hien-co.md").write_text(
                f"<!-- Bản tiếng Anh ĐANG có trên web: {en_url} — chỉ để tham khảo, KHÔNG chép -->\n\n"
                + "\n\n".join(f"[{d['loai']}] {d['vi']}" for d in en_dong), encoding="utf-8")
            meta["ban_en_hien_co"] = en_url
        except Exception as e:  # noqa
            meta["ban_en_hien_co_loi"] = str(e)
    (viec / "meta.json").write_text(json.dumps(meta, ensure_ascii=False, indent=2), encoding="utf-8")
    so_tm = sum(1 for d in dong if d["tm"])
    print(f"VIỆC: {viec}\nĐoạn: {len(dong)} · chữ nguồn: {meta['so_tu_vi']} · khớp bộ nhớ dịch: {so_tm}"
          + (f" · có bản EN cũ: {en_url}" if meta.get("ban_en_hien_co") else ""))
    if len(dong) == 0:
        print("⚠ KHÔNG tách được đoạn nào — trang có thể chặn máy hoặc dựng bằng JavaScript. Lấy chữ bằng Browser pane rồi chạy lại với tệp .md")
        sys.exit(2)


# ---------- từ khoá ----------
def lenh_tukhoa(args):
    viec = Path(args[0]); hat = [a for a in args[1:] if not a.startswith("--")]
    tt = "us,gb,au,ca,sg,ae"
    if "--thi-truong" in args:
        tt = args[args.index("--thi-truong") + 1]; hat = [h for h in hat if h != tt]
    duoi = ["", " requirements", " cost", " for", " vs", " how to", " best", " benefits", " process"]
    kq = {}
    for h in hat:
        for g in tt.split(","):
            for d in duoi:
                q = urllib.parse.quote(h + d)
                url = f"https://suggestqueries.google.com/complete/search?client=firefox&hl=en&gl={g}&q={q}"
                try:
                    goi_y = json.loads(lay_url(url, 10))[1]
                except Exception:
                    continue
                for hang, k in enumerate(goi_y):
                    e = kq.setdefault(k.lower(), {"tu_khoa": k.lower(), "thi_truong": set(), "so_lan": 0, "hang_tot_nhat": 99, "hat": h})
                    e["thi_truong"].add(g); e["so_lan"] += 1; e["hang_tot_nhat"] = min(e["hang_tot_nhat"], hang)
                time.sleep(0.25)
    ds = sorted(kq.values(), key=lambda e: (-len(e["thi_truong"]), -e["so_lan"], e["hang_tot_nhat"]))
    for e in ds:
        e["thi_truong"] = sorted(e["thi_truong"])
    (viec / "tu-khoa.json").write_text(json.dumps(ds, ensure_ascii=False, indent=2), encoding="utf-8")
    print(f"{len(ds)} gợi ý từ khoá · thị trường {tt} · ghi {viec/'tu-khoa.json'}")
    print("⚠ Đây là gợi ý tự hoàn thành của Google (người thật đang gõ), KHÔNG có số lượt tìm kiếm.")
    for e in ds[:25]:
        print(f"  {len(e['thi_truong'])} thị trường · {e['so_lan']:>2} lần · {e['tu_khoa']}")


# ---------- tỷ giá ----------
def lenh_tygia(args):
    viec = Path(args[0])
    try:
        d = json.loads(lay_url("https://open.er-api.com/v6/latest/USD", 15))
        r = d["rates"]
        kq = {"nguon": "open.er-api.com (ExchangeRate-API)", "cap_nhat": d.get("time_last_update_utc"),
              "lay_luc": f"{dt.datetime.now():%Y-%m-%d %H:%M}", "vnd_moi_usd": r["VND"],
              "usd_moi_eur": round(1 / r["EUR"], 4), "usd_moi_gbp": round(1 / r["GBP"], 4),
              "usd_moi_aud": round(1 / r["AUD"], 4), "usd_moi_cad": round(1 / r["CAD"], 4),
              "usd_moi_nzd": round(1 / r["NZD"], 4), "usd_moi_sgd": round(1 / r["SGD"], 4)}
    except Exception as e:
        sys.exit(f"LỖI lấy tỷ giá: {e} — thử nguồn Vietcombank bằng tay, ghi ty-gia.json đủ trường vnd_moi_usd")
    (viec / "ty-gia.json").write_text(json.dumps(kq, ensure_ascii=False, indent=2), encoding="utf-8")
    print(f"1 USD = {kq['vnd_moi_usd']:,.0f} VND · 1 EUR = {kq['usd_moi_eur']} USD · nguồn {kq['nguon']} · {kq['cap_nhat']}")


# ---------- ghép ----------
def md_inline_html(s):
    s = html.escape(s, quote=False)
    s = re.sub(r"\[([^\]]+)\]\(([^)\s]+)\)", r'<a href="\2">\1</a>', s)
    return re.sub(r"\*\*(.+?)\*\*", r"<strong>\1</strong>", s)


def lenh_ghep(args):
    viec = Path(args[0]); dong = doc_tsv(viec / "song-ngu.tsv")
    md, h, trong_ul = [], [], False
    for d in dong:
        en = (d["en"] or "").strip()
        if not en or en == "[BO]":
            continue
        loai = d["loai"]
        if loai != "li" and trong_ul:
            h.append("</ul>"); trong_ul = False; md.append("")
        if re.fullmatch(r"h[1-6]", loai):
            md += ["#" * int(loai[1]) + " " + en, ""]; h.append(f"<{loai}>{md_inline_html(en)}</{loai}>")
        elif loai == "li":
            md.append(en if re.match(r"^\d+\.\s", en) else "- " + en)  # mục có sẵn số giữ dạng danh sách đánh số
            if not trong_ul:
                h.append("<ul>"); trong_ul = True
            h.append(f"  <li>{md_inline_html(en)}</li>")
        elif loai == "img":
            md += [f"![{en}]({d['src']})", ""]
            h.append(f'<img src="{html.escape(d["src"])}" alt="{html.escape(en)}">')
        elif loai == "quote":
            md += ["> " + en, ""]; h.append(f"<blockquote>{md_inline_html(en)}</blockquote>")
        else:
            md += [en, ""]; h.append(f"<p>{md_inline_html(en)}</p>")
    if trong_ul:
        h.append("</ul>")
    (viec / "ban-giao").mkdir(exist_ok=True)
    (viec / "ban-giao" / "bai-dich.en.md").write_text("\n".join(md).strip() + "\n", encoding="utf-8")
    (viec / "ban-giao" / "bai-dich.en.html").write_text("\n".join(h) + "\n", encoding="utf-8")
    print(f"Ghép xong {len(md)} dòng markdown → {viec/'ban-giao'}")


# ---------- kiểm (CỬA 0) ----------
# "zero/one" bỏ vì hay là đại từ ("one clear pattern") — gây cảnh báo giả
TU_SO = {w: i for i, w in enumerate("zero one two three four five six seven eight nine ten eleven twelve thirteen fourteen fifteen sixteen seventeen eighteen nineteen twenty".split()) if i >= 2}
THANG = {m: i for i, m in enumerate("january february march april may june july august september october november december".split(), 1)}
THANG.update({m[:3]: i for m, i in list(THANG.items())})
NHAN_VI = {"tỷ": 1e9, "tỉ": 1e9, "triệu": 1e6, "nghìn": 1e3, "ngàn": 1e3}
NHAN_EN = {"billion": 1e9, "bn": 1e9, "million": 1e6, "m": 1e6, "mn": 1e6, "thousand": 1e3, "k": 1e3}
SO_RE = r"\d+(?:[.,]\d+)*"


def so_vi(tok):
    if re.fullmatch(r"\d{1,3}(?:\.\d{3})+(?:,\d+)?", tok):
        return float(tok.replace(".", "").replace(",", "."))
    if re.fullmatch(r"\d+,\d+", tok):
        return float(tok.replace(",", "."))
    if re.fullmatch(r"\d{1,3}(?:,\d{3})+", tok):
        return float(tok.replace(",", ""))
    return float(tok.replace(",", "."))


def so_en(tok):
    if re.fullmatch(r"\d{1,3}(?:,\d{3})+(?:\.\d+)?", tok):
        return float(tok.replace(",", ""))
    if re.fullmatch(r"\d{1,3}(?:\.\d{3})+", tok):
        return float(tok.replace(".", ""))
    return float(tok.replace(",", ""))


def bo_link(s):
    return re.sub(r"\]\([^)]*\)", "]", s or "")


def lay_so(s, ngon_ngu):
    s = bo_link(s)
    kq, vnd = [], []
    if ngon_ngu == "en":
        # tên tháng viết hoa (tiếng Anh luôn viết hoa tên tháng) đứng trước ngày 1–31 hoặc năm 4 chữ số, hoặc sau ngày
        # — tránh "may" (có thể), "EB-5 may", "20 may change"
        ten_thang = "|".join(m.capitalize() for m in sorted(THANG, key=len, reverse=True))
        s = re.sub(r"\b(" + ten_thang + r")\b\.?(?=\s+(?:(?:[1-9]|[12]\d|3[01])(?:st|nd|rd|th)?\b(?!-)|\d{4}\b))", lambda m: f" {THANG[m.group(1).lower()]} ", s)
        s = re.sub(r"(?<![-\w])((?:[1-9]|[12]\d|3[01]))\s+(" + ten_thang + r")\b\.?", lambda m: f"{m.group(1)} {THANG[m.group(2).lower()]} ", s)
        s = re.sub(r"\b(" + "|".join(TU_SO) + r")\b", lambda m: str(TU_SO[m.group(1).lower()]), s, flags=re.I)
        s = re.sub(r"(\d)(st|nd|rd|th)\b", r"\1", s)
    for m in re.finditer(SO_RE + r"(?:\s*(%s)\b)?" % "|".join(sorted((NHAN_VI if ngon_ngu == "vi" else NHAN_EN), key=len, reverse=True)), s, flags=re.I):
        tok, nhan = m.group(0), m.group(1)
        so_tok = re.match(SO_RE, tok).group(0)
        try:
            v = so_vi(so_tok) if ngon_ngu == "vi" else so_en(so_tok)
        except ValueError:
            continue
        if nhan:
            v *= (NHAN_VI if ngon_ngu == "vi" else NHAN_EN)[nhan.lower()]
        sau = s[m.end():m.end() + 12].lower()
        if ngon_ngu == "vi" and re.match(r"\s*(đồng|vnđ|vnd|đ\b)", sau):
            vnd.append(v)
        else:
            kq.append(round(v, 6))
        # số trong ngày 30/09/2026 đã tách riêng từng số nhờ regex (dấu / không nằm trong SO_RE)
    return kq, vnd


def tim_thuat_ngu(vi_thuong, tn):
    """Khớp dài trước; trả về các dòng thuật ngữ xuất hiện trong câu nguồn."""
    con = vi_thuong
    kq = []
    for r in sorted(tn, key=lambda r: -len(r["vi"])):
        k = r["vi"].strip().lower()
        if not k:
            continue
        mau = r"(?<![\wÀ-ỹ])" + re.escape(k) + r"(?![\wÀ-ỹ])"
        if re.search(mau, con, flags=re.I):
            kq.append(r)
            con = re.sub(mau, " ␀ ", con, flags=re.I)
    return kq


def lenh_kiem(args):
    viec = Path(args[0])
    loi, canh = [], []
    dong = doc_tsv(viec / "song-ngu.tsv")
    tn = doc_thuat_ngu()
    ty_gia = json.loads((viec / "ty-gia.json").read_text()) if (viec / "ty-gia.json").exists() else None

    # 1. đủ đoạn
    for d in dong:
        en, ghi = (d["en"] or "").strip(), d["ghi_chu"] or ""
        if not en and d["vi"].strip():
            loi.append(f"{d['id']} THIẾU BẢN DỊCH: {d['vi'][:70]}")
        elif en == "[BO]":
            (canh if re.search(r"#bo:\s*\S", ghi) else loi).append(f"{d['id']} ĐÃ BỎ đoạn — lý do: {ghi or '(KHÔNG ghi lý do #bo:)'}")
    co_dich = [d for d in dong if (d["en"] or "").strip() not in ("", "[BO]")]

    for d in co_dich:
        vi, en, ghi, i = d["vi"], d["en"], d["ghi_chu"] or "", d["id"]
        # 2. số liệu
        sv, vnd = lay_so(vi, "vi")
        se, _ = lay_so(en, "en")
        con_en = list(se)
        for v in sv:
            if v in con_en:
                con_en.remove(v)
            elif "#bo-qua-so" in ghi:
                canh.append(f"{i} số {v:g} không thấy ở bản Anh (đã ghi #bo-qua-so)")
            else:
                loi.append(f"{i} SỐ LỆCH: nguồn có {v:g} mà bản Anh không có — «{vi[:60]}» → «{en[:60]}»")
        for v in vnd:
            if not ty_gia:
                loi.append(f"{i} CÓ TIỀN VND ({v:,.0f}) mà chưa chạy `tygia` để quy đổi"); continue
            usd = v / ty_gia["vnd_moi_usd"]
            hop = [x for x in con_en if abs(x - usd) <= max(0.05 * usd, 1)]
            if hop:
                con_en.remove(hop[0])
            elif "#bo-qua-so" in ghi:
                canh.append(f"{i} VND {v:,.0f} ≈ US${usd:,.0f} không thấy (đã ghi #bo-qua-so)")
            else:
                loi.append(f"{i} QUY ĐỔI SAI/THIẾU: {v:,.0f} VND ≈ US${usd:,.0f} (sai số cho phép 5%) — bản Anh: «{en[:70]}»")
        if con_en and "#bo-qua-so" not in ghi:
            canh.append(f"{i} bản Anh có số không có ở nguồn: {', '.join(f'{x:g}' for x in con_en)}")
        # 3. link và in đậm
        if vi.count("](") != en.count("]("):
            loi.append(f"{i} SỐ LIÊN KẾT LỆCH: nguồn {vi.count('](')} · bản Anh {en.count('](')}")
        for url in re.findall(r"\]\((https?://immgroup\.com/(?!en/)[^)]*)\)", en):
            canh.append(f"{i} liên kết còn trỏ trang tiếng Việt: {url} — thay bằng trang /en/ tương ứng nếu có")
        if vi.count("**") != en.count("**"):
            canh.append(f"{i} số chỗ in đậm lệch")
        # 4. còn tiếng Việt / VND
        if con_tieng_viet(bo_link(en)) and "#giu-tieng-viet" not in ghi:
            loi.append(f"{i} CÒN CHỮ TIẾNG VIỆT trong bản Anh: «{en[:70]}»")
        if re.search(r"\b(VND|VNĐ|dong)\b|đồng", bo_link(en)):
            loi.append(f"{i} CÒN ĐƠN VỊ VND trong bản Anh — phải quy đổi sang USD")
        # 5. thuật ngữ
        for r in tim_thuat_ngu(vi.lower(), [t for t in tn if t.get("loai") in ("thuat-ngu", "ten-rieng", "khong-dich")]):
            dich = [x.strip().lower() for x in (r["en"] + "|" + (r.get("bien_the_en") or "")).split("|") if x.strip()]
            if r.get("loai") == "khong-dich":
                dich = [r["vi"].strip().lower()] + dich
            if not any(x in en.lower() for x in dich):
                thong_diep = f"{i} THUẬT NGỮ «{r['vi']}» phải dịch là «{' | '.join(dich)}» — bản Anh: «{en[:70]}»"
                if r.get("trang_thai") == "chot" and "#bo-qua-tn" not in ghi:
                    loi.append(thong_diep)
                else:
                    canh.append(thong_diep.replace("phải dịch", "gợi ý dịch"))
        # 6. từ cấm / ngữ cảnh Việt Nam
        for r in [t for t in tn if t.get("loai") == "cam"]:
            if r["en"] and re.search(r["en"], en, flags=re.I):
                (loi if r.get("trang_thai") == "chot" else canh).append(f"{i} TỪ CẤM «{r['en']}» ({r.get('ghi_chu','')}): «{en[:70]}»")
        if re.search(r"\bVietnam(?:ese)?\b", en, flags=re.I) and "#viet-nam-hop-le" not in ghi:
            canh.append(f"{i} nhắc Việt Nam — xác nhận đây là dữ kiện công ty, không phải ngữ cảnh khách Việt: «{en[:70]}»")
        # 7. độ dài (dấu hiệu bỏ sót)
        if len(vi) > 60:
            ty = len(bo_link(en)) / max(1, len(bo_link(vi)))
            if ty < 0.55 or ty > 1.9:
                canh.append(f"{i} độ dài bất thường (Anh/Việt = {ty:.2f}) — soát bỏ sót hoặc thêm ý")
        if d["loai"] == "img" and len(en) > 125:
            if True:
                canh.append(f"{i} alt ảnh dài {len(en)} ký tự (nên ≤125)")

    for d in dong:
        if d["loai"] == "img" and not (d["en"] or "").strip():
            loi.append(f"{d['id']} ẢNH THIẾU ALT TIẾNG ANH")

    # 8. cấu trúc heading
    h = [int(d["loai"][1]) for d in co_dich if re.fullmatch(r"h[1-6]", d["loai"])]
    seo_p = viec / "ban-giao" / "seo.json"
    phan_doan = seo_p.exists() and json.loads(seo_p.read_text(encoding="utf-8")).get("phan_doan") is True
    if h.count(1) != 1:
        if phan_doan and h.count(1) == 0:
            canh.append("CẤU TRÚC: nguồn là đoạn trích (phan_doan) không có H1 — H1 do bài gốc quyết")
        else:
            loi.append(f"CẤU TRÚC: cần đúng 1 H1, đang có {h.count(1)}")
    for a, b in zip(h, h[1:]):
        if b > a + 1:
            canh.append(f"CẤU TRÚC: heading nhảy từ H{a} xuống H{b}")

    # 9. SEO
    if not seo_p.exists():
        loi.append("SEO: chưa có ban-giao/seo.json")
    else:
        seo = json.loads(seo_p.read_text(encoding="utf-8"))
        for k in ["meta_title", "meta_description", "slug", "tu_khoa_chinh", "thi_truong"]:
            if not seo.get(k):
                loi.append(f"SEO: thiếu trường {k}")
        mt, md_, sl, kw = seo.get("meta_title", ""), seo.get("meta_description", ""), seo.get("slug", ""), (seo.get("tu_khoa_chinh") or "").lower()
        if mt and not 30 <= len(mt) <= 60:
            loi.append(f"SEO: meta title {len(mt)} ký tự (chuẩn 30–60)")
        if md_ and not 120 <= len(md_) <= 160:
            loi.append(f"SEO: meta description {len(md_)} ký tự (chuẩn 120–160)")
        if sl and (not re.fullmatch(r"[a-z0-9]+(?:-[a-z0-9]+)*", sl) or len(sl) > 75):
            loi.append(f"SEO: slug «{sl}» sai dạng (chữ thường không dấu, gạch nối, ≤75 ký tự)")
        if kw:
            h1 = next((d["en"] for d in co_dich if d["loai"] == "h1"), "")
            than = " ".join(d["en"] for d in co_dich if d["loai"] in ("p", "li"))
            dau_bai = " ".join(bo_link(than).split()[:150]).lower()
            if kw not in mt.lower():
                loi.append(f"SEO: từ khoá chính «{kw}» không có trong meta title")
            if kw not in bo_link(h1).lower():
                canh.append(f"SEO: từ khoá chính «{kw}» không có nguyên cụm trong H1")
            if kw not in md_.lower():
                canh.append("SEO: từ khoá chính không có trong meta description")
            if kw not in dau_bai:
                canh.append("SEO: từ khoá chính không có trong 150 chữ đầu bài")
            tu_kw = [w for w in re.split(r"[^a-z0-9]+", kw) if len(w) > 2]
            if sl and not all(w in sl for w in tu_kw):
                canh.append("SEO: slug chưa chứa đủ chữ chính của từ khoá")
            so_lan = bo_link(than).lower().count(kw)
            so_chu = max(1, len(than.split()))
            if so_lan / so_chu > 0.025:
                loi.append(f"SEO: nhồi từ khoá — «{kw}» xuất hiện {so_lan} lần/{so_chu} chữ (>2,5%)")

    # 10. bảng thuật ngữ
    loi += kiem_bang_thuat_ngu(tn)

    bao_cao = [f"# CỬA 0 — {viec.name} — {dt.datetime.now():%Y-%m-%d %H:%M}",
               f"Kết quả: {'ĐỎ' if loi else 'XANH'} · {len(loi)} lỗi chặn · {len(canh)} cảnh báo · {len(co_dich)}/{len(dong)} đoạn đã dịch", "",
               "## LỖI CHẶN (phải sửa hết)", *([f"- {x}" for x in loi] or ["- (không)"]), "",
               "## CẢNH BÁO (đọc từng dòng, sửa hoặc ghi lý do vào báo cáo)", *([f"- {x}" for x in canh] or ["- (không)"])]
    (viec / "kiem-bao-cao.md").write_text("\n".join(bao_cao) + "\n", encoding="utf-8")
    print("\n".join(bao_cao[:2]))
    for x in loi[:30]:
        print("  ✗", x)
    if len(loi) > 30:
        print(f"  … còn {len(loi)-30} lỗi, xem kiem-bao-cao.md")
    sys.exit(1 if loi else 0)


def kiem_bang_thuat_ngu(tn):
    loi, thay = [], {}
    for r in tn:
        if r.get("loai") not in ("thuat-ngu", "ten-rieng", "khong-dich", "cam"):
            loi.append(f"THUẬT NGỮ: loại sai «{r.get('loai')}» ở dòng «{r.get('vi')}»")
        if r.get("trang_thai") not in ("chot", "goi-y"):
            loi.append(f"THUẬT NGỮ: trạng thái sai «{r.get('trang_thai')}» ở dòng «{r.get('vi')}»")
        k = (r.get("loai"), (r.get("vi") or r.get("en") or "").strip().lower())
        if k in thay:
            loi.append(f"THUẬT NGỮ TRÙNG: «{k[1]}» — xoá dòng cũ, giữ dòng mới")
        thay[k] = 1
    return loi


def lenh_kiemtn(_):
    loi = kiem_bang_thuat_ngu(doc_thuat_ngu())
    print(f"Bảng thuật ngữ: {len(doc_thuat_ngu())} dòng · {'ĐỎ' if loi else 'XANH'}")
    for x in loi:
        print("  ✗", x)
    sys.exit(1 if loi else 0)


# ---------- nạp bộ nhớ dịch ----------
def lenh_nap(args):
    viec = Path(args[0])
    dong = [d for d in doc_tsv(viec / "song-ngu.tsv") if (d["en"] or "").strip() not in ("", "[BO]") and d["vi"].strip()]
    meta = json.loads((viec / "meta.json").read_text(encoding="utf-8")) if (viec / "meta.json").exists() else {}
    cu = {chuan(e["vi"]): e for e in doc_tm()}
    moi = thay = 0
    for d in dong:
        k = chuan(d["vi"])
        if k in cu:
            if cu[k]["en"] != d["en"]:
                thay += 1
            del cu[k]  # xoá cũ, thêm mới ở cuối
        else:
            moi += 1
        cu[k] = {"vi": d["vi"], "en": d["en"], "loai": d["loai"], "viec": viec.name,
                 "nguon": meta.get("nguon", ""), "ngay": f"{dt.date.today():%Y-%m-%d}"}
    TM.write_text("".join(json.dumps(e, ensure_ascii=False) + "\n" for e in cu.values()), encoding="utf-8")
    tu = ['<?xml version="1.0" encoding="UTF-8"?>', '<tmx version="1.4"><header creationtool="imm-dich" creationtoolversion="1" datatype="plaintext" segtype="block" adminlang="en" srclang="vi" o-tmf="jsonl"/><body>']
    for e in cu.values():
        tu.append(f'<tu><prop type="viec">{html.escape(e["viec"])}</prop><tuv xml:lang="vi"><seg>{html.escape(e["vi"])}</seg></tuv><tuv xml:lang="en"><seg>{html.escape(e["en"])}</seg></tuv></tu>')
    tu.append("</body></tmx>")
    TMX.write_text("\n".join(tu), encoding="utf-8")
    print(f"Bộ nhớ dịch: +{moi} mới · {thay} cập nhật bản dịch · tổng {len(cu)} · đã xuất TMX")


# ---------- xem / điền ----------
def lenh_xem(args):
    viec = Path(args[0]); dong = doc_tsv(viec / "song-ngu.tsv")
    tu = args[args.index("--tu") + 1] if "--tu" in args else ""
    den = args[args.index("--den") + 1] if "--den" in args else ""
    for d in dong:
        if (tu and d["id"] < tu) or (den and d["id"] > den):
            continue
        ghi = f" {{{d['ghi_chu']}}}" if d["ghi_chu"] else ""
        print(f"[{d['id']}|{d['loai']}]{ghi} {d['vi']}")
        if d["tm"]:
            print(f"    TM {d['tm']}")
        if "--anh" in args:
            print(f"    EN {d['en']}")


def doc_tep_dien(text):
    kq, hien = {}, None
    for l in text.splitlines():
        m = re.match(r"^\[(s\d{3,})(?:\|([^\]]*))?\]\s?(.*)$", l)
        if m:
            hien = m.group(1); kq[hien] = {"en": m.group(3).strip(), "ghi_chu": (m.group(2) or "").strip()}
        elif hien and l.strip() and not l.startswith("    TM "):
            kq[hien]["en"] = (kq[hien]["en"] + " " + l.strip()).strip()
    return kq


def lenh_dien(args):
    viec = Path(args[0]); p = viec / "song-ngu.tsv"; dong = doc_tsv(p)
    theo_id = {d["id"]: d for d in dong}
    dien = {}
    for t in [a for a in args[1:] if not a.startswith("--")]:
        dien.update(doc_tep_dien(Path(t).read_text(encoding="utf-8")))
    if "--trung" in args:  # đoạn "trung:sXXX" dịch y hệt đoạn gốc (đoạn gốc lấy từ tệp điền hoặc bảng)
        for d in dong:
            m = re.match(r"trung:(s\d+)", d["ghi_chu"] or "")
            if m and d["id"] not in dien and (theo_id[m.group(1)]["loai"] == "img") == (d["loai"] == "img"):
                goc = dien.get(m.group(1), {}).get("en") or theo_id[m.group(1)]["en"]
                if goc:
                    dien[d["id"]] = {"en": goc, "ghi_chu": ""}
    if "--tm100" in args:  # đoạn còn trống mà bộ nhớ dịch khớp 100% thì dùng lại nguyên văn
        for d in dong:
            if d["id"] not in dien and not (d["en"] or "").strip() and (d["tm"] or "").startswith("100%: "):
                dien[d["id"]] = {"en": d["tm"][6:], "ghi_chu": ""}
    la = [k for k in dien if k not in theo_id]
    if la:
        sys.exit(f"LỖI: mã đoạn không có trong bảng: {', '.join(la)} — không ghi gì")
    for k, v in dien.items():
        theo_id[k]["en"] = v["en"]
        if v["ghi_chu"]:
            cu = theo_id[k]["ghi_chu"]
            theo_id[k]["ghi_chu"] = (cu + " " + v["ghi_chu"]).strip() if v["ghi_chu"] not in cu else cu
    ghi_tsv(p, dong)
    con = sum(1 for d in dong if not (d["en"] or "").strip())
    print(f"Điền {len(dien)} đoạn · còn trống {con}/{len(dong)}")


if __name__ == "__main__":
    lenh = {"moi": lenh_moi, "tukhoa": lenh_tukhoa, "tygia": lenh_tygia, "ghep": lenh_ghep,
            "kiem": lenh_kiem, "nap": lenh_nap, "kiemtn": lenh_kiemtn, "xem": lenh_xem, "dien": lenh_dien}
    if len(sys.argv) < 2 or sys.argv[1] not in lenh:
        print(__doc__); sys.exit(2)
    lenh[sys.argv[1]](sys.argv[2:])
