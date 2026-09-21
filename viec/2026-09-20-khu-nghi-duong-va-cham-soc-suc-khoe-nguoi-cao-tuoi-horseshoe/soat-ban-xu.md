# B6 — Soát bản xứ + chuyên môn · Horseshoe Bay Senior Living (2026-09-20)

Người soát: sub-agent Opus (B6), chỉ đọc cột `en` trước, sau đó đối chiếu chuyên môn. Không thấy báo cáo B5.

Tổng: **2 nặng · 7 vừa · 12 nhẹ** (nặng = rủi ro tuân thủ/chuyên môn; cả hai nặng là dữ kiện nguồn → không tự đổi, chuyển CEO).

## Bước 1 — Đọc như biên tập viên bản xứ

Nhận xét chung: giọng điềm tĩnh, đúng style guide; không còn chữ hô hào ("giải cơn khát", "đầu ngành", "hàng đầu" đã
được xử lý). H2–H6 đúng sentence case. Thuật ngữ senior housing (Independent Living / Assisted Living / Memory Care,
continuum of care, private-pay, occupancy, NOI, stabilized) dùng đúng cách người trong nghề. Mùi dịch còn ở vài chỗ lặp ý
hoặc cấu trúc "per year ... in the first stabilized year".

| Mã | Vấn đề | Mức | Lý do |
|---|---|---|---|
| s002 | "Investor spots available" nghe như dịch từ "còn suất" | nhẹ | Trang dự án EB-5 tiếng Anh thường ghi "Now accepting investors". |
| s006 | "a well-known resort city" | nhẹ | Horseshoe Bay là thị trấn nghỉ dưỡng nhỏ; người Mỹ nói "resort town/community". |
| s015 | "with strong finances who do not depend on government health programs (Medicare/Medicaid)" hơi vụng | nhẹ | Cách nói trong ngành: "financially secure, private-pay residents who do not rely on Medicare or Medicaid". |
| s039 | "reach the age when they need more health care ... stands to benefit" hơi dài, lủng củng | nhẹ | Viết gọn, giữ ý "ngành hưởng lợi". |
| s043 | "The area is short nearly 1,000 beds" nghe nói miệng | nhẹ | "faces a shortfall of nearly 1,000 beds". |
| s051 | "move to a different part of the community without having to leave" lặp ý | nhẹ | Chuẩn ngành: "transition to a higher level of care within the same community". |
| s052 | "reduces the cost of attracting new residents" | nhẹ | Ngành gọi "resident acquisition costs"; "longer lengths of stay". |
| s082 | "US$20.92 million per year ... in the first stabilized year" — thừa "per year" | nhẹ | Chỉ tiêu năm ổn định đầu tiên đã là số năm. |
| s084 | "Maximum total loan balance" | nhẹ | Ngành nói "maximum total debt"; số này = EB-5 48 + C-PACE 38,5 (khớp nguồn). |

## Bước 2 — Chuyên môn và tuân thủ

| Mã | Vấn đề | Mức | Lý do |
|---|---|---|---|
| s079 (+ s009, s080) | "A first-position lien on the entire site and all improvements" trong khi cấu trúc vốn có **C-PACE US$38.5 million** | **nặng** | Ở Texas (TX-PACE), khoản PACE là *assessment* thu cùng thuế tài sản và có thứ tự ưu tiên như lien thuế tài sản — thường **đứng trước** mọi khoản vay thế chấp; bên cho vay thế chấp phải ký "lender consent". Nói khoản vay EB-5 có "first-position lien" và là "senior loan" có thể gây hiểu sai cho nhà đầu tư (rủi ro chứng khoán/tuân thủ). Đây là dữ kiện nguồn → **không tự sửa**, chuyển CEO. Chưa sửa trong `sua-ban-xu.txt`. |
| s046 | "Existing facilities were built before 2000, and even the newest has been operating since 2014" — tự mâu thuẫn | **nặng** | Nếu tất cả xây trước 2000 thì không thể có cơ sở mới nhất 2014. Nguồn Việt cũng mâu thuẫn như vậy → dịch đúng nguồn, chuyển CEO (có lẽ ý là "phần lớn"). |
| s063 | "Form I-526E petitions receive priority processing" — đứng một mình thành "mọi I-526E đều được ưu tiên" | vừa | RIA 2022 chỉ ưu tiên đơn đầu tư vào dự án **rural**. Nguồn nằm dưới mục rural TEA → thêm "for rural projects" cho rõ, không thêm dữ kiện. |
| s066 | "After Form I-526 approval" — sai tên mẫu | vừa | Đầu tư qua trung tâm vùng nộp **Form I-526E** (các đoạn khác của trang đều dùng I-526E). Đề xuất I-526E; nguồn Việt ghi "I-526" → ghi CEO biết. |
| s064 | EN thêm "although actual processing times may vary" (nguồn không có) | vừa | Thêm để làm mềm kỳ vọng thời gian xử lý — hợp style guide mục 3, **nhận**, nhưng phải liệt kê ở báo cáo "Đã làm mềm". Không đề xuất sửa. |
| s007, s045, s047, s048 | "The only new, modern...", "No facility...", "No other projects...", "will be the only premium, modern option" — tuyệt đối hoá | vừa | Dữ kiện thị trường do chủ dự án đưa ra; nên quy nguồn ("according to the sponsor's market study") hoặc ít nhất chuyển s048 sang "is expected to be". Đề xuất sửa s007 và s048; s045/s047 giữ vì có "currently". |
| s069 | "Comfortably meets the job creation requirement" — trình bày số **dự kiến** như đã đạt | vừa | Việc làm chỉ được tính khi I-829; nói "projected to exceed". |
| s074 | "A commitment that the project will ... create the required number of jobs for each investor" | vừa | Không ai cam kết được số việc làm cho từng nhà đầu tư (việc làm là ước tính theo mô hình kinh tế); câu cũng thiếu chủ ngữ. Viết lại: cam kết hoàn thành xây dựng, dự án được thiết kế để tạo đủ việc làm. |
| s085 | "A substantial cushion ... supporting a refinancing" — số dự kiến nêu như sự thật | vừa | Giá trị ổn định (s083) là dự phóng → thêm "projected"; "the ability to refinance". |
| s055 | "The project draws residents from across the country" — thì hiện tại cho dự án chưa xây | nhẹ | Dự án khởi công Q2/2026 → "is expected to attract". |
| s076 | "Oversees the EB-5 capital so that it is used..." | nhẹ | "Oversees the deployment of EB-5 capital to help ensure..." — tránh ngụ ý bảo đảm tuyệt đối (nguồn: "Đảm bảo"). |
| s080 | "first-position lien on ... operating cash flow" | nhẹ | Trong ngành thường nói "first-priority security interest in the project's revenues"; nhưng bảng thuật ngữ chốt thống nhất "first-position lien" → giữ, chỉ ghi nhận. |

Đã kiểm, **đúng**: EB-5 Reform and Integrity Act of 2022 (RIA), ký tháng 3/2022 · 20% visa dành riêng cho rural (RIA) ·
USCIS ưu tiên xử lý I-526E cho dự án rural · 60 × US$800,000 = US$48 million · 777/60 ≈ 13 việc làm/NĐT · 777/600 ≈ +30% ·
114 + 48 + 18 = 180 căn, 182 giường (khớp TX-PACE: "180-unit / 182-bed") · s102 nêu đúng yêu cầu "at risk" · không có
"guarantee/100%/risk-free". Mọi đoạn nguồn có "EB-5" vẫn giữ "EB-5". **Đậm** và link (s058, s059, s088–s090) giữ đủ.

## Cần CEO xác nhận

1. **Thứ tự ưu tiên lien C-PACE vs khoản vay EB-5 (s009, s079, s080):** trang ghi khoản vay EB-5 là "senior loan" với
   "first-position lien" trên đất và công trình, trong khi dự án có C-PACE US$38.5 million (Nuveen Green Capital, qua
   TX-PACE). Theo luật PACE Texas, assessment PACE thường có ưu tiên ngang thuế tài sản, đứng trước khoản vay thế chấp.
   Cần CEO/EB5 Capital xác nhận câu chữ trong tài liệu chào bán (PPM) — có thể phải ghi "first-position mortgage lien,
   subject to the C-PACE assessment" hoặc tương tự. Bản dịch hiện giữ đúng nguồn.
2. **s046 mâu thuẫn năm xây:** "tất cả xây trước 2000" nhưng "mới nhất hoạt động từ 2014".
3. **s027 tổng vốn:** 48 + 22,5 + 38,5 = 109,0 triệu, nguồn ghi 109,1 triệu (có thể do làm tròn). Báo chí (BriefGlance)
   gọi dự án "US$108M".
4. **s030 C-PACE:** nguồn 38,5 triệu; Seniors Housing Business ghi Nuveen cấp **US$38.6 million** C-PACE.
5. **s066 tên mẫu:** nguồn ghi "I-526", đề xuất "Form I-526E" (đầu tư qua trung tâm vùng).
6. **Tên dự án:** EB5 Capital đặt "JF49 – Horseshoe Bay Senior Living"; báo chí/chủ đầu tư dùng tên thương mại
   "The Statesman at Horseshoe Bay". Cân nhắc nhắc tên này (tốt cho SEO) nếu CEO đồng ý.
7. **s064 "dưới 12 tháng":** là kỳ vọng của nguồn, USCIS không công bố cam kết thời gian; bản Anh đã thêm "actual
   processing times may vary" — CEO biết để ghi báo cáo "Đã làm mềm".

Không đọc được thân trang eb5capital.com/project/jf49-horseshoe-bay-senior-living/ (chỉ tải được khung trang) nên chưa đối
chiếu được số liệu EB5 Capital (s027–s036, s070–s085) với nguồn gốc.

Nguồn tra: eb5capital.com (JF49), texaspaceauthority.org (bài Horseshoe Bay; bài EB-5 + TX-PACE nhắc "lender consent"),
seniorshousingbusiness.com (Nuveen US$38.6M C-PACE), uscis.gov (EB-5 Q&A, I-526E).
