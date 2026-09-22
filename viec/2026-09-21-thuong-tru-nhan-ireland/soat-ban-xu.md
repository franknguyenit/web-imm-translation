# B6 — Soát chuyên môn + bản xứ (Ireland IIP / Golden Visa)

Đọc bản EN độc lập (`xem --anh`), không đối chiếu nguồn Việt ở bước 1. Vai: biên tập viên bản xứ ngành
private wealth / investment migration + kiểm chuyên môn theo style guide §3.

**Tổng quan:** bản dịch chắc tay, thuật ngữ ngành đúng (endowment, pre-approval, reckonable residence,
source of funds, Stamp 4, IRP, ISD, CTA, ILR). Không có lỗi hứa chắc kết quả, không có "risk-free",
không nói hộ luật sư/chuyên gia thuế. Vấn đề chính là **mùi hedging lặp lại** ("subject to the applicable
rules" 5 lần), **tình trạng chương trình đã đóng chưa hiện rõ ở phần giữa bài**, và vài lỗi định dạng máy
bắt được.

## Bảng góp ý

| Mã đoạn | Vấn đề | Đề xuất | Mức nặng |
|---|---|---|---|
| s002 | `NOTICE` viết hoa cả dòng — style guide §1 và §6 cấm VIẾT HOA CẢ CÂU. | Đổi thành `Notice`. | NẶNG |
| s200 | `2007-2008` dùng dấu gạch nối, style guide §5 yêu cầu en dash cho khoảng. | `2007–2008`. | NẶNG |
| s003 + s006 | Hai dòng liên tiếp cùng nhấn "a limited number … remain" / "holds a limited number" → đọc như tạo sức ép khan hiếm (style guide §3 và brief đã cảnh báo). Thừa một lần. | s003 chuyển sang câu trạng thái trung tính: nêu chương trình đã đóng, phần còn lại là suất của dự án cũ. Giữ "limited number" duy nhất ở s006 (là dữ kiện công ty). | VỪA |
| s007, s013, s026, s163, s164 | Mệnh đề `— subject to the applicable rules` lặp 5 lần gần như nguyên văn. Trên trang thật, người đọc bản xứ thấy đây là hedging máy móc, làm loãng câu lợi ích và gây "mùi dịch". | Giữ mệnh đề đầy đủ ở s007 (khối thông báo) và s164 (UK/CTA — chỗ rủi ro pháp lý cao nhất). s013, s026, s163 rút gọn tự nhiên hơn mà vẫn không hứa chắc. | VỪA |
| s007 vs s013 vs s026 | Ba đoạn nói gần như cùng một ý ("sau khi nhập tịch, được sống ở EU và Anh") bằng ba câu dài gần giống nhau. Đọc trôi từ trên xuống thì thấy lặp. | Viết lại s026 ngắn và khác nhịp (câu ngắn, không lặp cấu trúc "Once you naturalize…"). | VỪA |
| s011 | Câu hero dài, ba ý dồn một câu, và `It closed to new applications in 2023` nêu năm trong khi cả bài dùng mốc đủ `February 15, 2023`. Người tìm kiếm muốn biết chính xác mốc đóng (brief: ý định #1). | Tách nhịp và dùng mốc đủ `February 15, 2023`. | VỪA |
| s032 | `Why investors chose the Ireland Immigrant Investor Programme (IIP)` — thì quá khứ đúng với chương trình đã đóng, nhưng cả cụm s033–s046 bên dưới lại viết ở thì hiện tại ("You invest only after pre-approval", "Just 1 day per year"). Không nhất quán thì trong cùng một khối. | Giữ H2 ở quá khứ nhưng thêm một dòng neo, hoặc đưa H2 về hiện tại cho khớp khối bên dưới. Đề xuất: đổi H2 sang `What made the Ireland Immigrant Investor Programme (IIP) attractive` và giữ khối dưới ở hiện tại (mô tả đặc tính chương trình, vẫn đúng cho suất còn lại). | VỪA |
| s197–s201 | `Is the Ireland program stable?` → `The program is stable and has a long operating track record` viết ở **hiện tại** cho một chương trình đã ngừng nhận hồ sơ mới từ 2023. Đọc như chương trình vẫn mở bình thường. Đây là chỗ dễ gây hiểu lầm nhất của cả bài. | Thêm neo thời gian vào s198: nói rõ nền tảng vận hành là quá khứ, chương trình đã đóng nhận hồ sơ mới. | NẶNG |
| s199 | `residency-by-investment programs` — trong ngành viết không gạch nối khi là danh từ: `residency by investment programs`, hoặc dùng `residence-by-investment` (cách Henley/IMI hay dùng). Hiện tại là dạng lai. | `One of the EU's first residence-by-investment programs, alongside Portugal`. | NHẸ |
| s035 | `This reduces your exposure on both the investment and the Stamp 4 residency` — "exposure on … residency" không phải collocation của ngành (exposure gắn với vốn/thị trường, không gắn với quyền cư trú). | `This reduces your exposure: you commit capital only after the residency decision is in hand.` — giữ đúng ý nguồn, không thành "risk-free". | VỪA |
| s046 | `on the workload at Immigration Service Delivery (ISD)` — đúng tên cơ quan, nhưng `workload` xuất hiện lại ở s202 với cùng cấu trúc. Lặp. | s202 đổi sang `on ISD processing schedules`. | NHẸ |
| s111 | `processing time depends on ISD schedules` — ISD đã được viết đủ ở s046 rồi, đây viết lại đủ `Immigration Service Delivery (ISD)` lần thứ hai. Style guide §6: viết đủ **lần đầu**. | Dùng `ISD` ở s111. | NHẸ |
| s051 vs s228 | s051 `Minimum net worth of €2 million`; s228 `Personal net worth of at least €2 million from a lawful source`. Cùng một điều kiện, hai cách gọi. | Đồng bộ `net worth of at least €2 million`. | NHẸ |
| s055 | `Investment requirements` đứng ngay sau `Applicant requirements` (s048) và trước `2 investment options` (s057) — ba heading cùng tầng nói gần cùng chủ đề, hơi rời. Không phải lỗi dịch, là cấu trúc nguồn. | Không sửa; ghi nhận. | NHẸ |
| s098, s152, s229, s240 | `There are only 2 options` / `1 of 2 ways` / `Choose 1 of the 2` / `cover the requirement for 2 years` — chữ số cho số nhỏ là đúng luật dự án (style guide §5 dùng chữ số cho mọi số), nhưng `There are only 2 options` mở đầu bằng "There are only" nghe hơi cụt trong văn phong tư vấn. | `The program offers 2 options only:` | NHẸ |
| s102 | `Most of our clients choose the endowment option` — câu này nói thay cho một tập khách hàng, không có số liệu. Không phải lỗi tuân thủ nhưng nên mềm hơn ở trang công khai. | `In practice, most of our clients have chosen the endowment option.` (thêm "in practice", thì hoàn thành cho khớp chương trình đã đóng). | VỪA |
| s107 | `Fits the timeline for children to move over and study with free tuition` — `move over` là khẩu ngữ, lệch giọng private bank. | `Aligns with the timeline for children to relocate and study with free tuition`. | VỪA |
| s134 | `We recommend consulting a tax advisor before proceeding` — đúng style guide §3 (không nói hộ chuyên gia thuế). Nên thêm `independent` cho khớp chuẩn §3. | `We recommend consulting an independent tax advisor before proceeding.` | VỪA |
| s186 | `we recommend consulting a qualified legal advisor` — tương tự, nên là `independent`. | `…an independent legal advisor`. | NHẸ |
| s143/s144 | `Can you withdraw the investment after 3 years?` → `You may withdraw the capital after 3 years — this does not affect renewal`. Khẳng định tuyệt đối về hệ quả gia hạn. Style guide §3: không hứa chắc kết quả hành chính. | `…— on its own, this does not affect your renewal, provided the other conditions are met.` | NẶNG |
| s165 | `Eligible to apply for British citizenship — no English language test required` — câu này đứng một mình dễ đọc thành "công dân Ireland đương nhiên đủ điều kiện xin quốc tịch Anh". Thực tế còn cần 5 năm cư trú + ILR (chính bài nói ở s174–s175). | `Eligible to apply for British citizenship once the UK residence conditions are met — with an exemption from the English language test`. | NẶNG |
| s176 | `English at B1 level (Irish citizens are exempt)` — dùng `exempt` ở đây và `exemption` ở s031, s191; nhất quán, ổn. Nhưng s031 viết `the language test` còn UK gọi chính thức là `English language requirement`. | s031: `Exemption from the English language requirement when applying for UK settlement and citizenship`. Lưu ý: "UK residence" ở s031 nên là `settlement` (ILR) cho đúng ngành. | VỪA |
| s177 | `Passing the Life in the UK test` — đúng tên chính thức, giữ. | Không sửa. | — |
| s183 | `Can I hold 3 citizenships — Irish, British, and my current one?` — "my current one" nghe lỏng. | `Can I hold 3 citizenships — Irish, British, and my existing nationality?` | NHẸ |
| s001 / s009 | Tiêu đề trang `Ireland Golden Visa` và H1 `{1}Ireland{/1} Golden Visa`. Đúng 1 H1, Title Case — hợp style guide §6. Ghi chú: "golden visa" không phải tên chính thức của IIP; bài đã xử lý đúng bằng cách nêu tên chính thức ngay ở s010/s011. | Không sửa. | — |
| Heading chung | s010 `Ireland golden visa: Stamp 4 residency through the Immigrant Investor Programme (IIP)` — sentence case đúng, nhưng `golden visa` thường (lowercase) trong khi H1 viết hoa `Golden Visa`. Không nhất quán thị giác giữa H1 và H3. | Chấp nhận được (H1 Title Case vs H2–H6 sentence case là đúng luật). Không sửa. | — |
| Dấu câu | Em dash `—` dùng đúng và nhất quán trong toàn bài; en dash `18–24` ở s212 đúng. Chỉ s200 sai (đã nêu). | — | — |
| Mạch bài | Bài đọc trôi ở phần trên (thông báo → hero → quyền lợi → ưu điểm → điều kiện → quy trình). Khối FAQ 24 câu dài nhưng đó là cấu trúc nguồn, không phải lỗi dịch. | Không sửa. | — |

## Nguồn có vẻ sai hoặc lỗi thời — cần CEO xác nhận

⚠ Đã dịch đúng nguồn, **không tự sửa dữ kiện** theo luật dự án mục 5. CEO/team pháp lý xác nhận:

1. **s027–s028 "hộ chiếu Ireland top 5 toàn cầu / ~190 điểm đến"** — thứ hạng hộ chiếu đổi hàng năm theo từng
   bảng xếp hạng (Henley, Arton, Nomad). Nêu "top 5" mà không ghi nguồn và năm là rủi ro lỗi thời. Đề nghị
   hoặc thêm nguồn + năm, hoặc bỏ số thứ hạng và giữ "among the world's strongest" (s166 đã viết như vậy).
2. **s123 "Schengen: hiện gồm 29 quốc gia"** — số nước Schengen đã thay đổi vài lần gần đây. Cần xác nhận số
   đúng tại thời điểm đăng; nếu giữ, nên ghi mốc ("as of …") theo style guide §3.
3. **s137–s139 lộ trình Stamp 4 (2 năm → 3 năm → 5 năm/lần)** — đây là điều kiện hành chính của ISD, cần
   đối chiếu trang ISD hiện hành trước khi đăng bản tiếng Anh cho người đọc quốc tế.
4. **s151 "tối thiểu khoảng 5 năm"** và **s154–s158** (6 tuần/năm, khung 9 năm, năm thứ 7/8) — quy tắc
   reckonable residence của Ireland có thay đổi về cách tính vắng mặt. Cần pháp lý xác nhận.
5. **s181–s182 "450 ngày / 5 năm" và "90 ngày / 12 tháng cuối"** cho quốc tịch Anh — đúng với quy định hiện
   hành nhưng Home Office có quyền xét linh hoạt; câu đang viết tuyệt đối. Cần xác nhận có nên thêm "as a
   general rule".
6. **s170 "Bồ Đào Nha, Hy Lạp yêu cầu thi tiếng bản xứ"** — so sánh với chương trình nước khác dễ lỗi thời và
   là điểm đối thủ có thể phản bác. Cần xác nhận hoặc bỏ so sánh.
7. **s005/s236 "dự án đủ điều kiện pháp lý vẫn được tiếp nhận suất đầu tư"** — đây là tuyên bố pháp lý mấu
   chốt của cả trang (chương trình đã đóng nhưng vẫn nhận tiền). Bản tiếng Anh đã viết thận trọng
   ("may still accept", "are still being accepted"), nhưng CEO nên có văn bản xác nhận cơ sở pháp lý trước
   khi đăng cho người đọc quốc tế — rủi ro tuân thủ cao nhất của trang này.
