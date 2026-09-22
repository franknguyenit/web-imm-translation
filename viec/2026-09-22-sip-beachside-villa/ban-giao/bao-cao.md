# Báo cáo — Dự án Beachside Villa (Cộng Hòa Síp)

- **Nguồn:** HTML thuần của theme — `template-bds-imm/du-an/sip__beachside-villa/dist/sip__beachside-villa.html` (**không phải ACF**).
  Trang web: `/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-cong-hoa-sip-cyprus/dinh-cu-cong-hoa-sip-du-an-biet-thu-ven-bien-beachside-villa/`
- **Dự án:** 28 biệt thự ven biển, bán đảo Akamas · giá từ 633.000 EUR.
- **Cửa 0:** XANH · 0 lỗi chặn. **Nhãn: chưa qua soi độc lập.**

## Ba cửa kiểm ráp lại — đều đạt
1. Nhét lại **chính bản tiếng Việt** → tệp ra **giống tệp gốc TỪNG BYTE** ✓
2. **Số thẻ HTML bản Anh = bản gốc**, không lệch thẻ nào ✓
3. **Không còn ký tự tiếng Việt sống** (bỏ qua phần đã chú thích `<!-- -->` và `/* */`) ✓
4. Chưa đo trình duyệt ở 375 · 577 · 700 · 768 · 1440px — **team nên đo trước khi đăng**.

## Tệp bàn giao
| Tệp | Dùng để |
|---|---|
| **`tmp-info.en.php`** | **bản HTML tiếng Anh để dán lên trang** — tệp chính |
| `ban-dich-de-duyet.docx` | bản duyệt nội dung |
| `bang-song-ngu.md` | bảng đối chiếu từng đoạn Việt–Anh |
| `bai-dich.en.md` / `.en.html` / `.vi.md` | bản chữ trần để đọc và so |
| `seo.json` · `sip-beachside-villa.en.json` | SEO · bản ACF-giả nội bộ (**không import**) |

## Từ khoá
- **Chính:** `cyprus permanent residency by investment`. Chi tiết phụ xem `ban-giao/seo.json`.
- **Ba trang dự án Síp dùng ba từ khoá chính khác nhau** (property · permanent residency by investment ·
  real estate investment) để không giành nhau cùng truy vấn; cả ba cụm đều phủ 6/6 thị trường.
- **H1 là tên dự án** — cửa 0 cảnh báo "H1 không chứa từ khoá" là **cố ý**.
- ⚠ Xếp hạng theo độ phủ gợi ý Google, **chưa có số lượt tìm**.

## Luật thuật ngữ áp cho mảng Síp (khác Hy Lạp)
- **Síp cấp thường trú THẬT** ⇒ thân bài dùng **permanent residence / permanent resident**, KHÔNG dùng
  "Golden Visa". Cụm "Cyprus Golden Visa" chỉ nằm ở **meta title/description** của Elysia Blu cho SEO —
  đúng ghi chú đã chốt trong `thuat-ngu.csv`.
- "Công dân EU" → **Cypriot (EU) citizenship** (để trần "EU citizenship" dễ bị hiểu là PR Síp dẫn thẳng tới
  quốc tịch EU nói chung).
- "Tự do di chuyển hơn 170 quốc gia" → **visa-free travel to more than 170 destinations**
  ("freedom of movement" là thuật ngữ luật EU chỉ quyền sống và làm việc — dùng ở đây là nói quá quyền lợi).

## Chỗ đã làm mềm vì tuân thủ
- "Nhà phát triển **hàng đầu**" → "an established developer" (style guide mục 1 cấm so sánh tuyệt đối không dẫn nguồn).
- "tài sản sinh lời và tích sản **an toàn** bằng ngoại tệ" → giữ ý nguồn, **bỏ chữ "an toàn"**, và đổi
  "ngoại tệ" (góc nhìn khách Việt) thành **"held in euros"**.
- Riêng Elysia Blu: "**Cam kết cho thuê** trong 10 năm" → "**Rental commitment** / 10-year commitment", KHÔNG dùng
  "rental guarantee" (thành hứa dòng tiền). "Chuẩn khu nghỉ dưỡng 5 sao" → "5-star resort **style**".
- Riêng Coral Vista: câu mở phần PR đọc như cam kết "mua villa là có PR" → "**can open the way to** permanent
  residence … **once you meet the program conditions**".

## Góp ý của B5/B6 đã BÁC và lý do
- **Dòng kicker đầu trang:** B5 đúng — nguồn viết "Bất động sản Cộng Hòa Síp", không phải tên chương trình.
  Đã trả về đúng nguồn ở cả ba trang. Hệ quả: **cửa 0 cảnh báo "từ khoá chính không có trong 150 chữ đầu"** ở
  Elysia Blu và Beachside Villa — **cố ý**: cụm từ khoá nằm ở meta title/description, thân bài giữ đúng nguồn và
  đúng bảng thuật ngữ. Riêng Coral Vista cụm từ khoá vào được câu mức đầu tư một cách tự nhiên.
- **"Tự do di chuyển" (B5 muốn giữ "freedom to travel"):** bác, theo B6 — xem mục trên.
- **"Ba phong cách kiến trúc" (B5 muốn viết "3"):** bác — nguồn viết bằng chữ, style guide mục 5 cũng viết bằng chữ.
- **"Nhà phát triển Pafilia" (B6 Coral muốn "About Pafilia"):** bác, giữ "Developer Pafilia" cho sát nguồn và
  đồng bộ với trang Beachside Villa.

## Nguồn có vẻ SAI hoặc MÂU THUẪN — đã dịch đúng nguồn, CEO xác nhận
1. **Thuế doanh nghiệp Síp nói hai kiểu giữa ba trang cùng bộ:** Elysia Blu ghi **15% từ năm 2026**;
   Beachside Villa và Coral Vista ghi **12,5% (đối chiếu 18/08/2026)**. Phải chốt một con số.
2. **Số năm kinh nghiệm của Pafilia:** phần mô tả Coral Vista ghi **45 năm**, khối chủ đầu tư của cả ba trang ghi
   **48 năm**.
3. **Điều kiện nhập tịch ghi 8 năm trong 11 năm** — cần đối chiếu quy định hiện hành.
4. **"ONE — toà nhà ven biển cao nhất châu Âu"** thiếu chữ **residential** nên rộng hơn thực tế; **"60% đất ven
   biển"** không dẫn nguồn.
5. **Diện PR Síp có hạn chế về quyền làm công ăn lương** — trang nói "kinh doanh" (do business) là đúng hướng,
   nhưng nên nói rõ giới hạn.
6. Riêng **Elysia Blu**: "Giai đoạn 1 đã bán khoảng **70%**" thiếu mốc ngày; "UNESCO công nhận Di sản Thế giới"
   thực ra là **quần thể khảo cổ Paphos**, không phải cả thành phố; bản chất pháp lý của **cam kết cho thuê 10 năm**.
7. Riêng **Coral Vista**: hero ghi "**Mức đầu tư tối thiểu 480.000 EUR**" — dễ bị nhầm với ngưỡng PR 300.000 EUR;
   "bãi biển đạt chuẩn **Blue Flag**" là chứng nhận theo mùa.
8. Riêng **Beachside Villa**: nguồn vừa nói "**ven biển**" vừa nói "cách bãi biển khoảng **1 phút đi bộ**".

## Slug cũ cần 301
- Không có (trang chưa từng có bản `/en/`).
