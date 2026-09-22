# Brief — trang tổng quan Đầu tư định cư Mỹ (template overview/usa/v2)

- **Nguồn:** `resources/templates/overview/usa/v2/tmp-info.php` (theme immgroup) — HTML thuần, 276 đoạn, 2.142 chữ.
- **Dạng trang:** trang trục (hub) giới thiệu 4 chương trình Mỹ: EB-5, EB-1C (nhóm A — thẻ xanh trực tiếp),
  L-1A, E-2 (nhóm B — diện doanh nhân) + bảng so sánh + vì sao chọn IMM + liên kết chuyên trang.
- **Người đọc đích:** nhà đầu tư/doanh nhân quốc tế đang so các đường vào Mỹ; thị trường tìm kiếm mạnh:
  Mỹ, Anh, Úc, Canada, Singapore, UAE (+ Ấn Độ, Pakistan, Canada xuất hiện nhiều trong gợi ý).
- **Giọng:** cố vấn điềm tĩnh kiểu private bank; xưng "you / your family"; công ty = "IMM Group" / "we".

## Ràng buộc riêng của việc này — layout cố định
Bản Anh ráp lại vào **đúng khung HTML cũ**, nên mỗi đoạn có ngân sách ký tự theo ô CSS:
`stat-row-label` ≤12 · `stat-row-value` ≤13 · `stat-row-unit` ≤12 · `gi-label` ≤20 · `eyebrow` ≤25 ·
`label-sm` ≤20 · `data-section` ≤16 (nowrap) · `scroll-hint` ≤12. Ô bảng so sánh và `link-chip` thoải mái.
⚠ Không dùng gợi ý TM cho các ô hẹp (TM "Investment amount" = 17 ký tự, vỡ `stat-row-label`).
CSS đã `text-transform: uppercase` cho eyebrow/badge/label/stat-row-label/gi-label → **viết thường trong HTML**.

## Phân đoạn dịch sát / viết lại
- **Dịch sát:** điều kiện chương trình, số tiền, thời gian xét duyệt, bảng so sánh, mốc I-526E 30/09/2026.
- **Viết lại:** H1 hero, eyebrow, nhãn ô thống kê (ngắn lại cho vừa ô), CTA, câu dẫn nhóm A/B.
- **Bỏ / viết chung (ngữ cảnh Việt):** `(~19,2 tỷ)` sau 800.000 USD (bỏ) · "công ty mẹ Việt Nam" →
  "parent company abroad" · "gia đình Việt Nam" → "client families". Giữ dữ kiện công ty (21+ năm tại
  Việt Nam từ 01/2005, Quỹ Be Better, nhà sáng lập) — hợp lệ theo style guide mục 4.
- **Làm mềm tuân thủ:** "bảo toàn vốn 800.000 USD" → manage risk (vốn EB-5 phải at risk) ·
  "không bị đánh thuế thu nhập toàn cầu" → "generally not subject to" · "tỷ lệ chấp thuận 100%" → ghi là
  thành tích tới nay · "đa dạng bậc nhất" → "one of the broadest".

## Từ khoá (B3)
- **Chính:** `u.s. investor visa` — gợi ý Google phủ 6/6 thị trường ở mọi biến thể
  (requirements 18 lần, cost 12, to green card 12, processing time 12); hợp trang trục vì gồm cả
  đường thẻ xanh (EB-5, EB-1C) lẫn đường visa (L-1A, E-2).
- **Phụ:** green card by investment · u.s. investment immigration · eb-5 visa · eb-1c green card ·
  l-1a visa · e-2 visa · u.s. investor visa requirements.
- ⚠ Xếp hạng theo độ phủ gợi ý Google, **chưa có số lượt tìm** (cần Ahrefs/Semrush).
