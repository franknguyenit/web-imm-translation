# Brief — InterContinental Grenada Resort — template HTML thuần của theme

- **Mục đích:** trang **dự án resort** bán **cổ phần bất động sản trong dự án được Chính phủ Grenada phê duyệt**,
  kèm lộ trình **quốc tịch Grenada (CBI)**. Trang CBI, **KHÔNG phải trang thường trú**.
- **Điểm bán riêng của Grenada:** hộ chiếu Grenada mở đường **visa E-2 của Mỹ** (Grenada là nước hiệp ước).
- **Người đọc:** nhà đầu tư quốc tế muốn quốc tịch thứ hai + cửa vào Mỹ diện E-2; và nhà đầu tư khách sạn.
- **Giọng:** cố vấn điềm tĩnh. Trang có **cả một khối "Lợi nhuận dự kiến"** ⇒ rào kỹ, không hứa.

## Từ khoá (B3 — độ phủ gợi ý Google 6 thị trường, CHƯA có số lượt tìm)
- **Chính: `grenada citizenship by investment real estate`** (6/6; biến thể dài
  `…real estate for sale` phủ 12 lần nhưng quá dài cho meta title 60 ký tự).
- Phụ: `grenada citizenship by investment real estate for sale` · `grenada citizenship by investment cost` ·
  `how to become a citizen of grenada` · `grenada approved cbi projects` · `grenada e-2 visa treaty`.
- Trang nước `2026-09-21-quoc-tich-grenada` đã lấy `grenada citizenship by investment` trần và nhánh **cost & E-2**
  ⇒ trang dự án lấy nhánh **real estate**; trang La Sagesse cùng mẻ lấy nhánh **câu hỏi mua nhà**.
- ⚠ **Bẫy Grenada, Mississippi:** gợi ý Google trộn `grenada ms real estate for sale` — loại hết.

## Phân đoạn dịch sát / viết lại / bỏ
| Khối | Cách làm |
|---|---|
| s005–s007, s039–s051 (bảng thông số), s095–s105 (lộ trình CBI), s111–s131 | **dịch sát** |
| s003 (hero), H2 (s019, s032, s052, s071, s091, s095, s106, s132), CTA (s004, s038, s133) | **viết lại** |
| s053, s056, s059, s074, s077, s080, s083, s108, s115, s121, s127, s136 | **GIỮ NGUYÊN XI** — tên icon |
| s109, s116, s122, s128 (`01`–`04`) | giữ nguyên |
| s114 "Toàn bộ quy trình có thể thực hiện **tại Việt Nam**" | **viết chung**: `from your country of residence` (style guide mục 4) |

## Luật thuật ngữ mảng Grenada / CBI
- "quốc tịch" → `citizenship`; "quốc tịch vĩnh viễn" → `citizenship for life`.
- **E-2:** điều kiện của người nhập tịch qua đầu tư là **domicile 3 năm**, KHÔNG phải "residence" (bài học trang
  Quốc tịch Grenada 21/09). Trang này chỉ nhắc E-2 một lần ở s036 — giữ dạng có điều kiện ("if the conditions are met").
- "tích sản bằng ngoại tệ" → `a store of value held in US dollars` (bỏ "an toàn", không viết "foreign currency").
- **"lợi nhuận dự kiến" → `projected return`, KHÔNG bao giờ `guaranteed`.**

## Bẫy riêng của template BĐS
- **Tên icon Material Symbols** (kể cả trong `{1}…{/1}`) — dịch là **vỡ icon**.
- **Chữ ngoài tầm bộ rút**: 17 chuỗi alt "Mô phỏng InterContinental Grenada Resort 1…17" + chuỗi JavaScript →
  `cong-cu/vet-chu-ngoai.py` với `chu-ngoai-bo-rut.tsv`, **sắp chuỗi dài trước**.
- **Cửa kiểm 1 đã chạy:** nhét lại bản tiếng Việt → tệp ra **giống tệp gốc từng byte ✓**

## Điều phải ghi báo cáo cho CEO
- **s104 "công ty Việt Nam đầu tiên và duy nhất được Chính phủ Grenada cấp phép"** — giữ nguyên + gắn "in Vietnam";
  CEO cần giấy phép để chứng minh nếu bị hỏi (đã nêu từ 21/09).
- **s092 "Dự kiến hoàn thiện cuối năm 2026"** — hôm nay đã 22/09/2026, mốc sắp tới nơi mà khối tiến độ không có
  cập nhật nào khác.
- **s112 "hơn 140 quốc gia"** không ghi ngày đối chiếu; trang Quốc tịch Grenada ghi "147" ⇒ hai trang vênh nhau.
- **s124 "khoảng 4%/năm trong 5 năm, tương đương khoảng 54.000 USD"** — 4% × 5 năm × 270.000 USD = 54.000 USD,
  tức đây là **tổng 5 năm**, không phải mỗi năm. Bản Anh viết rõ "over 5 years".
