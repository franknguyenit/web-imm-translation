# B6 — Soát bản xứ (US English) + chuyên môn — viec/2026-09-22-ov-chau-au

Bước 1 đọc bản tiếng Anh độc lập; bước 2 đối chiếu `song-ngu.tsv`.
Đoạn có `#bo-qua-so` / `#bo-qua-tn` / `#bo:` đã bỏ qua theo yêu cầu.

## A. Lỗi bản xứ / nhất quán (có bản sửa trong `sua-ban-xu.txt`)

| Mã đoạn | Vấn đề | Mức |
|---|---|---|
| s019 | "a residence permit, a European Golden Visa, or European citizenship" dựng thành 3 thứ khác nhau, trong khi nguồn viết "thẻ thường trú/Golden Visa" là MỘT. Người trong ngành đọc sẽ vướng. Thêm: dấu phẩy sai trước "and"; "donating through a fund" phải là "donating to a fund" | nặng vừa |
| s022, s023 | "Investing for residency" lệch với chính trang: s010/s011/s187 đã dùng "residency by investment" — thuật ngữ chuẩn ngành | vừa |
| s050 | "The card" xuất hiện lần đầu, không có tiền ngữ; câu dài lê thê. Đổi "residence card" (khớp gợi ý `kiem` cho «thẻ cư trú») | vừa |
| s071, s125, s152, s183 | Khoảng số viết `8 – 10`, `12 – 16`, `6 – 7` (có dấu cách) trong khi bảng dưới viết `3–6`, `2–3`. Style guide mục 5 quy định en dash KHÔNG dấu cách | vừa |
| s078 | "a light residence requirement" là mùi dịch (yêu cầu cư trú thấp). Bản xứ: "a minimal residence requirement of…" | vừa |
| s099, s154 | Cùng một cụm nguồn "Hình thức đầu tư" được dịch hai kiểu trên cùng trang: "How you invest" (s048/s073/s127) và "Investment routes" (s099/s154). `kiem` cũng cảnh báo | nặng vừa |
| s110 | "is not yet a Schengen visa-free option in the way … are" — câu gượng, mùi dịch nặng nhất trang | nặng vừa |
| s146 + s147 | "At least €500,000" đứng trên ô phụ "minimum" ⇒ đọc thành "At least €500,000 minimum". Ba thẻ kia đều "From €X". Đưa về "From €500,000" | vừa |
| s167 | "the real estate channel" — "channel" là dịch thẳng chữ "kênh", dân ngành nói "route" | vừa |
| s176, s181 | "**Investment level:**" lệch với nhãn "Investment" dùng khắp các thẻ chương trình (s039) | nhẹ |
| s204 | Ô tên chương trình chỉ ghi "Spain", lệch hàng với "Bulgaria Golden Visa", "Hungary Golden Visa", "Latvia Golden Visa" | vừa |
| s221 | Ô duy nhất trong cột Purpose bắt đầu bằng mạo từ ("A Latvian temporary residence permit…"); các ô khác đều là cụm danh từ trần | nhẹ |
| s245 | Ô duy nhất trong cột Investment viết hoa ("No investment required"); mọi ô khác đều thường ("from €500,000", "no set minimum") | vừa |
| s254 | "see every column" — bản xứ nói "see all columns" | nhẹ |
| s277 | "We screen files" — "files" là dịch thẳng "hồ sơ"; dân tư vấn nói "assess each case" | vừa |
| s285 | "Since 2025 … has formally become" lệch thì. Nguồn là một mốc, không phải quá trình | vừa |
| s295 | "The IMM Group promise" — "tôn chỉ" là credo/nguyên tắc, không phải lời hứa; "promise" còn thêm màu cam kết không có ở nguồn | vừa |
| s296 | Nhãn mục "More" mơ hồ; nguồn "Tham khảo" + tiêu đề dưới là "You may also be interested in" ⇒ "Related" | nhẹ |

## B. Bản sửa DÀI HƠN bản hiện tại (cân nhắc ngân sách ký tự)

| Mã đoạn | Cũ → mới | Ghi chú ô |
|---|---|---|
| s019 | 148 → ~157 ký tự | đoạn văn `p` dưới H2, không phải ô thống kê — an toàn |
| s022 | 30 → 31 ký tự | nhãn nhóm, hơn 1 ký tự |
| s078 | 66 → 75 ký tự | dòng quyền lợi `p`, không phải `.stat-row-*` |
| s204 | "Spain" (5) → "Spain Golden Visa" (17) | **ô bảng so sánh** — dài hơn đáng kể; nếu bảng vỡ thì giữ nguyên "Spain" và chấp nhận lệch hàng |
| s296 | "More" (4) → "Related" (7) | nhãn mục nhỏ |

Mọi bản sửa còn lại đều NGẮN HƠN hoặc bằng bản cũ. Đã kiểm từng dòng: s022/s023 giữ đủ `{1}…{/1}` và `{br}`; không đoạn sửa nào khác có thẻ giữ chỗ.

## C. Ô "minimum" (s041, s092, s120, s147) — giữ nguyên, nêu để luồng chính biết

Bốn ô này là khe đơn vị của `.stat-row` (song song với "months" ở s047), nguồn vốn là quy đổi VND nên đã bỏ theo style guide mục 5.
Từ thay là "minimum" ⇒ đọc thành "From €250,000 minimum", hơi thừa. KHÔNG sửa được ô giá trị vì s040/s091/s119 bị ràng `trung:` với s026/s030/s032.
Đã sửa s146 để ít nhất không còn thẻ nào đọc thành "At least … minimum". Thẻ Ireland (s066) không có khe này ⇒ layout chịu được ô trống, team có thể cân nhắc để rỗng.

## D. Mâu thuẫn / dữ kiện nghi lỗi thời của CHÍNH NGUỒN — cần CEO quyết (KHÔNG tự sửa)

1. **s229–s233 — UK "Investor visa" (£2–10 triệu) ghi trạng thái "Open".** Diện Tier 1 (Investor) của Anh đã đóng với hồ sơ mới từ 17/02/2022. Đây là rủi ro tuân thủ cao nhất của trang: quảng bá một diện không còn nhận hồ sơ.
2. **s180 — Montenegro ghi "TẠM NGƯNG / Suspended".** Theo ghi chú đã lưu của dự án, chương trình đóng hẳn cuối 2022, không phải tạm ngưng.
3. **s159 vs s167 — nguồn tự đá nhau về bất động sản Bồ Đào Nha.** s159: "đã đóng từ 07/10/2023"; s167: mới chỉ "siết". Ngoài ra s159 nằm trong danh sách "chọn 1" nhưng lại là kênh đã đóng, và mức 280.000 EUR mâu thuẫn với mức tối thiểu 500.000 EUR ghi ngay trên thẻ.
4. **s110 — "Síp chưa phải lựa chọn đi lại Schengen miễn visa".** Câu phụ thuộc thời điểm (Síp đang trong tiến trình gia nhập Schengen). Nên gắn mốc ngày hoặc rà lại trước khi đăng.
5. **s195 — Bulgaria niêm yết bằng BGN.** Bulgaria đang chuyển sang euro; con số "1.000.000 BGN (~512.000 EUR)" sẽ lỗi thời nhanh. CEO quyết có nêu EUR trước không.
6. **s221 — Latvia: "Schengen, Thụy Sĩ, Na Uy, Iceland".** Ba nước này VỐN nằm trong khối Schengen, liệt kê tách ra là thừa/gây hiểu sai. Đã giữ nguyên nội dung nguồn, chỉ sửa văn phong.
7. **s187 vs s249 — tiêu đề H2 nói "Other European residency by investment programs"** nhưng bảng có North Macedonia là **citizenship** by investment (và trạng thái "Đang mở" của diện này cũng nên được kiểm lại).
8. **s285–s286 — "not-for-profit business".** Với người đọc quốc tế, "not-for-profit" là một tư cách pháp lý, không phải cam kết chia 51% lợi nhuận. Câu như hiện tại dễ bị hiểu sai và là rủi ro uy tín. CEO chốt cách diễn đạt tiếng Anh.
9. **s175 — Malta CBI "Closed since July 2025".** Mốc phán quyết của Toà EU là 04/2025; CEO xác nhận mốc muốn công bố.
10. **s111 — "đi lại 180 nước".** Con số không dẫn nguồn. Nếu IMM có nguồn, nên viết rõ "visa-free or visa-on-arrival access to about 180 destinations" theo style guide mục 1.

## E. Chuyên môn — phần đã kiểm và ĐẠT

- s209/s211 (Đức) và s214/s216 (Pháp): bản Anh KHÔNG gọi là Golden Visa và KHÔNG gọi là permanent residence — đúng bản chất giấy phép, đúng cờ `#bo-qua-tn`. Anh (s224/s229) và Ý (s239/s244) cũng chỉ ghi "UK residency" / "Italy residency".
- Tên chính thức đúng: "Immigrant Investor Programme (IIP)" (s082), "Innovator Founder visa" (s224), "Stamp 4" (s078), "Investment Migration Council (IMC)" (s271).
- Mốc 15/02/2023 của Ireland (s082) khớp nguồn và khớp thực tế.
- "residency" (tư cách) vs "residence permit / permanent residence / residence conditions" dùng nhất quán toàn trang.
- "Golden Visa" viết hoa nhất quán; tiền viết `€500,000`, `£2 million`, `BGN 1,000,000` đúng style guide mục 5.
- s282 (hoàn phí) và s280 (đặt quyền lợi khách trước) đã được rào bằng "as set out in the contract" — chấp nhận được, nêu trong báo cáo.
- s164 (lộ trình E-2) đã làm mềm thành "may be able to explore" — giữ.
- s294: dấu nháy ba trong `song-ngu.tsv` chỉ là cách TSV nhân đôi dấu nháy; `nguon.json` chỉ có MỘT cặp nháy thẳng. Không phải lỗi.
