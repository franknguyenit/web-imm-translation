# Soát song ngữ Việt–Anh — visa-dinh-cu-my-eb5 (B5, 2026-09-18)

Nguồn: JSON xuất từ ACF Page Importer, đối chiếu qua `song-ngu.tsv` (261 dòng, 260 đoạn s001–s260).
Đã đọc: `quy-trinh/style-guide.md`, `thuat-ngu/thuat-ngu.csv`, brief `viec/2026-09-17-visa-dinh-cu-my-eb5/brief.md` (bản 17/09, cùng trang).

## Phương pháp
1. Soát tay 16 đoạn dịch mới: s001, s002, s005, s011, s053 (đã bỏ), s088–s091, s094–s100 — đối chiếu nghĩa, thuật ngữ, thẻ giữ chỗ.
2. Đối chiếu bằng script toàn bộ cột `vi`/`en` của 260 đoạn để tìm lệch số lượng/vị trí thẻ `{1}…{/1}`, `{br}`.
3. Đọc toàn bộ 260 dòng tìm đoạn lấp từ bộ nhớ dịch bị sai vai trò trường (tiêu đề thẻ ↔ câu mô tả, nhãn nút ↔ câu, hai field trùng nội dung — cột `ghi_chu` có `trung:`).
4. Kiểm tra riêng: cấm tuân thủ (`guarantee`, `100% success`, `risk-free`, `safe`, `Vietnamese clients`), định dạng số/tiền/ngày theo style guide mục 5, Title Case (H1) / Sentence case (H2–H6) theo mục 6.
5. Loại trừ mọi chỗ bỏ/viết chung/làm mềm đã ghi trong brief 17/09 (s005 #bo-qua-so tiền VND; s011/s010 grandfathering; s099 "Success stories in America"; s147–149 EB-5 backlog viết chung; s243 "outside the United States"...).

## Kết quả tổng quan
- **Thẻ giữ chỗ:** khớp 100% giữa vi/en trên toàn bộ 260 đoạn (không thiếu, không thừa `{1}`, `{/1}`, `{2}`, `{/2}`, `{br}`).
- **Sai vai trò trường:** không phát hiện trường hợp nào trong 260 đoạn (2 cặp trùng nội dung có ghi `trung:` đều đúng vai trò — heading↔heading, câu hỏi↔câu hỏi).
- **Cấm tuân thủ:** không có vi phạm (`guarantee`, `100% success`, `risk-free`, `safe`, `Vietnamese clients/investors`).
- **Định dạng số/tiền/ngày, Title Case/Sentence case, US$, thuật ngữ (TEA, NVC, CSPA, AOS, path of funds, job cushion, grandfathering, regional center viết thường...):** đúng theo style guide và thuat-ngu.csv trên toàn bộ 260 đoạn.
- **16 đoạn mới:** nội dung chính xác, không sai nghĩa, không thêm/bớt ý ngoài phạm vi đã duyệt; các chỗ dịch mới (s088–s100: nhãn liên kết dịch vụ/chủ đề) đều đúng nghĩa, đúng ngắn gọn như vai trò nhãn liên kết.

## Bảng lỗi

| Mã đoạn | Lỗi | Mức nặng | Đề xuất |
|---|---|---|---|
| s001 | Trường `post_title` (loai: tieu-de) — nguồn "Visa định cư Mỹ EB-5" dịch thành "EB-5 Visa", bỏ mất ý "định cư" (immigrant/residency) và "Mỹ" (U.S.) so với nguyên văn. Nếu trường này chỉ dùng nội bộ (admin/slug) thì chấp nhận được vì đã chứa đúng từ khoá chính "eb-5 visa"; nhưng nếu được dùng làm `<title>` hiển thị công khai thì nên rõ nghĩa quốc gia/loại visa hơn. | nhẹ | Xác nhận vai trò hiển thị của `post_title`; nếu hiển thị công khai, đổi thành "U.S. EB-5 Immigrant Visa"; nếu chỉ nội bộ, giữ nguyên. |

Không có lỗi mức **vừa** hoặc **nặng**.
