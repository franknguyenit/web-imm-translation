# Báo cáo dịch — Định cư Canada New Brunswick (diện doanh nhân)

**Ngày:** 22/09/2026 · **Việc:** `2026-09-22-dinh-cu-canada-dien-doanh-nhan-new-brunswick`

## Nguồn

- Tệp JSON xuất từ ACF Page Importer của trang tiếng Việt, `post_id` 25169,
  `post_slug` `/dau-tu-dinh-cu-canada/dinh-cu-canada-dien-doanh-nhan-new-brunswick/`.
- Mẫu template: `template-parts/content-product-2026.php` → bộ chuyển `acf-product-2026`.
- **110 đoạn · 1.324 chữ tiếng Việt** · khớp bộ nhớ dịch 16 đoạn (trong đó 12 đoạn TM 100%).

## Từ khoá

- **Chính:** `new brunswick business immigration stream`. Lý do: đây là **tên chính thức hiện hành** trên gnb.ca
  và là cụm được nhiều đối thủ đặt ngay ở thẻ tiêu đề (MAK Immigration "NBBIS 2026", Elaar Immigration,
  JustForCanada, Leduc International). Dài 41 ký tự nên meta title vẫn đủ chỗ cho `| IMM Group`.
- **Phụ:** `new brunswick entrepreneurial stream` (tên **cũ**, vẫn hút tìm kiếm vì Canadim, Adapt Immigration,
  VGIS, XIPHIAS còn dùng) · `new brunswick entrepreneur immigration` · `nbpnp business immigration stream` ·
  `new brunswick pnp requirements` · `canada entrepreneur immigration` · `new brunswick business immigration cost`.
- ⚠ **Chưa có số lượt tìm kiếm.** Lệnh `tukhoa` trả **0 gợi ý** vì Cowork chặn mạng dòng lệnh tới Google
  (lặp lại đúng hiện tượng ở các việc PEI và Ontario cùng ngày). Xếp hạng trên đây dựa vào **độ phủ tiêu đề
  đối thủ trên Google qua WebSearch**. Muốn có số lượt tìm cần công cụ trả phí (Ahrefs/Semrush) — thuộc mục 6
  của luật dự án, phải hỏi CEO trước khi chi tiền.

## Đoạn viết lại lớn

- **s002 (H1):** nguồn viết hoa cả dòng "ĐỊNH CƯ CANADA DIỆN DOANH NHÂN / TỈNH BANG NEW BRUNSWICK" → viết lại
  thành "Entrepreneur Immigration to Canada / New Brunswick Business Immigration Stream" để chứa **nguyên cụm**
  từ khoá chính. Giữ đủ thẻ `{br}` và `{1}…{/1}` (span accent vẫn bọc đúng "New Brunswick").
- **s004:** thêm chủ ngữ "The New Brunswick Business Immigration Stream is…" để từ khoá chính xuất hiện trong
  150 chữ đầu bài (cửa 0 bắt lỗi này ở lần kiểm thứ hai). Không thêm dữ kiện — chỉ gọi đúng tên chương trình
  mà s003 và s009 đã nêu.
- **s011, s020, s033, s047, s086 (các H2):** nguồn viết hoa cả dòng → chuyển về sentence case theo style guide mục 6.
- **s073:** nguồn gõ sai **"Bang Manioba"** → dịch đúng thành **Manitoba**. Cần sửa cả bản tiếng Việt.

## Đoạn đã bỏ hoặc viết chung vì ngữ cảnh Việt

**Không có.** Trang này không có đoạn nào chỉ dành cho khách Việt (không có cộng đồng người Việt, không có thủ
tục tại Việt Nam, không có số tiền VND). Toàn bộ 110 đoạn đều được dịch.

## Quy đổi tiền

Tỷ giá lấy từ `ty-gia.json`: **usd_moi_cad = 0.7131**, nguồn **open.er-api.com (ExchangeRate-API)**, cập nhật
**22/09/2026**. Tệp này được **chép từ việc PEI cùng ngày** vì lệnh `tygia` báo lỗi mạng
(`Tunnel connection failed: 403 Forbidden` — Cowork chặn mạng dòng lệnh).

| Đoạn | Số gốc | Phép tính | Ghi trong bản dịch |
|---|---|---|---|
| s007 | 150.000 CAD | 150,000 × 0.7131 = 106,965 | C$150,000 (approximately US$107,000) |
| s038 | 500.000 CAD | 500,000 × 0.7131 = 356,550 | C$500,000 (approximately US$357,000) |
| s038 | 300.000 CAD | 300,000 × 0.7131 = 213,930 | C$300,000 (approximately US$214,000) |

Mức vốn luật định bằng CAD nên **giữ C$** theo style guide mục 5; USD chỉ là số tham chiếu trong ngoặc, và chỉ
nêu ở lần nhắc đầu tiên của mỗi mức (s021, s042, s110 nhắc lại C$150,000 mà không lặp số USD).

## Chỗ đã làm mềm vì tuân thủ

- s016 "Cơ hội trở thành thường trú nhân" → **"A pathway to permanent residence"**, không hứa chắc được PR.
- s018 "Lộ trình quốc tịch Canada" → **"A route to Canadian citizenship"**; s019 giữ đủ mọi điều kiện nguồn nêu
  (cư trú, thuế, ngôn ngữ, lý lịch) và dùng "can consider applying".
- s092 giữ nguyên ranh giới trách nhiệm của nguồn: "we cannot operate the business on your behalf".
- Không có câu nào dùng "guaranteed", "risk-free" hay hứa kết quả.

## Góp ý của B5/B6 đã bác và lý do

- **s040 (B5 đề xuất "Meets background and medical requirements.")** — **BÁC**. Câu hiện tại
  "Meets background security and medical requirements." là gợi ý **TM 100%** lấy từ các trang đã bàn giao
  (St. Kitts and Nevis và nhóm trang cùng mẫu). Đổi riêng ở trang này sẽ làm lệch câu giữa các trang trên cùng
  website. Nếu CEO muốn đổi thì phải đổi đồng loạt ở mọi trang và cập nhật bộ nhớ dịch.

Hai góp ý trùng nhau về s081 ("social security" là từ Mỹ) — đã nhận **bản của B6** ("social programs"), vì ở
Canada "social insurance" là số định danh (Social Insurance Number) chứ không phải nhóm phúc lợi.

## Điều nguồn có vẻ thiếu hoặc cần CEO xác nhận

Đối chiếu với trang chính thức **gnb.ca** (tra ngày 22/09/2026), **mọi con số trong bản tiếng Việt đều đúng**.
Bốn điểm dưới đây nguồn **không nhắc tới** — đã dịch đúng nguồn, **không tự thêm dữ kiện**, nêu ra để CEO quyết
có bổ sung vào bản tiếng Việt và bản tiếng Anh hay không:

1. **Ngôn ngữ:** gnb.ca đo bằng **CLB 4** cả bốn kỹ năng; nguồn IMM viết "IELTS General 4.0". Đã dịch sát nguồn
   thành "English at a level equivalent to IELTS General Training 4.0" (tên đúng của bài thi là IELTS
   **General Training**, không phải "IELTS General").
2. **Khảo sát địa phương:** gnb.ca không bắt buộc, **nhưng** hồ sơ đã ở New Brunswick ≥5 ngày làm việc trong
   12 tháng gần nhất được **cộng điểm ưu tiên**. Nguồn Việt chỉ nói "không bắt buộc".
3. **Kinh nghiệm quản lý:** gnb.ca còn đòi sở hữu **≥51%** doanh nghiệp tư nhân và **giám sát ít nhất 2 nhân viên**.
   Nguồn Việt chỉ nói "chủ doanh nghiệp hoặc quản lý cấp cao tối thiểu 2 năm trong 5 năm gần nhất".
4. **Bước phỏng vấn tỉnh bang (s054–s055):** trang quy trình hiện hành của gnb.ca liệt kê EOI → ITA → nộp hồ sơ
   đầy đủ → phí 2.000 CAD → quyết định, **không nêu phỏng vấn thành một bước riêng**. Nguồn IMM có bước này.
   Cần CEO hoặc đối tác Canada xác nhận bước phỏng vấn còn áp dụng hay đã bỏ.

Ngoài ra: đề cử sau 6 tháng trên gnb.ca gắn với **Business Performance Agreement** (thoả thuận kết quả kinh doanh);
nguồn Việt không nhắc nên bản dịch cũng không nhắc.

## Slug cũ cần chuyển hướng 301

Chưa xác định được. Trang này chưa có bản tiếng Anh nào trong bảng `lien-ket/lien-ket-vi-en.tsv`, và nguồn là
tệp JSON nên không đọc được thẻ hreflang. `slug_cu_can_301` để **rỗng**. Nếu team biết có URL tiếng Anh cũ cho
trang New Brunswick, báo lại để bổ sung.

## Liên kết nội bộ

**14 liên kết** trong tệp JSON vẫn trỏ **trang tiếng Việt trên staging** (`staging-41de-immgroupcom.wpcomstaging.com`):
1 CTA đăng ký tư vấn · 7 liên kết "Có thể bạn quan tâm" (trang trục Canada, PEI, Ontario, British Columbia,
Saskatchewan, Manitoba, Nova Scotia) · 9 liên kết neo trong trang "Hiểu về Canada" (`#n0`–`#n8`).
Chưa trang nào trong số này có bản `/en/` nên **giữ nguyên link, chỉ dịch nhãn**. Team quyết khi nhập:
đổi sang bản tiếng Anh nếu đã có, hoặc tạm để trỏ trang Việt.
Video `product_hero_video` (VideoPress `R0zJugWE`) và ảnh hero (ID 99338) giữ nguyên, không có trường alt để dịch.

## Kết quả cửa 0

**XANH · 0 lỗi chặn · 12 cảnh báo · 110/110 đoạn đã dịch.**

12 cảnh báo, đã đọc từng dòng, không sửa, lý do:

- **10 cảnh báo THUẬT NGỮ** (s001, s002, s011, s018, s039, s040, s048, s051, s068, s089, s107): máy gợi ý một biến
  thể khác trong `thuat-ngu.csv` nhưng cách dịch hiện tại đúng ngữ cảnh hơn. Đáng chú ý: **s039** máy còn gợi ý
  cũ "points grid" — đã tra gnb.ca và xác nhận tên chính thức là **"selection factor grid"**
  ("have 65 out of 100 points on the selection factor grid"), nên đã **cập nhật dòng thuật ngữ sang `chot`**;
  cảnh báo này sẽ hết ở việc sau. **s048** máy gợi ý "due diligence" nhưng đây là thẩm định **đương đơn**, không
  phải thẩm định dự án, nên dùng "Assessment".
- **2 cảnh báo CẤU TRÚC** ("heading nhảy từ H1 xuống H3", "từ H2 xuống H4"): do **mẫu template ACF
  `content-product-2026`** quy định, không phải lỗi bản dịch — mọi trang product cùng mẫu đều như vậy.
  Muốn sửa phải sửa template, là việc của team web.

## Nhãn

**CHƯA QUA SOI ĐỘC LẬP.** Bản dịch đã qua hai vòng soát nội bộ (B5 song ngữ bằng Sonnet, B6 bản xứ + chuyên môn
bằng Opus) và cửa kiểm máy, nhưng **chưa có luật sư di trú Canada hoặc biên tập viên bản xứ bên ngoài đọc lại**.
