# Soát bản xứ — 2026-09-21-overview-usa-v2

Biên tập viên bản xứ Mỹ (private wealth / investment migration). Mỗi dòng: mã đoạn · lỗi · mức nặng.
Bản sửa đề xuất nằm ở `sua-ban-xu.txt`. Mọi đề xuất cho ô hẹp đã đếm ký tự theo brief.

## CHẶN (sai luật / rủi ro tuân thủ — không được lên trang khi chưa sửa)

- s046 · 'for at least 5 years' sai luật hiện hành. RIA 2022 (INA 203(b)(5)) chỉ đòi sustainment period 2 năm kể từ ngày góp vốn; USCIS xác nhận trong hướng dẫn 11/10/2024 (Policy Manual Vol. 6 Part G). Nguồn tiếng Việt 'tối thiểu 5 năm' là mốc tiền-RIA, đã lỗi thời. · chặn
- s017 · 'No added risk' (nguồn 'Miễn rủi ro') vi phạm style guide mục 3: vốn EB-5 bắt buộc 'at risk' theo luật Mỹ, không được gắn nhãn miễn rủi ro ngay cạnh con số US$800,000. Ý thật của ô là miễn rủi ro PHÁP LÝ khi luật đổi. · chặn
- s154 · 'Generally not subject to U.S. tax on worldwide income' là khẳng định thuế sai. Người giữ E-2 ở Mỹ đủ ngày theo substantial presence test (IRC 7701(b)) THÀNH U.S. tax resident và bị đánh thuế thu nhập toàn cầu. Phải nói theo điều kiện + đẩy về tax advisor. · chặn
- s145 · 'Generally avoid U.S. tax on worldwide income' — vừa sai như s154, vừa dùng chữ 'avoid tax' (hàm ý né thuế), là chữ không bao giờ xuất hiện trong bản tiếng Anh của nhà tư vấn nghiêm túc. · chặn
- s190 · Ô bảng so sánh lặp lại khẳng định thuế của s154 ('while generally staying outside U.S. tax on worldwide income'). Bảng so sánh là chỗ khách chụp màn hình — rủi ro cao nhất. · chặn
- s027 · 'grant a permanent U.S. green card directly' sai với EB-5: nhà đầu tư nhận thẻ xanh CÓ ĐIỀU KIỆN 2 năm (conditional permanent resident), phải nộp I-829 gỡ điều kiện. Câu hiện tại làm người đọc Mỹ tưởng không có bước điều kiện. · chặn

## NÊN SỬA (sai chuyên môn, mùi dịch, hoặc vỡ ô)

- s150 · '3 consecutive years' áp cho MỌI đương đơn E-2 là sai phạm vi. Theo AMIGOS Act (đưa vào FY2023 NDAA, 12/2022), yêu cầu 3 năm chỉ áp cho người có quốc tịch nước hiệp ước DO ĐẦU TƯ mà có; và luật dùng chữ 'domiciled', không phải 'lived'. · nên sửa
- s157 · Cùng lỗi phạm vi như s150, lặp lại ở mục 'Points to consider'. · nên sửa
- s133 / s187 · Trình bày US$100,000–150,000 như MỨC TỐI THIỂU BẮT BUỘC. Luật E-2 không có ngưỡng vốn luật định; chuẩn là 'substantial investment' tương xứng với doanh nghiệp. Người trong nghề viết 'typically', không viết 'at least'. Ngoài ra 'US$100–150K' phá quy ước số của style guide mục 5. · nên sửa
- s091 / s119 · '15 days' là premium processing (Form I-907, 15 NGÀY LÀM VIỆC, có phí USCIS riêng). Nêu trần trụi '15 days' như tốc độ mặc định là hứa kết quả xử lý. · nên sửa
- s050 / s076 · 'Full (access to) healthcare, education and social benefits, the same as U.S. citizens' nói quá. Thường trú nhân bị hạn chế theo PRWORA (5-year bar với nhiều federal means-tested benefits, SSI…). Hai đoạn còn dịch khác nhau cho cùng một ý (s050 có 'access to', s076 không) — thiếu nhất quán. · nên sửa
- s250 · 'Countries licensing us directly' = 30 ký tự, vỡ ô `label-sm` (≤20). · nên sửa
- s016 · 'Adjudication and benefits' = 25 ký tự trong ô `gi-value` cột hẹp, dài hơn nguồn (20). · nên sửa
- s003 · 'IMM GROUP · EST. 2005' viết hoa cả dòng trong HTML. CSS đã `text-transform: uppercase` cho eyebrow → phải viết thường trong HTML (brief + style guide mục 6). · nên sửa
- s216 vs s218 vs s253/CTA · Lẫn lộn 'adviser' (s216, s218) và 'advisor' (s253, 'Speak with an advisor'). Chọn một; style guide đã dùng 'advisor'. · nên sửa
- s055 · 'you wait your turn in the queue' là chữ Anh-Anh và mùi dịch. Tiếng Mỹ ngành này nói theo visa number / priority date. · nên sửa
- s111 · 'transfer senior staff' sai thuật ngữ L-1A: chỉ chuyển người ở 'managerial or executive capacity', không phải 'senior staff' chung chung. · nên sửa
- s116 · 'holds a managerial or senior executive position' — INA 101(a)(44) dùng 'in a managerial or executive capacity'. · nên sửa
- s124 · 'You must show the business is performing from the first year in order to stay' — câu gãy, và điều kiện thật là để được GIA HẠN. · nên sửa
- s144 · 'Not settle permanently' nối vào 'Suits families who want to' thành câu sai ngữ pháp. · nên sửa
- s153 · 'take its profits' nghe như rút ruột công ty; tiếng Anh tài chính dùng 'draw'/'receive'. · nên sửa
- s194 · 'labor export' là dịch thẳng 'xuất khẩu lao động' — người đọc Mỹ không hiểu, và cụm này mang sắc thái tiêu cực. · nên sửa
- s199 · 'standing by our clients' interests' không phải cụm tiếng Anh; 'bảo vệ lợi ích khách hàng đến cùng' phải thành 'unwavering commitment to our clients' interests'. · nên sửa
- s231 · 'Clients rate us "extremely satisfied"' sai chủ ngữ — khách mới là người hài lòng, không phải mình được xếp hạng 'extremely satisfied'. · nên sửa
- s254 · 'the file itself is full of detail' — 'file' dịch từ 'hồ sơ'; tiếng Anh di trú Mỹ gọi là 'petition'/'case'. · nên sửa
- s274 · 'Social Security' viết hoa là TÊN RIÊNG của chương trình hưu trí/khuyết tật liên bang, hẹp hơn 'an sinh xã hội' của nguồn (trợ cấp + phúc lợi + an sinh). · nên sửa
- s205 · Lời hứa hoàn phí viết ở thể chắc chắn nhưng lại mở bằng 'We are prepared to' (nghe do dự, mùi dịch). Cần bản dứt khoát + pháp chế duyệt trước khi lên. · nên sửa
- s211 / s223 · 'The first firm in Vietnam…' và 'The first and only firm in Vietnam…' là khẳng định tuyệt đối first/only. Style guide mục 3 + rủi ro quảng cáo so sánh. Giữ được nếu có bằng chứng dẫn nguồn; không thì bỏ chữ tuyệt đối. · nên sửa

## GÓP Ý (giọng, độ mượt, đúng chuẩn ngành)

- s013 · 'Investment preserved' = đúng 20 ký tự, sát trần ô `gi-label`, và 'preserved' hơi sách vở. · góp ý
- s052 · Mức học phí bằng 1/3 là học phí IN-STATE (sau khi đủ điều kiện cư trú bang) — thiếu chữ này là thiếu điều kiện. · góp ý
- s114 · 'jointly owned entity' — thuật ngữ L-1A là 'affiliate' (parent / branch / subsidiary / affiliate). · góp ý
- s107 · 'Outcome' đứng đầu danh sách mục tiêu (s108–s109) nên đọc lệch; nguồn là 'Mục đích'. · góp ý
- s217 · 'an "AV" rating' nên gọi đủ: Martindale-Hubbell AV Preeminent — người đọc Mỹ nhận ra ngay, còn 'AV' trơ thì không. · góp ý
- s219 / s252 · IIUSA phân hạng hội viên (Regional Center member / Associate member…), không có hạng tên 'full member'. Xác nhận lại hạng đúng trước khi lên. · góp ý
- s216 · 'An exclusive adviser:' cụt — thiếu 'to IMM Group' thì người đọc không biết độc quyền với ai. · góp ý
- s258 / s259 · 'creed' mang màu tôn giáo; công ty Mỹ dùng 'promise' / 'commitment'. · góp ý
- s213 · 'we take on the clients we are genuinely right for' thiếu 'only' nên mất ý 'ít mà chất'. · góp ý
- s220 · 'with capital repaid on schedule' nên có 'to date' như vế trước, để cùng là thành tích tới nay chứ không thành cam kết. · góp ý
