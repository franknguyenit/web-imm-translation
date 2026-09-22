# Soát song ngữ — 2026-09-22-sip-seaview-heights

Đối chiếu 141/141 dòng `song-ngu.tsv`. Kiểm số liệu (320.000/300.000 EUR, 81 căn hộ, 9 biệt thự, 1-3/3-4 PN,
3km/17km/4km, tháng 3/2029, 80 năm, 3 nhà thầu lớn nhất, 40 dự án, 140 triệu EUR, Hạng A, 12,5%, 8/11 năm, B1,
170 destinations, 1 lần/2 năm) bằng script đối chiếu số + tên riêng + thẻ `{1}…{/1}`/`{br}` — không lệch, không
vỡ icon (`workspace_premium`, `energy_savings_leaf`, `engineering`, `park`, `pool`, `local_parking`, `shield`,
`fitness_center`, `child_care`, `deck`, `euro_symbol`, `event`, `apartment`, `balance`, `verified_user`,
`holiday_village`, `school`, `business_center`, `license`, `architecture`, `landscape`, `location_on`,
`check_circle`, `diamond` — 11 dòng, cả 11 giữ nguyên xi hai cột).

**Kết luận chung: không thấy sai nghĩa, sót ý, thêm ý, hay lệch thuật ngữ so với `thuat-ngu.csv`.**

## Ba chỗ được yêu cầu soi kỹ

1. **s017/s020** — "Trái tim sầm uất và **đáng sống bậc nhất**" → "a busy city and **one of the most
   liveable**". Hạ cấp so sánh tuyệt đối xuống so sánh nhóm — đúng style guide mục 1 (bỏ "số 1/hàng đầu/siêu"),
   không đổi hướng nghĩa (Limassol vẫn là nơi rất đáng sống). Không phải lỗi, chỉ mềm hoá đúng luật.
2. **s032/s081** — cả hai bỏ "hàng đầu" ("uy tín hàng đầu" → "respected"; "điểm đến hàng đầu" → bỏ hẳn cụm).
   Đúng style guide mục 1. Không mất ý cốt lõi (vẫn giữ "long-established and respected", "developer of
   destination real estate").
3. **s087/s033** — "**Top 3** nhà thầu lớn nhất" dịch thành "**Among the 3 largest** contractors" — giữ đúng
   nghĩa xếp hạng của nguồn (không đổi ý, chỉ đổi cách nói cho tự nhiên). "**Hoàn toàn** đáp ứng điều kiện" bỏ
   chữ "hoàn toàn" trong bản Anh (chỉ còn "meets the requirements") — bản Anh AN TOÀN hơn nguồn, không phải lỗi
   dịch. Cả hai khẳng định ("Top 3", tuyên bố đáp ứng điều kiện chương trình PR) đều **không dẫn nguồn** trong
   `song-ngu.tsv` — đây là rủi ro tuân thủ/dữ kiện của **nguồn Việt**, đã dịch đúng nguyên văn nguồn; theo luật
   "không tự hoà giải mâu thuẫn của nguồn" nên không sửa, chỉ nêu để B6/báo cáo cân nhắc.

## Các mục khác đã kiểm, không lỗi
- Tên riêng (Limassol, Cybarco, Lanitis Group, Centro Limassol, Aktea Residence 4, Park Residence, Trilogy
  Limassol Seafront, Limassol Marina) khớp 1:1 hai cột.
- "thường trú nhân (vĩnh viễn)" dịch nhất quán "permanent residence/resident" — đúng vì Síp cấp thường trú thật
  (khác Hy Lạp), khớp CSV dòng `thường trú nhân vĩnh viễn`.
- "Công dân EU" (s133) dịch "Cypriot (EU) citizenship" — đúng CSV, tránh hiểu nhầm PR Síp dẫn thẳng tới EU.
- "chứng minh có đủ mức thu nhập hàng năm" (s105) dịch "secured annual income" — khớp CSV.
- s132 "tiếng Hy Lạp B1" (không phải tiếng Síp) — đúng nguồn vì ngôn ngữ chính thức Síp là tiếng Hy Lạp, không
  phải lỗi lẫn sang trang Hy Lạp.
- Đoạn `#bo-qua-so` (s107, "1 lần" → "once") có lý do hợp lệ, không báo lại.

Không có góp ý cần sửa.
