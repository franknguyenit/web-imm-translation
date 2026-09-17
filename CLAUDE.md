# Dịch web IMM Group — Việt → Anh (luật dự án)

CEO giao 17/09/2026. Luật dự án thắng `~/.claude/CLAUDE.md` khi mâu thuẫn.

**Việc:** dịch nội dung immgroup.com từ tiếng Việt sang tiếng Anh cho **khách quốc tế**, chuyên ngành đầu tư định
cư, quốc tịch toàn cầu và quản lý tài sản (wealth management).
**Mục tiêu:** tự động hoàn toàn. CEO chỉ cần đưa **link**, **tệp**, hoặc **dán nội dung** → Claude chạy trọn 11
bước dưới đây tới khi có bản giao, **không hỏi giữa chừng** (trừ mục 6).
**Bàn giao = nội dung viết thẳng ra khung chat** (CEO chốt 17/09/2026: *"bàn giao là nội dung viết ra trong khung chat
này. Việc còn lại team khác làm."*). Đăng WordPress, chuyển hướng 301, dựng trang là việc team khác — Claude không làm.
**Chỉ dịch nội dung** — không hỏi lan man, không phân tích ngoài nhiệm vụ (CEO chốt 17/09/2026).

## 1. Nhận diện đầu vào → bắt đầu ngay

| CEO đưa | Lệnh đầu tiên |
|---|---|
| Link `immgroup.com/...` (hoặc link tiếng Việt khác) | `python3 cong-cu/dich.py moi "<link>"` |
| Tệp `.docx` `.pdf` `.md` `.txt` `.html` | `python3 cong-cu/dich.py moi "<đường dẫn>"` |
| Dán chữ vào khung chat | Ghi nguyên văn ra `viec/nhap/<yyyy-mm-dd>-<slug>.md` (giữ `#` heading, `-` gạch đầu dòng) rồi `moi` tệp đó |
| Nhiều link một lượt | Mỗi link một thư mục việc; chạy song song tối đa 4 việc (mục 3) |

- Lệnh `moi` báo 0 đoạn (trang chặn máy, hoặc trang dựng bằng JavaScript) → mở trang bằng Browser pane,
  `get_page_text`, ghi ra `.md`, chạy lại `moi` với tệp đó. Không dùng WebFetch để lấy nguồn (nó tóm tắt, mất chữ).
- `moi` tự lấy **bản tiếng Anh đang có** (thẻ hreflang) vào `tham-khao-ban-en-hien-co.md`. Chỉ để giữ nhất quán
  tên gọi. **Không chép**, vì bản cũ có thể sai.

## 2. Bản đồ thư mục

```
cong-cu/dich.py            mọi việc cơ học: moi · xem · dien · tukhoa · tygia · ghep · kiem · nap · kiemtn
cong-cu/dong-bo-bo-nho.sh  chép memory + skill của Claude về bo-nho/
quy-trinh/style-guide.md   giọng, dịch sát/viết lại, tuân thủ, số-tiền-ngày, SEO — ĐỌC TRƯỚC MỖI VIỆC
thuat-ngu/thuat-ngu.csv    bảng thuật ngữ (nguồn sự thật duy nhất) — cột: vi,en,bien_the_en,loai,trang_thai,ghi_chu,nguon
bo-nho-dich/               bộ nhớ dịch (translation memory): .jsonl (máy dùng) + .tmx (mở được bằng Trados/memoQ)
seo/tu-khoa-thi-truong.md  từ khoá đã học theo thị trường, dồn qua các việc
viec/<ngày>-<slug>/        một việc: meta.json · song-ngu.tsv · ty-gia.json · tu-khoa.json · soat-*.md · kiem-bao-cao.md
  ban-giao/                bai-dich.en.md · bai-dich.en.html · seo.json · bao-cao.md   ← bản lưu local, nguồn để viết vào chat
bo-nho/                    bản local của memory + skill trên Claude
nhat-ky/nhat-ky.md         nhật ký từng việc
tests/                     cửa kiểm máy của bộ công cụ: python3 -m unittest discover -s tests
```

`song-ngu.tsv` là **bảng dịch song ngữ, mỗi dòng một đoạn** (heading, đoạn văn, gạch đầu dòng, alt ảnh, nút bấm).
Bản giao được **máy ghép** từ bảng này ⇒ kiểm bảng là kiểm bản giao. Không sửa tay tệp trong `ban-giao/` trừ `seo.json` và `bao-cao.md`.

## 3. Quy trình 11 bước

Khai ba dòng đầu lượt (luật toàn cục). Dòng mẫu cho việc dịch một trang:
*"0. Song song: bước 5 và 6 chạy song song; trang >2.000 chữ chia mẻ theo H2 · 1. Tầng model: Opus dịch và
chốt, Sonnet soát song ngữ, Opus soát bản xứ; không giao model ngoài vì đây là nội dung đăng danh nghĩa công ty ·
2. Việc lặp: `dich.py` lo tách, tra bộ nhớ dịch, từ khoá, tỷ giá, ghép, kiểm."*

### Giai đoạn 1 — Chuẩn bị

**B1. Brief.** Đọc `meta.json` + `python3 cong-cu/dich.py xem <việc>`. Ghi `viec/<việc>/brief.md` ≤15 dòng:
mục đích trang (giới thiệu chương trình / bài tin / trang dịch vụ / hỏi đáp) · người đọc đích · chương trình này
hợp thị trường nào (nhà đầu tư EB-5 thường ở châu Á, Trung Đông, Mỹ Latinh…) · giọng · **bảng phân đoạn: đoạn nào
dịch sát, đoạn nào viết lại, đoạn nào bỏ hoặc viết chung vì chỉ hợp khách Việt** (theo style guide mục 2 và 4).

**B2. Thuật ngữ + style guide.** Đọc `quy-trinh/style-guide.md` và `thuat-ngu/thuat-ngu.csv`. Gặp thuật ngữ mới
→ thêm dòng vào CSV với `trang_thai=goi-y`, cột `nguon` = tên việc. Chỉ đổi sang `chot` khi CEO xác nhận hoặc có
nguồn chính thức (trang USCIS, luật, website chính phủ). Chạy `python3 cong-cu/dich.py kiemtn` phải XANH.

**B3. Từ khoá theo thị trường — nghiên cứu lại, không dịch bộ từ khoá gốc.**
1. Chọn 2–4 "hạt" tiếng Anh theo cách **người bản xứ gõ** (vd `eb-5 visa`, `us green card by investment`),
   không theo chữ Việt.
2. `python3 cong-cu/dich.py tukhoa <việc> "hạt 1" "hạt 2"` → gợi ý Google thật ở Mỹ, Anh, Úc, Canada, Singapore,
   UAE (thêm `--thi-truong` nếu chương trình hợp thị trường khác).
3. `WebSearch` từ khoá ứng viên mạnh nhất → xem 5 kết quả đầu: đối thủ đặt tiêu đề thế nào, người tìm muốn biết gì.
4. Chốt 1 từ khoá chính + 3–6 từ khoá phụ, ghi vào `brief.md` kèm lý do.
⚠ Không có số lượt tìm kiếm (cần công cụ trả phí như Ahrefs/Semrush). Báo cáo phải ghi rõ "xếp hạng theo độ phủ
gợi ý Google, chưa có số lượt tìm". Muốn có số → hỏi CEO (mục 6, tiêu tiền).

### Giai đoạn 2 — Dịch và kiểm soát ngôn ngữ

**B4. Dịch / viết lại (Opus, luồng chính).**
- Đoạn có gợi ý bộ nhớ dịch `TM 100%` → dùng lại nguyên văn trừ khi sai ngữ cảnh. `TM 85–99%` → sửa phần khác.
  Dòng `trung:sXXX` → dịch y hệt đoạn gốc.
- Viết bản dịch ra `viec/<việc>/dich-1.txt` (nhiều phần thì `dich-2.txt`…), mỗi đoạn một dòng dạng:
  `[s001] English text` · bỏ đoạn: `[s008|#bo: lý do] [BO]` · bỏ qua kiểm số có lý do: `[s005|#bo-qua-so: lý do] text`.
  Rồi `python3 cong-cu/dich.py dien <việc> viec/<việc>/dich-*.txt`.
- **B8 làm ngay trong lúc dịch:** tiền VND → chạy `tygia <việc>` trước, đổi sang USD theo style guide mục 5.
- **B9 làm ngay trong lúc dịch:** bỏ ngữ cảnh khách Việt theo style guide mục 4.
- Trang >2.000 chữ: chia theo H2 thành tối đa 4 mẻ, giao sub-agent **Opus** song song (lời giao phải kèm đường
  dẫn brief, style guide, thuật ngữ, từ khoá, và nhắc: *sub-agent không tự nạp skill; chỉ ghi tệp `dich-N.txt` được
  giao; trả ≤5 dòng*). Luồng chính đọc lại toàn bài để đồng bộ giọng và thuật ngữ giữa các mẻ.
- Chạy `python3 cong-cu/dich.py kiem <việc>`. Sửa hết **LỖI CHẶN** trước khi sang B5.

**B5 + B6 chạy SONG SONG — hai sub-agent độc lập, không thấy báo cáo của nhau.** Nạp `model-routing` trước.
Cả hai chỉ đọc, chỉ ghi đúng hai tệp của mình, trả ≤5 dòng. Luồng chính **không tự soát thay** hai agent này (CEO
yêu cầu bằng chữ phải có agent thứ hai).

**B5. Hiệu đính song ngữ** — `general-purpose`, model **sonnet**, effort high. Đọc `song-ngu.tsv` cột `vi` đối
chiếu `en` từng dòng: sai nghĩa · sót ý · thêm ý không có ở nguồn · số liệu, ngày, tên mẫu đơn · thuật ngữ lệch
bảng · lời hứa vượt nguồn. Ghi `soat-song-ngu.md` (mã đoạn · lỗi · mức nặng) và `sua-song-ngu.txt` (định dạng `[sXXX] bản sửa`).

**B6. Soát chuyên môn + bản xứ** — `general-purpose`, model **opus**. Bước 1: **chỉ đọc bản tiếng Anh**
(`xem <việc> --anh`) như một biên tập viên bản xứ ngành private wealth / investment migration: câu có tự nhiên
không, có "mùi dịch" không, thuật ngữ ngành có đúng cách người trong nghề nói không, giọng có khớp style guide.
Bước 2: kiểm chuyên môn — tên chương trình, tên cơ quan, điều kiện luật có nói đúng không; lời nào có rủi ro tuân
thủ. Ghi `soat-ban-xu.md` và `sua-ban-xu.txt`.

**Gom (Opus, luồng chính):** đọc hai báo cáo, quyết từng góp ý (nhận / bác kèm lý do một dòng), áp phần nhận bằng
`dien`, chạy lại `kiem`.

**B7. SEO on-page.** Ghi `ban-giao/seo.json`:
```json
{"thi_truong": "global-en (US English)", "tu_khoa_chinh": "...", "tu_khoa_phu": ["..."],
 "meta_title": "...", "meta_description": "...", "slug": "...",
 "slug_cu_can_301": "/en/...-cu/ hoặc rỗng", "schema_faq": true}
```
Rà lại H1, H2, 150 chữ đầu, alt ảnh để có từ khoá **tự nhiên**; sửa qua `dien`. Trang có hỏi đáp → `schema_faq: true`.

**Cửa 0 (bắt buộc, máy):** `python3 cong-cu/dich.py kiem <việc>` → **XANH**. Cảnh báo phải đọc từng dòng: sửa,
hoặc nêu lý do trong báo cáo. Sau đó `python3 cong-cu/dich.py ghep <việc>`.
⛔ Không được sửa `dich.py`, `thuat-ngu.csv` hay bộ ca kiểm để **cho qua** một lỗi của bài đang dịch. Luật kiểm sai
thật → sửa luật + thêm ca kiểm + `python3 -m unittest discover -s tests` xanh + ghi nhật ký lý do.

**Báo cáo** `ban-giao/bao-cao.md` (tiếng Việt đời thường): nguồn · số đoạn / số chữ · từ khoá chính và phụ kèm lý do ·
đoạn viết lại lớn · **đoạn đã bỏ hoặc viết chung vì ngữ cảnh Việt** · phép quy đổi tiền (số gốc, tỷ giá, nguồn, ngày) ·
chỗ đã làm mềm vì tuân thủ · góp ý của B5/B6 đã bác và lý do · điều nguồn có vẻ sai hoặc lỗi thời (đã dịch đúng
nguồn, cần CEO xác nhận) · slug cũ cần chuyển hướng 301 · kết quả cửa 0 · nhãn **"chưa qua soi độc lập"**.

**Bàn giao trong chat — đúng thứ tự, không gửi tệp:**
1. **Khối SEO** (bảng): meta title · meta description · slug · từ khoá chính · từ khoá phụ · alt ảnh (nếu có).
2. **Bài dịch tiếng Anh hoàn chỉnh**, dạng Markdown (heading, danh sách, in đậm, liên kết), chép nguyên từ
   `ban-giao/bai-dich.en.md` — không gõ lại tay, không sửa khác bản đã qua cửa 0.
3. **Ghi chú cho team** (tiếng Việt, ≤8 gạch): đoạn đã bỏ hoặc viết chung vì ngữ cảnh Việt · quy đổi tiền · chỗ làm
   mềm vì tuân thủ · điều nguồn có vẻ lỗi thời cần CEO xác nhận · slug cũ cần 301 · cửa 0 xanh + số lỗi B5/B6 bắt ·
   nhãn "chưa qua soi độc lập".

### Giai đoạn 3 — Tự học sau mỗi việc (B10, B11)

CEO uỷ quyền bằng chữ 17/09/2026, không cần hỏi: *"sau mỗi phiên dịch, lưu memory, lưu các từ chuyên ngành để lần sau
làm tốt hơn theo rule self-learning & improving. Mọi thứ đều lưu trên cloud của claude và phải có 1 bản dưới folder
local dự án"* · *"Sau mỗi phiên, tạo skill mới nếu thấy phù hợp hoặc update skill cũ nếu đã có, không cần hỏi."*
Uỷ quyền này chỉ áp cho **memory và skill của dự án dịch này**; không mở cho `CLAUDE.md`, hook, `settings.json`.

1. **Bộ nhớ dịch:** `python3 cong-cu/dich.py nap <việc>` (trùng thì xoá cũ giữ mới, tự xuất TMX).
2. **Thuật ngữ:** thêm thuật ngữ mới vào CSV (`goi-y`); thuật ngữ CEO sửa → `chot` + ghi nguyên văn CEO vào cột
   `ghi_chu`. Trùng dòng → xoá cũ giữ mới. `kiemtn` xanh.
3. **Từ khoá:** thêm vào `seo/tu-khoa-thi-truong.md` điều học được về cách người bản xứ tìm (theo thị trường, theo chương trình).
4. **Memory Claude** (`~/.claude/projects/-Volumes-WORK-DATA-web-imm-translation/memory/`): chỉ ghi điều **không suy
   ra được từ tệp dự án**: CEO sửa/chê gì (loại `feedback`, kèm nguyên văn + ngày) · thị trường, đối tượng CEO nói
   thêm · quyết định CEO chốt. Không chép thuật ngữ vào memory (đã có CSV); memory trỏ tới CSV.
5. **Style guide:** CEO chốt cách viết mới → sửa `quy-trinh/style-guide.md` + dòng nhật ký ở mục 8 của tệp đó.
6. **Skill:** sau việc dịch **đầu tiên** tạo skill `dich-web-imm` (cách chạy quy trình này ở nơi khác, kể cả
   Cowork); các lần sau cập nhật nếu học được điều mới. Ghi **cùng một lệnh** vào `~/.claude/portable/skill-cua-tony/dich-web-imm/`
   **và** `~/.claude/hop-thu-skill/dich-web-imm/`; không tự chạy `hooks/skill-sync.sh`.
7. `bash cong-cu/dong-bo-bo-nho.sh` → XANH (bản local khớp số tệp memory trên Claude).
8. Một dòng `nhat-ky/nhat-ky.md`: ngày · việc · số đoạn · lỗi cửa 0 lần đầu · số lỗi B5/B6 bắt · điều học được.
9. Chốt phiên theo luật toàn cục (`hoc.py hang-doi` → `mark-done`).

## 4. Phân tầng model — đã cân, không giao model ngoài

Nội dung đăng lên web **danh nghĩa công ty**, ngành tài chính và di trú: sai là rủi ro pháp lý và uy tín (B0 = không
giao). Vì vậy: dịch và chốt = Opus · soát song ngữ = Sonnet (số liệu và thuật ngữ đã có máy kiểm) · soát bản xứ
và chuyên môn = Opus. DeepSeek chỉ được dùng để **tóm tắt tài liệu tham khảo dài** (vd văn bản luật gốc 100 trang)
khi cần hiểu bối cảnh, không bao giờ để dịch câu sẽ đăng.

## 5. Những việc KHÔNG làm

- Không đăng, không sửa trang trên immgroup.com, không đăng nhập WordPress. Chỉ giao nội dung trong chat.
- Không gửi bản dịch ra ngoài (email, Drive chia sẻ) khi CEO chưa bảo.
- Không bịa dữ kiện, không cập nhật số liệu luật theo hiểu biết riêng: nguồn có vẻ lỗi thời → dịch đúng nguồn + ghi
  vào báo cáo để CEO quyết.
- Không đưa hồ sơ khách hàng thật vào công cụ ngoài.

## 6. Khi nào DỪNG hỏi CEO (ngoài ra tự chạy hết)

1. Cần công cụ trả phí (số lượt tìm từ khoá, dịch vụ dịch thuật ngoài).
2. Nguồn không phải nội dung IMM Group, hoặc là tài liệu mật / hồ sơ khách hàng.
3. Cả trang chỉ dành cho khách Việt (vd hướng dẫn thủ tục ở Việt Nam): bỏ hết thì không còn gì để dịch.
4. Hai hướng khác bản chất, vd nên gộp hai trang Việt thành một trang Anh.

Còn lại (thuật ngữ chưa chắc, chọn từ khoá, quy đổi tiền, làm mềm lời hứa) → **tự quyết, ghi báo cáo, CEO sửa sau.**

## 7. Quyết định CEO đã chốt (17/09/2026, nguyên văn: *"đồng ý 1,2. bàn giao là nội dung viết ra trong khung chat này"*)

1. Tiếng Anh **Mỹ**, ký hiệu `US$`, một bản tiếng Anh chung cho mọi thị trường.
2. Thị trường gợi ý từ khoá mặc định: Mỹ, Anh, Úc, Canada, Singapore, UAE.
3. Bàn giao là nội dung viết trong khung chat (mục đầu tệp); không gửi tệp, không làm `.docx`.
