# Brief — Trang trục: Đầu tư định cư Úc (overview_2026, post_id 100910)

- **Mục đích:** trang TRỤC so sánh các diện visa đầu tư/doanh nhân Úc (188A/188B/188C/188E, 132, 858, 491/494…),
  gồm cả diện đã tạm dừng.
- **Người đọc:** doanh nhân/nhà đầu tư đang chọn nước; quan tâm mức vốn AUD, đề cử tiểu bang, số ngày lưu trú, lộ trình PR.
- **Thị trường hợp:** Mỹ, Anh, Singapore, UAE, Ấn Độ, Trung Quốc, Đông Nam Á.
- **Giọng:** cố vấn điềm tĩnh; câu ngắn, ô bảng gọn.

## Từ khoá (độ phủ gợi ý Google 6 thị trường, CHƯA có số lượt tìm)
- **Chính:** `australia investment visa` — phủ 6/6 thị trường; "what is investment visa for australia" là gợi ý mạnh nhất (48 lượt).
- **Phụ:** `australia investor visa requirements` · `australia investment visa cost` · `australia investment visa amount` ·
  `how to get investor visa in australia` · `australia investment visa for pr` · `australia investor visa processing time`.
- H1 = "Australia{br}Investment Visa"; cụm từ khoá chính cũng nằm ở đoạn `p` đầu khối hero (s006) và s017.

## Phân đoạn
- **Dịch sát:** toàn bộ mã visa, mức vốn, số ngày lưu trú, thời gian xét, trạng thái chương trình, bảng so sánh.
- **Viết chung:** s098 "kinh doanh thành công tại Việt Nam" → "in your home country"; bỏ hết quy đổi VND.
- **Bỏ:** không đoạn nào.

## Ràng buộc kỹ thuật (template HTML trong ACF)
- Cả trang nằm trong MỘT trường HTML của `acf`; dịch qua `rut-layout.py` giữ nguyên **vị trí byte**.
- `.stat-row-label` ≈ 12 ký tự; `.stat-row-value` ngắn. Tiền viết nhất quán kiểu `A$300,000` / `A$2.5 million`,
  **không quy đổi USD** (style guide 5.2). Giữ đủ `{1}…{/1}`, `{2/}`, `{br}`.

## Điều phải ghi báo cáo cho CEO
- **s230** "thẻ thường trú gia hạn mỗi 5 năm" — thường trú Úc là vĩnh viễn; chỉ **travel facility** có hạn 5 năm.
- **s245–s246** subclass 858 "Distinguished Talent" — từ 12/2024 đã đổi thành **National Innovation visa**;
  chính trang này (s334) đã có link "National Innovation Visa (NIV)".
- **s176–s177** "lãi suất 8–10%/năm" của 188C là lời hứa lợi nhuận — rủi ro tuân thủ.
- **s243** visa 489 đã bị thay bằng 491/494 từ 11/2019; nguồn chỉ ghi "ngừng nhận từ cuối 2019".
- **Mâu thuẫn trong trang:** s010/s011 nói cả nhóm 188 tạm dừng từ 7/2024 nhưng s052–s054, s088, s133, s179 vẫn
  nêu thời gian xét duyệt như đang chạy; s137 "sớm nhất sau 3 năm" vs s072 "≥1 năm / 3 năm"; hai tỷ giá VND khác
  nhau trong cùng trang (s024 vs s103) — thêm lý do bỏ hết quy đổi VND.
