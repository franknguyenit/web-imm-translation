# B6 — Soát bản xứ + chuyên môn — 2026-09-22-ov-new-zealand

Bước 1 đọc riêng bản tiếng Anh (`xem --anh`), bước 2 đối chiếu `song-ngu.tsv` + `brief.md`.
Tổng thể: giọng đúng kiểu cố vấn, không "mùi dịch" nặng, thuật ngữ chương trình (Active Investor Plus,
Growth/Balanced category, Business Investor Visa, Resident/Permanent Resident Visa, INZ, NZTE, IMC,
Licensed Immigration Adviser) gọi đúng cách người trong nghề nói. Số viết bằng chữ số đúng style guide mục 5
(đã kiểm s011/s021 — KHÔNG phải lỗi).

## Bảng lỗi

| Mã | Vấn đề | Mức |
|---|---|---|
| s005 | "a powerful passport" = dịch thẳng "hộ chiếu quyền lực" — style guide mục 1 cấm lối quảng cáo này, bảo thay bằng dữ kiện. Thêm "advised by IMM Group" là calque của "Tư vấn bởi", không phải cách viết hero tiếng Anh | trung bình |
| s039 / s073 | Ô `.stat-row-value` ghi "Residence in", ô `.stat-row-unit` ghi "New Zealand" → giá trị lớn bị treo lửng giới từ. Bỏ "in" là đủ nghĩa và ngắn hơn | trung bình |
| s056 | "free travel in and out of the country" — "free" dễ hiểu là miễn phí. Từ trong nghề là "unrestricted travel". Câu cũng dài quá cho ô thẻ | trung bình |
| s057 / s092 | Dấu phẩy trước "and" khi chỉ có hai vế ("Free public healthcare, and free public schooling") — thừa | nhẹ |
| s061 | "investment level" — tiếng trong nghề là "investment threshold" | nhẹ |
| s085 / s086 | "NZ$1 million, and after 3 years of operating the business you apply..." — nối bằng "and" lủng củng; dùng dấu chấm phẩy, gọn hơn | nhẹ |
| s102 | "physical residence requirement" — thuật ngữ ngành là **physical presence requirement**; dấu phẩy sau "An age limit" thừa | trung bình |
| s116 | "Case by case, and INZ workload" trong ô bảng — lệch với s042/s043 cùng ý đã dùng "&" | nhẹ |
| s128 | "Swipe sideways to see every column" — dài và hơi ngượng cho dòng gợi ý vuốt bảng | nhẹ |
| s146 | Viết "Turkey"; `thuat-ngu.csv` dòng 146 chốt `Türkiye` là tên chính thức (Turkey chỉ là biến thể/để SEO tên trang), TM cùng câu cũng dùng Türkiye | trung bình |
| s153 | "so your file meets Immigration New Zealand (INZ) requirements" = cam kết kết quả tuân thủ thay cho INZ. Làm mềm thành "is prepared to meet" | trung bình (tuân thủ) |
| s166 | "litigation" cho "khiếu kiện" — công ty tư vấn di trú nói mình xử lý litigation là tự nhận hành nghề luật; dùng "appeals" | trung bình (tuân thủ) |
| s075 | Nhãn "To PR" cụt so với "Lên thường trú"; "Time to PR" (10 ký tự, vẫn trong ngân sách 12) rõ hơn | nhẹ |
| s055 | "A visa is granted as soon as you make the first investment" — câu khẳng định chắc kết quả. Đã sửa nhẹ về "is issued once you have made" | nhẹ (tuân thủ) |
| s004 / s010 / s197 | Trang dùng song song hai cách gọi: "investor visa" (chủ đạo, đúng từ khoá chính) và "investment immigration" (s010, s197). s010 là H2 tổng quan nên để thống nhất; s197 là tên trang khác nên GIỮ. **Không sửa** — nêu để luồng chính quyết cùng B7 | nhẹ |
| s186 | Nhãn "Government licenses" cho số 3, trong khi nguồn nói "3 quốc gia cấp phép trực tiếp"; TM cũ dùng "Countries licensing us directly". **Không sửa** vì bản dài hơn dễ vỡ ô | nhẹ |

## Bản sửa DÀI HƠN bản hiện tại (cần cân với ngân sách ô)

| Mã | Cũ → mới (số ký tự) | Ghi chú ô |
|---|---|---|
| s075 | "To PR" (5) → "Time to PR" (10) | `.stat-row-label`, ngân sách ≈12 — vẫn lọt |
| s061 | 52 → 56 | chữ trong thẻ, không phải ô số |
| s146 | "Turkey" → "Türkiye" (+1) | dòng gạch đầu dòng dài, không ảnh hưởng |
| s153 | 118 → 129 | gạch đầu dòng, không ảnh hưởng |
| s055 | 58 → 64 | dòng quyền lợi trong thẻ, dài nhất khối — kiểm mắt sau khi nhét |

Các bản sửa còn lại (s005, s039/s073, s056, s057/s092, s085, s086, s102, s116, s128, s166) đều **ngắn hơn hoặc bằng**.

## Mâu thuẫn / dữ kiện của nguồn — CẦN CEO (KHÔNG tự sửa vào bản dịch)

1. **Số nước miễn visa đá nhau trong cùng trang:** s005 và s016 nói **187 quốc gia**, s095 nói **180+ quốc gia**.
2. **Tuổi con đi kèm (s053):** nguồn ghi "con dưới 24 tuổi". Quy định INZ thường diễn đạt là con phụ thuộc
   **24 tuổi trở xuống**. Lệch một tuổi — cần CEO xác nhận với đối tác NZ.
3. **"Y tế công miễn phí" (s057/s092):** y tế công NZ được trợ cấp theo diện visa chứ không miễn phí toàn bộ
   cho mọi người giữ visa. Đã dịch đúng nguồn, nhưng là câu dễ bị bắt bẻ.
4. **Mốc thời gian lên PR của Active Investor Plus:** s058/s115 nói PR sau 4 năm trong khi hạng mục Growth chỉ
   yêu cầu giữ vốn 3 năm (s044) — nguồn không giải thích 4 năm tính từ đâu. Cần CEO xác nhận.
5. **Mốc còn hiệu lực 2026:** Growth NZ$5 triệu/3 năm · Balanced NZ$10 triệu/5 năm · BIV nhận hồ sơ từ 11/2025 ·
   Entrepreneur Work Visa đóng 08/2025 (đã nêu trong brief, nhắc lại để CEO chốt một lần).
6. **Tuyên bố tuyệt đối (s159):** "công ty Việt Nam đầu tiên & duy nhất được Chính phủ Grenada, St. Kitts & Nevis,
   Dominica cấp phép trực tiếp" — khẳng định "first and only" không dẫn nguồn. Đã giữ đúng nguồn; CEO cân nhắc
   có dẫn chứng công khai được không.
