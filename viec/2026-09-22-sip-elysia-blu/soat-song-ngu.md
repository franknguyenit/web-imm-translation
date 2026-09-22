# Soát song ngữ — sip-elysia-blu

## Lỗi

**[s001] — NẶNG (thuật ngữ lệch + thêm ý không có ở nguồn)**
VI: "Bất động sản Cộng Hòa Síp | Dự án căn hộ" — không hề nhắc "Golden Visa".
EN: "Cyprus Golden Visa property | Apartment project" — tự thêm "Golden Visa".
Ghi chú riêng của trang này nói rõ: "Síp cấp thường trú THẬT (khác Hy Lạp): dịch 'thường trú nhân' là
permanent residence/resident là ĐÚNG" — nghĩa là trang Síp KHÔNG dùng nhãn "Golden Visa". Toàn bộ 10+ chỗ khác
trong bảng (s015, s016, s034, s102, s107, s109-s111, s114, s127-s132, s138…) đều nhất quán dùng "permanent
residence/resident", chỉ riêng s001 lạc sang "Golden Visa" — vừa sai thuật ngữ vừa tự mâu thuẫn nội bộ trang.
Đề xuất sửa: "Cyprus permanent residence property | Apartment project".

**[s137] — NHẸ (thêm ý không có ở nguồn, cần cân nhắc)**
VI: "Sở hữu Hộ chiếu Síp – Tự do di chuyển hơn 170 quốc gia." (chỉ nói "tự do di chuyển")
EN: "A Cypriot passport gives visa-free travel to more than 170 countries." — tự thêm chữ "visa-free" cụ thể,
nguồn không nói rõ là miễn thị thực hay chỉ đi lại thuận tiện. Số 170 khớp đúng. Cân nhắc đổi thành "gives
access to more than 170 countries" nếu muốn sát nguồn hơn, hoặc giữ nếu CEO xác nhận đây đúng là diện miễn
thị thực.

**[s136] — NHẸ (lệch nhẹ so với nguồn)**
VI: "Công dân EU" (= công dân, danh từ chỉ người)
EN: "EU citizenship" (= quốc tịch, khái niệm trừu tượng)
Tiêu đề mục nhỏ (h4), lệch từ loại nhưng không đổi nghĩa tổng thể (bước 3 lộ trình là trở thành công dân EU
sau khi có quốc tịch). Có thể giữ nguyên vì đọc tự nhiên hơn trong tiếng Anh, chỉ nêu để CEO/B6 biết.

## Đã kiểm, không có lỗi
- Toàn bộ tên icon Material Symbols (architecture, hotel_class, location_on, key, construction, verified_user,
  euro_symbol, landscape, holiday_village, balance, apartment, và các tên trong {1}…{/1}/{2}…{/2}: pool,
  attractions, spa, shopping_cart, fitness_center, weekend, room_service, park, diamond, event_available,
  health_and_safety, school, business_center, license) — giữ nguyên xi, không bị dịch.
- Số liệu đối chiếu đúng nguồn: 511.000 EUR (s003/s005/s034/s044-045), 300.000 EUR (s104), 200 căn (s043), 70%
  (s035), Quý 4/2028 → Q4 2028 (s006/s035/s049), 48 năm (s033/s082), 250 dự án (s085), 3 tỷ EUR (s088), 60%
  (s091), 10 năm cam kết cho thuê (s007/s064), 15% thuế (s123), 5 năm gia hạn thẻ (s133), 8 năm/11 năm (s135),
  B1 (s135), 170 quốc gia (s137), 1 lần/2 năm (s108, có #bo-qua-so — không báo lại).
- Tên riêng giữ đúng: Paphos, Universal Area, Pafilia, ONE, GeSY, Elysia Blu.
- Thẻ {1}…{/1}, {2}…{/2}, {3}…{/3}, {br} đủ số lượng, không lệch, kể cả các dòng "gắn lại thẻ" (s098) và các
  gợi ý TM cũ còn sót trong cột `tm` từ trang Hy Lạp khác (s015, s016, s045, s082, s101, s110, s131, s144) —
  đã kiểm bản `en` thực tế dùng, không dính nội dung TM lạc trang.
- Các dòng `trung:sXXX` (s008, s060, s061, s066, s067, s139) khớp đúng bản gốc được trỏ tới.
- Không thấy cụm cấm theo `thuat-ngu.csv` loại `cam` (guarantee, 100% success, risk-free, Vietnamese
  clients, completely safe).
- Thuật ngữ "thường trú nhân" → permanent resident/residence dùng nhất quán theo CSV, đúng với ghi chú riêng
  của trang Síp (khác Hy Lạp) — trừ lỗi s001 nêu trên.
