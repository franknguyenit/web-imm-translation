"""Cửa 0 của bộ công cụ: chạy `python3 -m unittest discover -s tests` từ gốc dự án."""
import csv, importlib.util, json, shutil, subprocess, sys, tempfile, unittest
from pathlib import Path

GOC = Path(__file__).resolve().parent.parent
MAU = GOC / "tests" / "mau" / "viec-mau"
spec = importlib.util.spec_from_file_location("dich", GOC / "cong-cu" / "dich.py")
dich = importlib.util.module_from_spec(spec); spec.loader.exec_module(dich)


def chay_kiem(viec):
    r = subprocess.run([sys.executable, str(GOC / "cong-cu" / "dich.py"), "kiem", str(viec)], capture_output=True, text=True)
    return r.returncode, (viec / "kiem-bao-cao.md").read_text(encoding="utf-8")


class KiemCua0(unittest.TestCase):
    def setUp(self):
        self.tmp = Path(tempfile.mkdtemp()); self.viec = self.tmp / "viec"
        shutil.copytree(MAU, self.viec)

    def tearDown(self):
        shutil.rmtree(self.tmp)

    def sua(self, id_, cot, gia_tri):
        p = self.viec / "song-ngu.tsv"
        rows = dich.doc_tsv(p)
        for r in rows:
            if r["id"] == id_:
                r[cot] = gia_tri
        dich.ghi_tsv(p, rows)

    def sua_seo(self, k, v):
        p = self.viec / "ban-giao" / "seo.json"; d = json.loads(p.read_text()); d[k] = v; p.write_text(json.dumps(d))

    def do(self, mau_loi):
        ma, bc = chay_kiem(self.viec)
        self.assertEqual(ma, 1, bc)
        chan = bc.split("## CẢNH BÁO")[0]
        self.assertIn(mau_loi, chan, bc)

    def test_bai_mau_xanh(self):
        ma, bc = chay_kiem(self.viec)
        self.assertEqual(ma, 0, bc)

    def test_so_lech(self):
        self.sua("s002", "en", "The minimum investment is **US$900,000**, and Form I-526E petitions must be filed by September 30, 2026."); self.do("SỐ LỆCH")

    def test_ngay_lech(self):
        self.sua("s002", "en", "The minimum investment is **US$800,000**, and Form I-526E petitions must be filed by September 30, 2025."); self.do("SỐ LỆCH")

    def test_quy_doi_sai(self):
        self.sua("s004", "en", "Service fees are approximately US$35,000."); self.do("QUY ĐỔI SAI")

    def test_con_vnd(self):
        self.sua("s004", "en", "Service fees are approximately 520 million VND (US$20,000)."); self.do("CÒN ĐƠN VỊ VND")

    def test_thuat_ngu_chot(self):
        self.sua("s003", "en", "Your whole family receives a temporary green card, including your spouse and unmarried children under 21"); self.do("THUẬT NGỮ «thẻ xanh có điều kiện»")

    def test_khong_dich(self):
        self.sua("s007", "en", "More than 2,500 clients have trusted our firm"); self.do("THUẬT NGỮ «IMM Group»")

    def test_con_tieng_viet(self):
        self.sua("s007", "en", "More than 2,500 khách hàng have trusted IMM Group"); self.do("CÒN CHỮ TIẾNG VIỆT")

    def test_tu_cam(self):
        self.sua("s003", "en", "Your whole family receives a guaranteed green card: a conditional green card for your spouse and children under 21"); self.do("TỪ CẤM")

    def test_khach_viet(self):
        self.sua("s007", "en", "More than 2,500 Vietnamese clients have trusted IMM Group"); self.do("TỪ CẤM")

    def test_thieu_ban_dich(self):
        self.sua("s006", "en", ""); self.do("THIẾU BẢN DỊCH")

    def test_bo_khong_ly_do(self):
        self.sua("s008", "ghi_chu", ""); self.do("ĐÃ BỎ đoạn")

    def test_anh_thieu_alt(self):
        self.sua("s005", "en", ""); self.do("ẢNH THIẾU ALT")

    def test_mat_lien_ket(self):
        self.sua("s006", "en", "Learn more about the EB-5 program."); self.do("SỐ LIÊN KẾT LỆCH")

    def test_hai_h1(self):
        self.sua("s007", "loai", "h1"); self.do("cần đúng 1 H1")

    def test_doan_trich_khong_h1(self):
        self.sua("s001", "loai", "h2")
        self.do("cần đúng 1 H1")
        self.sua_seo("phan_doan", True)
        ma, bc = chay_kiem(self.viec)
        self.assertEqual(ma, 0, bc)
        self.assertIn("đoạn trích", bc)
        self.sua("s007", "loai", "h1"); self.sua("s001", "loai", "h1")
        self.do("cần đúng 1 H1")  # cờ đoạn trích không tha 2 H1

    def test_seo_title_dai(self):
        self.sua_seo("meta_title", "EB-5 Visa: The Complete Guide to a U.S. Green Card Through Investment for Families"); self.do("meta title")

    def test_seo_mo_ta_ngan(self):
        self.sua_seo("meta_description", "EB-5 visa guide."); self.do("meta description")

    def test_slug_sai(self):
        self.sua_seo("slug", "EB5 Visa_Mỹ"); self.do("slug")

    def test_tu_khoa_khong_trong_title(self):
        self.sua_seo("meta_title", "U.S. Green Card Through Investment | IMM Group"); self.do("không có trong meta title")

    def test_chua_ty_gia(self):
        (self.viec / "ty-gia.json").unlink(); self.do("chưa chạy `tygia`")


class DonVi(unittest.TestCase):
    def test_so_vi(self):
        self.assertEqual(dich.lay_so("800.000 USD, 2,5%, 1 tỷ đồng, 30/09/2026", "vi"), ([800000.0, 2.5, 30.0, 9.0, 2026.0], [1e9]))

    def test_so_en(self):
        self.assertEqual(sorted(dich.lay_so("US$800,000, 2.5%, three years, September 30th, 2026, $1.2 million", "en")[0]),
                         sorted([800000.0, 2.5, 3.0, 9.0, 30.0, 2026.0, 1200000.0]))

    def test_may_khong_phai_thang(self):
        self.assertEqual(dich.lay_so("Rules may change. You may save. Filed May 22, 2026 or 1 March 2027.", "en")[0], [5.0, 22.0, 2026.0, 1.0, 3.0, 2027.0])
        self.assertEqual(dich.lay_so("EB-5 may not pay. Rules may change in 20 years.", "en")[0], [5.0, 20.0])

    def test_thang_nam(self):
        self.assertEqual(dich.lay_so("Founded in January 2005; June 2016 | VTC8", "en")[0], [1.0, 2005.0, 6.0, 2016.0, 8.0])

    def test_ten_nuoc_ngoai_khong_phai_tieng_viet(self):
        self.assertFalse(dich.con_tieng_viet("André Miranda of Estudio Jurídico"))
        self.assertTrue(dich.con_tieng_viet("more than khách hàng"))
        self.assertTrue(dich.con_tieng_viet("Phục vụ"))

    def test_tach_md(self):
        d = dich.tach_md("# Tiêu đề\n\nĐoạn một\ndòng hai\n\n- mục a\n![ảnh](a.png)\n> trích")
        self.assertEqual([x["loai"] for x in d], ["h1", "p", "li", "img", "quote"])
        self.assertEqual(d[1]["vi"], "Đoạn một dòng hai")

    def test_tach_html_bo_rac(self):
        m, d = dich.tach_html('<html><head><title>T</title><link rel="alternate" hreflang="en" href="https://x/en/"></head><body><div id="content"><!-- CTA --><h1>Tiêu đề <span class="material-symbols-outlined">info</span></h1><p>Xin <a href="/a">chào</a></p><footer>chân</footer><img src="b.webp" alt="ảnh"></div></body></html>')
        self.assertEqual(m["hreflang_en"], "https://x/en/")
        self.assertEqual([(x["loai"], x["vi"]) for x in d], [("h1", "Tiêu đề"), ("p", "Xin [chào](/a)"), ("img", "ảnh")])

    def test_nap_xoa_cu_giu_moi(self):
        tmp = Path(tempfile.mkdtemp())
        cu_tm, cu_tmx = dich.TM, dich.TMX
        try:
            dich.TM, dich.TMX = tmp / "tm.jsonl", tmp / "tm.tmx"
            dich.TM.write_text(json.dumps({"vi": "Thẻ xanh", "en": "Green card cũ", "loai": "p", "viec": "a", "nguon": "", "ngay": ""}, ensure_ascii=False) + "\n")
            v = tmp / "v"; v.mkdir()
            dich.ghi_tsv(v / "song-ngu.tsv", [{"id": "s1", "loai": "p", "vi": "thẻ  xanh", "en": "Green card"}, {"id": "s2", "loai": "p", "vi": "Mới", "en": "New"}])
            dich.lenh_nap([str(v)])
            tm = dich.doc_tm()
            self.assertEqual([e["en"] for e in tm], ["Green card", "New"])
            self.assertEqual(dich.goi_y_tm("Thẻ xanh", tm), "100%: Green card")
            self.assertIn("<tmx", dich.TMX.read_text())
        finally:
            dich.TM, dich.TMX = cu_tm, cu_tmx; shutil.rmtree(tmp)

    def test_dien(self):
        tmp = Path(tempfile.mkdtemp())
        try:
            dich.ghi_tsv(tmp / "song-ngu.tsv", [{"id": "s001", "loai": "p", "vi": "a"}, {"id": "s002", "loai": "p", "vi": "b", "ghi_chu": "trung:s001"}])
            (tmp / "d.txt").write_text("[s001] Hello\nworld\n[s002|#bo: chỉ cho khách Việt] [BO]\n")
            dich.lenh_dien([str(tmp), str(tmp / "d.txt")])
            r = dich.doc_tsv(tmp / "song-ngu.tsv")
            self.assertEqual(r[0]["en"], "Hello world")
            self.assertEqual((r[1]["en"], r[1]["ghi_chu"]), ("[BO]", "trung:s001 #bo: chỉ cho khách Việt"))
            dich.ghi_tsv(tmp / "song-ngu.tsv", r + [{"id": "s003", "loai": "p", "vi": "c", "tm": "100%: C"}, {"id": "s004", "loai": "p", "vi": "d", "tm": "90%: D"}])
            dich.lenh_dien([str(tmp), "--tm100"])
            r2 = dich.doc_tsv(tmp / "song-ngu.tsv")
            self.assertEqual([x["en"] for x in r2], ["Hello world", "[BO]", "C", ""])
            dich.ghi_tsv(tmp / "song-ngu.tsv", [{"id": "s001", "loai": "p", "vi": "a"}, {"id": "s002", "loai": "p", "vi": "a", "ghi_chu": "trung:s001"}])
            (tmp / "t.txt").write_text("[s001] A")
            dich.lenh_dien([str(tmp), str(tmp / "t.txt"), "--trung"])
            self.assertEqual([x["en"] for x in dich.doc_tsv(tmp / "song-ngu.tsv")], ["A", "A"])
            (tmp / "x.txt").write_text("[s999] lạc")
            with self.assertRaises(SystemExit):
                dich.lenh_dien([str(tmp), str(tmp / "x.txt")])
        finally:
            shutil.rmtree(tmp)

    def test_ghep_giu_so_thu_tu(self):
        tmp = Path(tempfile.mkdtemp())
        try:
            dich.ghi_tsv(tmp / "song-ngu.tsv", [{"id": "s001", "loai": "li", "vi": "5. a", "en": "5. A?"}, {"id": "s002", "loai": "li", "vi": "b", "en": "B"}])
            dich.lenh_ghep([str(tmp)])
            self.assertEqual((tmp / "ban-giao" / "bai-dich.en.md").read_text().splitlines()[:2], ["5. A?", "- B"])
        finally:
            shutil.rmtree(tmp)

    def test_trung_khong_lan_tu_alt_anh(self):
        tmp = Path(tempfile.mkdtemp())
        try:
            dich.ghi_tsv(tmp / "song-ngu.tsv", [{"id": "s001", "loai": "img", "vi": "IBDA", "en": "IBDA logo"}, {"id": "s002", "loai": "p", "vi": "IBDA", "ghi_chu": "trung:s001"}])
            dich.lenh_dien([str(tmp), "--trung"])
            self.assertEqual(dich.doc_tsv(tmp / "song-ngu.tsv")[1]["en"], "")
        finally:
            shutil.rmtree(tmp)

    def test_bang_thuat_ngu_that_xanh(self):
        self.assertEqual(dich.kiem_bang_thuat_ngu(dich.doc_thuat_ngu()), [])


if __name__ == "__main__":
    unittest.main()
