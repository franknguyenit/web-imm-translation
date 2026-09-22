# Soát song ngữ — Kastella Bay (2026-09-22)

Đối chiếu `song-ngu.tsv` cột `vi`/`en` từng dòng (138 đoạn). Icon Material Symbols (apartment,
directions_car, train, paid, check_circle, workspace_premium, verified, public, domain, passport,
travel_explore, location_off, badge, balance, hotel, bed, architecture, water, restaurant,
directions_boat, shopping_bag, subway, home, school, business_center) đều **giữ nguyên xi** ở cả
hai cột — không có đoạn nào bị dịch/vỡ icon. Số liệu (250.000 EUR/€250,000 · 12–15 phút · 1 km ·
65 năm · 2 năm bảo hành · 100% sở hữu · 5 năm thẻ cư trú · 90/180 ngày) khớp giữa hai cột ở mọi chỗ
xuất hiện. Thẻ giữ chỗ `{1}…{/1}`, `{2}…{/2}`, `{br}` đủ số lượng, nội dung bên trong đúng.

## Lỗi / điểm cần xem lại

1. **[s098] TRUNG BÌNH — sót ý, có thể là làm mềm tuân thủ nhưng chưa ghi lý do.**
   VI: "...không chỉ là một tài sản sinh lời và **tích sản an toàn** bằng ngoại tệ..."
   EN hiện tại: "...is more than an income-producing asset held in a foreign currency..." —
   **"tích sản an toàn" (an toàn = safe) bị bỏ hẳn, không dịch**, cột `ghi_chu` để trống (không có
   `#bo:` hay `#bo-qua-so`). Style guide mục 3 nói rõ gặp "an toàn" thì **viết lại** thành kiểu
   "structured to manage risk" / "with capital protection features", không phải bỏ hẳn. Đề xuất
   bản sửa ở `sua-song-ngu.txt`. Nếu luồng chính thấy đây là làm mềm có chủ đích thì giữ bản hiện
   tại nhưng nên thêm `#bo:` vào `ghi_chu` để có dấu vết.

2. **[s001] NHẸ — thêm chữ không có ở nguồn.**
   VI: "Thường trú nhân Hy Lạp | Dự án căn hộ cao cấp"
   EN: "Greece Golden Visa property | Premium apartment project" — vế đầu đổi "Thường trú nhân Hy
   Lạp" thành "Greece Golden Visa" (đúng quy ước, khớp cách xử lý ở s099/s107) nhưng **thêm chữ
   "property"** không có trong đoạn vi tương ứng, và **không có `#bo-qua-tn`** trong `ghi_chu` như
   hai dòng kia. Không sai nghĩa nặng (đây là dòng meta/tiêu đề trang) nhưng nên gắn cờ cho nhất
   quán với quy ước đã lập.

3. **[s132] NHẸ — thiếu cờ `#bo-qua-tn` (không phải lỗi dịch).**
   VI: "...{1}lộ trình thường trú nhân Hy Lạp{/1}" → EN: "...{1}the Greece Golden Visa route{/1}"
   — cùng phép chuyển "thường trú nhân Hy Lạp" → "Greece Golden Visa" như s099/s107, dịch đúng,
   nhưng cột `ghi_chu` của dòng này **để trống**, không có `#bo-qua-tn` như hai dòng còn lại. Nên
   thêm cờ để nhất quán và để `kiemtn` không báo lệch thuật ngữ.

## Điểm đã kiểm, không có lỗi (ghi lại để khỏi soát trùng)

- Thuật ngữ "thẻ cư trú" → "residence permit" nhất quán toàn bài (s033, s104–108, s116–129), khớp
  `thuat-ngu.csv` (chot).
- "Hy Lạp" → "Greece" nhất quán; "bất động sản" dùng "real estate" ở ngữ cảnh đầu tư (s080, s098)
  và "property" ở ngữ cảnh căn cụ thể (s039), đúng ghi chú CSV.
- Tên riêng Kastella Bay, Mikrolimano, Piraeus, Neo Faliro, Arish Capital Partners, 4 dự án tiêu
  biểu (Sun House Comporta Country, South Beach Sagres, CDO'Q Lisbon) đánh vần nhất quán hai cột.
- s138: gợi ý TM 93% mang tên dự án khác ("Horseshoe Bay EB-5") nhưng bản dịch cuối đã sửa đúng
  thành "Kastella Bay project" — không bị dính TM nhầm dự án.
- Không thấy lời hứa vượt nguồn kiểu "guaranteed/100% success/risk-free"; các đoạn có "100%" (s042,
  s058, s059, s073) đều là số liệu/điều khoản sở hữu có ở nguồn, không phải lời hứa lợi nhuận.
