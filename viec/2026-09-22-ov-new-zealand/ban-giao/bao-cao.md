# Báo cáo — Trang trục "Đầu tư định cư New Zealand"

- **Nguồn:** JSON xuất từ trang tiếng Anh, `post_id 100914`, slug `/dau-tu-dinh-cu-new-zealand/`,
  template `content-overview_2026.php` (cả trang nằm trong MỘT trường HTML của ACF).
- **Số đoạn:** 204 đoạn chữ (1 đoạn bỏ) / ~1.900 chữ tiếng Anh. Máy rút chữ theo **vị trí byte** nên class,
  style, svg, PHP, thụt lề giữ nguyên từng byte.
- **Cửa 0:** XANH · 0 lỗi chặn · 24 cảnh báo.
- **Nhãn: chưa qua soi độc lập.**

## Từ khoá
- **Chính:** `new zealand investor visa` — phủ 6/6 thị trường và gộp được **cả hai** chương trình đang mở
  (Active Investor Plus và Business Investor), không bó vào một tên sản phẩm.
- **Phụ:** `new zealand investor visa requirements` · `active investor plus visa` · `new zealand business investor visa` ·
  `new zealand residency by investment` · `new zealand investor visa cost` · `how to get pr in new zealand by investment`.
- H1 đổi từ "New Zealand investment immigration" sang **"New Zealand Investor Visa"** để chứa nguyên cụm từ khoá chính;
  slug đề xuất `new-zealand-investor-visa`.
- ⚠ Xếp hạng theo độ phủ gợi ý Google, **chưa có số lượt tìm** (cần công cụ trả phí).

## Đoạn đã BỎ
- **s006** — không phải chữ: là thẻ `<img>` mang thuộc tính PHP (`alt`, `onerror`) lọt vào bộ rút chữ.
  Máy đã ghi lại **nguyên văn byte cũ** vào tệp import nên trang không đổi gì.

## Chữ Việt nằm NGOÀI tầm bộ rút — đã thay tay trong tệp import
- Biến PHP `$ov_nz_hero_video_title` → `'New Zealand investor visa video — IMM Group'` (dùng làm `alt` của ảnh video).
- `aria-label` của nút play → `"Play the New Zealand investor visa video"`.
- Còn lại chữ Việt trong **chú thích CSS `/* … */`** — không hiển thị, giữ nguyên để không đụng layout.

## Quy đổi tiền
- Mức vốn luật định bằng **NZD giữ nguyên** (`NZ$5 million`, `NZ$1 million`, `NZ$100,000`) — style guide mục 5.2,
  không quy đổi USD.
- s124 bỏ quy đổi VND "(~1,5 tỷ)" (`#bo-qua-so`).

## Chỗ đã làm mềm vì tuân thủ (theo B6)
- s153: "đảm bảo hồ sơ tuân thủ quy định INZ" → "so your application **is prepared to meet** INZ requirements"
  (bản đầu đọc như cam kết thay cho INZ).
- s166: "khiếu kiện" → "**appeals**", không dùng "litigation" (tránh hàm ý IMM hành nghề luật).
- s005: bỏ lối "hộ chiếu quyền lực", thay bằng dữ kiện "visa-free or eVisa access to 187 countries".

## Sửa thuật ngữ ngành đã áp
- s102 "yêu cầu cư trú thực tế" → **physical presence requirement** (cách gọi đúng của ngành).
- s146 "Thổ Nhĩ Kỳ" → **Türkiye** theo `thuat-ngu.csv`.
- s055 "Cấp thị thực NGAY sau khoản đầu tư đầu tiên" → "Your **resident visa** is issued once you have made the first investment".
- s075 nhãn ô "Lên thường trú" → **Time to PR** (10 ký tự, vừa ngân sách 12).

## Góp ý của B5/B6 đã BÁC và lý do
- **s005** (B6): "IMM Group advisory" → **bác**, giữ "advised by IMM Group" — đây là lối nói chuẩn của ngành,
  không phải calque.
- **s186** (B6 ở trang Caribbean từng đề "Government licenses"): theo **B5**, giữ "Countries licensing us directly"
  vì bỏ chữ "quốc gia" là mất ý nguồn. Đã đồng bộ nhãn này với trang Caribbean.
- **s030** (B5, NHẸ): "Entrepreneur" trùng tên với chương trình Entrepreneur Work Visa đã đóng — **không sửa**,
  vì ô này chỉ 12 ký tự và nguồn cũng dùng "DOANH NHÂN".

## Cảnh báo cửa 0 đã đọc, không sửa — lý do
- **s026 "bản Anh có số không có ở nguồn: 2"** — bộ kiểm đọc "Two" thành số 2 nhưng không nhận "Hai" ở bản Việt. Bắt oan.
- **s021 · s082 · s121 · s124 · s126** đều là cờ `#bo-qua-so` đã ghi lý do (số đầu câu viết bằng chữ; ngày
  "11/2025" · "08/2025" viết thành tên tháng; bỏ quy đổi VND).
- **~14 cảnh báo THUẬT NGỮ** ("lộ trình", "quyền cư trú", "đầu tư định cư", "vốn đầu tư", "định cư") là bảng
  gợi ý nhiều biến thể; bản dịch chọn biến thể hợp ô hẹp và hợp ngữ cảnh ("route", "Residence", "investor visa").
- **4 cảnh báo "nhắc Việt Nam"** (s139, s147, s159, s169) — đều là **dữ kiện về chính IMM Group**
  (21+ năm tại Việt Nam, công ty Việt Nam đầu tiên…), không phải ngữ cảnh khách Việt, nên giữ.

## Nguồn có vẻ SAI hoặc MÂU THUẪN — đã dịch đúng nguồn, CEO xác nhận
1. **Số nước miễn visa đá nhau:** hero (s005) và s016 nói **187**, nhưng s095 nói **180+**.
2. **Con phụ thuộc:** nguồn nói "con **dưới 24 tuổi**"; điều kiện INZ thường viết là **24 tuổi trở xuống**.
3. **"Y tế công miễn phí"** — y tế công New Zealand có đồng chi trả ở một số dịch vụ; nên xác nhận cách nói.
4. **PR sau 4 năm** với Active Investor Plus trong khi hạng Growth chỉ yêu cầu **giữ vốn 3 năm** — hai mốc này
   nằm cạnh nhau trên trang, dễ bị đọc là mâu thuẫn.
5. **Các mốc:** "INZ nhận hồ sơ Business Investor Visa từ 11/2025" · "Entrepreneur Work Visa đóng 08/2025".
6. **s159 "công ty Việt Nam đầu tiên & duy nhất"** được Grenada, St. Kitts & Nevis, Dominica cấp phép — cần bằng chứng.

## Liên kết còn trỏ bản tiếng Việt (team quyết)
- `/dau-tu-dinh-cu-new-zealand/quyen-cu-tru-new-zealand-business-investor-visa/`
- `/new-zealand/tong-quan-ve-chuong-trinh-dinh-cu-new-zealand-dien-dau-tu-active-investor-plus-visa/`
- `/hieu-ve-nuoc-new-zealand/#n0` … `#n4` (5 mục "Hiểu về New Zealand")
- Các trang này chưa có bản `/en/`, nên chưa đổi được.

## Slug cũ cần 301
- Không có (trang chưa từng có bản `/en/`).

## Kết quả kiểm
- Cửa 0: **XANH**, 0 lỗi chặn, 24 cảnh báo đã giải trình.
- **B5 bắt 1 lỗi VỪA** (s186) + 1 điểm NHẸ.
- **B6 bắt 17 điểm**, nặng nhất là 3 điểm tuân thủ/thuật ngữ ngành (s153, s166, s102).
- Ráp lại template: **số thẻ HTML bản Anh = bản gốc, không lệch thẻ nào**; tập trường ACF khớp hệt; `post_id 100914` giữ nguyên.
