# Soát song ngữ — 2026-09-22-dinh-cu-canada-dien-doanh-nhan-new-brunswick (B5, Sonnet)

Đối chiếu 110 dòng `song-ngu.tsv` (cột `vi` vs `en`). Số liệu (tuổi 19–59, tài sản 500.000/300.000 CAD, đầu tư
150.000 CAD, 65 điểm, 6 tháng, 1 việc làm) đều khớp nguồn và khớp brief.md. Quy đổi CAD→USD (s007, s038) đúng
theo tỷ giá `ty-gia.json` (usd_moi_cad = 0.7131), làm tròn đúng quy tắc style guide mục 5 (106,965→107,000;
356,550→357,000; 213,930→214,000).

- s040 · Thuật ngữ lệch bảng: "background security and medical requirements" không khớp cụm đã chốt trong
  `thuat-ngu.csv` cho "lý lịch an ninh và sức khỏe" ("background and medical requirements"); cách viết hiện tại
  dễ đọc nhầm thành "background-security" (an ninh của hồ sơ lý lịch) thay vì hai điều kiện tách biệt (lý lịch
  + sức khỏe) · nên sửa
- s081 · Thuật ngữ lệch bảng: dùng "social security" — `thuat-ngu.csv` ghi rõ đây là "chữ Mỹ" (đặc thù chương
  trình Mỹ), trong khi đây là trang Canada (hệ thống Canada gọi Social Insurance Number); nên đổi sang
  "social insurance" cho đúng ngữ cảnh Canada · nên sửa
- s079 · Nhất quán liệt kê: các mục cùng khối (s077, s078, s080–s084) đều theo mẫu "X in Canada", riêng s079
  dịch "Canadian culture" phá mẫu (không sai nghĩa, chỉ lệch định dạng danh sách) · nhỏ
- s110 · Ghi chú `#bo-qua-so: thêm số USD quy đổi từ C$150.000...` trong cột `ghi_chu` không khớp nội dung thực
  tế — bản tiếng Anh KHÔNG có số USD thêm ở dòng này (đúng theo brief, vì US$107.000 đã nêu một lần ở s007);
  có vẻ là ghi chú copy nhầm từ s007, nên xoá hoặc sửa ghi chú để khỏi gây nhầm khi tra cứu sau này · nhỏ

Không phát hiện: sai nghĩa, sót ý so với nguồn, thêm ý nguồn không có, sai số liệu/ngày/tên mẫu đơn/tên cơ
quan, hay lời hứa vượt quá điều nguồn nói. Các đoạn FAQ h4/p lặp câu hỏi (s088/091/094/097/100/103/106/109)
đúng cấu trúc template, không phải trùng lặp thừa — đã bỏ qua theo hướng dẫn.
