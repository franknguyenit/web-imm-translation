# Soát song ngữ — viec/2026-09-22-ov-new-zealand

Đối chiếu `song-ngu.tsv` cột `vi`/`en` từng dòng (205 dòng). Đoạn có `#bo-qua-so` / `#bo-qua-tn` / `#bo:` đã cố ý, không nhắc lại.

## Lỗi tìm được

### s186 — VỪA (sót ý)
- vi: "quốc gia cấp phép trực tiếp" (nhãn cho số "3" ở s185, ứng với 3 nước ở s159: Grenada, St. Kitts & Nevis, Dominica).
- en hiện tại: "Government licenses" — đổi chủ thể từ "quốc gia" (nước) sang "giấy phép", làm mất điểm nhấn "3
  CHÍNH PHỦ khác nhau trực tiếp cấp phép" (bằng chứng uy tín quốc tế, ăn khớp với s159).
- Gợi ý sửa ở `sua-song-ngu.txt`. Lưu ý: bản sửa dài hơn bản hiện tại (~2x ký tự) — chưa rõ ô này có nằm trong
  ngân sách `.stat-row-label` hay không (khác khối với các thẻ so sánh AIP/BIV); nếu có, cần rút gọn khi ghép.

### s030 — NHẸ (rủi ro gây nhầm, không phải lỗi nghĩa)
- vi: "DOANH NHÂN · TỪ 1 TRIỆU NZD" (nhãn thuộc thẻ Business Investor Visa).
- en hiện tại: "Entrepreneur · from NZ$1 million" — dịch đúng nghĩa "doanh nhân", nhưng trang có một chương
  trình KHÁC tên "Entrepreneur Work Visa" (đã đóng, s123). Người đọc dễ nhầm nhãn này với chương trình đã đóng.
- Không đề xuất sửa: mọi phương án thay thế ("Business investor", "Business owner"…) đều dài hơn 12 ký tự
  (ngân sách `.stat-row-label` ≈ 12, hiện "Entrepreneur" vừa khít). Nêu để CEO/team cân nhắc đổi cách trình bày UI
  nếu thấy cần, không sửa chữ trong việc này.

## Mâu thuẫn của chính nguồn — chỉ nêu, không tự hoà giải
- Số nước miễn visa: s005/s016 nói **187 quốc gia**, s095 nói **180+ quốc gia**. Bản dịch phản ánh đúng từng
  chỗ theo nguồn (không phải lỗi dịch). Brief đã ghi mục này để báo CEO.

## Không phát hiện thêm lỗi
- Số liệu, mốc thời gian, tên chương trình (Active Investor Plus Visa, Business Investor Visa, Entrepreneur Work
  Visa), tên cơ quan (INZ, NZTE, Investment Migration Council/IMC, Licensed Immigration Adviser) khớp nguồn và
  đúng tên chính thức.
- Không thấy thêm ý/lời hứa vượt nguồn; các chỗ nhắc "xin Resident Visa / apply for citizenship" đều giữ đúng
  mức hedge ("you can apply for") như nguồn.
- Thẻ giữ chỗ `{1}…{/1}`, `{br}` ở các dòng có tag đều còn đủ ở cột `en`.
- Không thấy thuật ngữ lệch `thuat-ngu.csv` (trang NZ chưa có thuật ngữ riêng trong bảng; "investor visa" /
  "investment immigration" đều là biến thể đã liệt kê của "đầu tư định cư").
