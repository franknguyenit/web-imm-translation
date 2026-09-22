# Brief — Trang trục: Quốc tịch các nước vùng Caribbean (overview_2026, post_id 100916)

- **Mục đích:** trang TRỤC so sánh 4 chương trình Caribbean (Dominica, St. Kitts & Nevis, Grenada + Curacao diện cư trú).
- **Người đọc:** nhà đầu tư đang chọn giữa các chương trình CBI, quan tâm giá, tốc độ, sức mạnh hộ chiếu, đường vào E-2.
- **Thị trường hợp:** Trung Đông, Nam Á, Đông Nam Á, Trung Quốc, châu Phi.
- **Giọng:** cố vấn điềm tĩnh; đây là trang so sánh nên câu ngắn, bảng biểu rõ.

## Từ khoá (độ phủ gợi ý Google 6 thị trường, CHƯA có số lượt tìm)
- **Chính:** `caribbean citizenship by investment`. **Phụ:** `best caribbean passport by investment` ·
  `cheapest caribbean passport` · `caribbean passport ranking` · `citizenship by investment cost` ·
  `caribbean citizenship benefits` · `caribbean citizenship by investment reform eccira`.
- Người tìm so sánh trực tiếp ("best", "cheapest", "ranking") → bảng so sánh là phần quan trọng nhất của trang.

## Ràng buộc kỹ thuật (template HTML)
- Nguồn là **một trường HTML trong ACF** (`html_template`), dịch qua `rut-layout.py` giữ nguyên vị trí byte.
- **Ngân sách ký tự cho ô CSS:** `.stat-row-label` ≈ 12 ký tự ("Investment", "Purpose", "Processing"),
  `.stat-row-value` ngắn gọn ("From US$200,000"), `.eyebrow`/`.label-sm` viết hoa bằng CSS nên viết thường trong HTML.
- Giữ đủ thẻ giữ chỗ `{1}…{/1}`, `{br}`; các ô số ("01", "A", "3") giữ nguyên.

## Đoạn viết chung vì ngữ cảnh khách Việt
- s156 "Di chuyển từ Việt Nam còn bất tiện" → "from Asia"; s193 "cho nhà đầu tư Việt Nam" → viết chung.
- s201 giữ dữ kiện "công ty Việt Nam đầu tiên và duy nhất được cấp phép" (`#viet-nam-hop-le`).
- Bỏ mọi "(~X tỷ)" (`#bo-qua-so`).

## Điều phải ghi báo cáo cho CEO
- **Số nước miễn visa không nhất quán ngay trong trang:** hero nói **157**, Dominica nói **144** rồi **143**,
  bảng so sánh nói **143-144**.
- **Hộ chiếu St. Kitts: "top 19 thế giới (2026)" ở phần chương trình vs "top 25 thế giới" ở bảng so sánh.**
- s046 quy kết xếp hạng cho **Financial Times** — thực ra là CBI Index của tạp chí PWM thuộc FT (giống trang Dominica).
- s078 "Dễ dàng xin visa Mỹ" → làm mềm; s156 "thẻ cư trú vĩnh viễn rất cao - 838.000 USD" cần CEO xác nhận.
