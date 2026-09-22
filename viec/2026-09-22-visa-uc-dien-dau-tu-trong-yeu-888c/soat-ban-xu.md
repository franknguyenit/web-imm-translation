# B6 — Soát bản xứ + chuyên môn · 888C (Significant Investor stream)

Bước 1 đọc **chỉ cột `en`**; bước 2 kiểm chuyên môn (immi.homeaffairs.gov.au, NSW Government, bối cảnh xác minh
22/09/2026). 888 vẫn mở cho người đang giữ 188 ⇒ thì hiện tại đúng, không đề nghị đổi sang quá khứ.
Đây là trang có **nhiều lỗi nhất** trong bộ ba, và là trang duy nhất có **hai lỗi kỹ thuật chặn xuất bản**.

## 1. Bảng lỗi

| Mã đoạn | Vấn đề | Mức | Đề xuất |
|---|---|---|---|
| s002 | **H1 VIẾT HOA CẢ DÒNG**: "AUSTRALIAN PERMANENT RESIDENCE — {1}888C{/1} SIGNIFICANT INVESTOR VISA". Vi phạm thẳng style guide mục 6 ("H1: Title Case … Không viết hoa cả dòng — nguồn Việt hay viết hoa hết"): nguồn Việt là "THƯỜNG TRÚ NHÂN ÚC — VISA 888C" và bản Anh **bê nguyên kiểu viết hoa**. Ngoài ra H1 này **không khớp** tiêu đề trang s001 ("Australia 888C Significant Investor Visa") và **không theo mẫu** "Australia 888A/888B/888C …" mà hai trang anh em đều dùng. Với người đọc HNWI, một dòng H1 toàn chữ hoa đọc như quảng cáo rao vặt — ngược hẳn giọng ngân hàng tư nhân. | **nặng** | "Australia {1}888C{/1} Significant Investor Visa" (khớp s001 và hai trang anh em). Nếu CEO muốn giữ ý "thường trú nhân" của nguồn thì phương án hai: "Australian Permanent Residence — {1}888C{/1} Significant Investor Visa" (chỉ sửa kiểu chữ). **Giữ nguyên thẻ {1}888C{/1} ở cả hai phương án.** |
| s104 | **Lỗi ký tự dấu ngoặc kép** — giá trị trong `song-ngu.tsv` đang là: `"There is no such thing as ""connections"" getting … the evidence."` Có một cặp ngoặc kép **bọc cả câu** và ngoặc kép **nhân đôi** quanh *connections* (tàn dư escape kiểu CSV). Lên trang sẽ hiện đúng như vậy. Nguồn Việt chỉ dùng nháy đơn `'quan hệ'`. Thêm nữa "no such thing as connections **getting** an application prioritized" là cấu trúc danh động từ vụng. | **nặng** | `There is no such thing as using "connections" to have an application prioritized or the requirements relaxed — that would be against Australian law. Applications are decided on the data and the evidence.` ⚠ Sau `dien` + `ghep`, luồng chính **phải mở lại tệp bàn giao kiểm mắt** xem cặp ngoặc kép có bị nhân đôi lại không; nếu có thì đổi sang nháy đơn `'connections'` cho khớp nguồn. |
| s036 | H3 **"A commitment to stay in the state"** — sai cả hai vế. (a) Nguồn Việt là "Cam kết gắn bó với **Úc**", không phải "with the state". (b) Sai chuyên môn: **Commitment to State** của 888C là cam kết **tiếp tục hoạt động đầu tư/kinh doanh** ở bang đã bảo lãnh, **không** phải cam kết cư trú tại chỗ — dịch thành "stay in the state" biến một điều kiện kinh doanh thành một điều kiện cư trú, và mâu thuẫn ngay với s037 ở dòng dưới ("investing or doing business"). | **nặng** | "**A commitment to Australia**" |
| s016 | Gạch đầu dòng **lặp y hệt từng chữ** tiêu đề s015: cả hai đều là "Freedom to travel in and out of Australia". Đọc như lỗi dựng trang. (Hệ quả phụ của việc bỏ "Việt Nam – Úc" theo style guide mục 4 — cách xử lý đúng, nhưng phải viết khác đi.) | vừa | "**Travel in and out of Australia freely as a permanent resident.**" (cùng dữ kiện, khác chữ) |
| s012 | "in any **state** of Australia" — **rơi mất "or territory"**. Úc có ACT và NT; bảng thuật ngữ có dòng riêng "bang hoặc vùng lãnh thổ → state or territory" và cả 888A lẫn 888B ở cùng vị trí s012 đều viết đủ. Nguồn Việt là "mọi bang của Úc" nên đây là chỗ bản Anh nên viết đủ cho đúng. | vừa | "in any **state or territory** of Australia" |
| s025, s032 | "The applicant needs **40 days or more per year**" — không nói 40 ngày **ở đâu**. Cả hai đoạn đều thiếu "in Australia"; đây là điều kiện đặc trưng nhất của 888C (và là lý do HNWI chọn diện này) nên câu cụt làm mất giá trị bán hàng. | vừa | "The applicant needs **to spend 40 days or more a year in Australia**, or the spouse or partner 180 days or more a year …" |
| s014 | "Medicare, social security, and public education, subject to the residence conditions **— available once the 888C is granted.**" Câu không có động từ chính, và gạch ngang nối một cụm bổ nghĩa vào một danh sách trống chủ ngữ. | vừa | "Medicare, social security, and public education **are available**, subject to the residence conditions, once the 888C is granted." |
| s018 | Câu cụt không động từ chính ("A path to Australian citizenship once …"), và "**citizenship rights are assessed** separately" sai kết hợp — cái được xét là **điều kiện/tư cách**, không phải "quyền lợi". | vừa | "A path to Australian citizenship **opens** once the physical residence requirements and the other citizenship criteria are met; **citizenship is assessed separately from PR**." |
| s005 | "The whole family … **is granted PR as well.**" Thì hiện tại trần = hứa kết quả (style guide mục 3). Hai trang anh em ở cùng vị trí đều rào bằng "can be granted". | vừa | "…**can be granted PR at the same time.**" |
| s037 | "An intention to **go on investing**" — tật "go on + V-ing" (giống 888A s008/s023). | vừa | "An intention to **continue investing** or doing business in Australia (the Commitment to State)." |
| s095 | "At the 188 (provisional) stage **there is no Medicare**" — khẳng định tuyệt đối. Người giữ 188 mang quốc tịch nước có **Reciprocal Health Care Agreement** với Úc (Anh, Ireland, Ý, Bỉ, Hà Lan, Na Uy, Thuỵ Điển, Slovenia, Malta, New Zealand, Phần Lan) **vẫn ghi danh Medicare được**. Vì trang nhắm Anh và Nam Phi trong danh sách thị trường, đây là rủi ro tuân thủ thật. 888B s088 đã rào bằng "normally". | vừa | "At the 188 (provisional) stage there is **normally no Medicare access**, so private health cover is needed." |
| s044 | "The 888C visa (permanent residence) **is granted where the application is approved**" — vòng tròn logic trong tiếng Anh ("được cấp ở chỗ được chấp thuận"). Tiếng Việt "nhận visa nếu hồ sơ được chấp thuận" thì bình thường, tiếng Anh thì không. | vừa | "**You receive the 888C visa, which grants permanent residence, once the application is approved.**" |
| s086 | "The timing of any withdrawal **should follow advice**" — "follow advice" không có chủ thể, đọc mơ hồ (theo lời khuyên của ai?). | nhẹ | "should **be planned with your advisor**, so that it does not affect the application." |
| s073 | "a source-of-funds explanation that is **not watertight**" — "watertight" là khẩu ngữ Anh-Anh, lệch giọng private wealth. | nhẹ | "that is **not fully documented**" |
| s069 | "**In return**, the level of investment is higher" — "in return" đọc như một cuộc đổi chác. Nguồn "Đổi lại" đúng nghĩa là sự đánh đổi. | nhẹ | "**The trade-off is a higher level of investment than for** the 188A and the 188B." |
| s082 | "**Eligible assets:** real estate, …" — cụm danh từ + hai chấm, trong khi 888B s076 cùng nội dung là câu đủ. Lệch giữa hai trang. | nhẹ | "Eligible assets **include** real estate, …" |
| s092 | "**From the grant of the 188 visa,** children can attend…" — mở câu bằng danh từ hoá nặng nề. | nhẹ | "**Once the 188 visa is granted,** children can attend public school from primary through senior secondary, …" |
| s101 | "**about** 4 years of lawful residence" — rào một con số **luật định** bằng "about" đọc như không nắm chắc luật. Nguồn có "khoảng" nên vẫn phải rào, nhưng "generally" là cách rào đúng đăng ký văn phong cho quy định. | nhẹ | "**generally** 4 years of lawful residence" |
| s077 | Lặp ý: "**rather than because capital was withdrawn**" và "**and no capital was withdrawn early**" nói cùng một điều hai lần trong một câu. Lặp có trong nguồn Việt. | nhẹ | **Ghi nhận, không sửa** — cắt vế nào cũng là bỏ nội dung nguồn. |
| Toàn trang | **"PR" viết tắt dùng dày đặc** (s004, s005, s014, s018, s020, s021, s095, s101) trong khi 888A và 888B **không dùng lần nào**, đều viết "permanent residence". Đã định nghĩa ở s004 nên không sai, nhưng lệch hẳn giọng hai trang anh em trong cùng một bộ liên kết chéo. | nhẹ | luồng chính quyết ở cấp bộ ba trang; nếu thống nhất thì đổi phần lớn "PR" trong thân bài về "permanent residence", giữ "PR" ở s004 (lần định nghĩa) và trong FAQ ngắn |
| Toàn trang | **Ngôi kể** ngôi ba ("the applicant", "investors", "the family") ở hero và khối quyền lợi, ngược style guide mục 1 ("you / your family"). Giống 888A và 888B ⇒ là quyết định cấp bộ ba trang. | vừa | luồng chính quyết chung cho cả 3 trang |

**Đúng, không sửa:**
- **`Commitment to State`** ở s037 — giữ đúng cách viết hoa theo dòng `goi-y` của bảng thuật ngữ. Chỉ H3 s036 sai.
- **`second instalment visa application charge`** (s089) — đúng tên Home Affairs; giữ lối viết "instalment" (tên chính thức, style guide mục 6 cho phép ngoại lệ Anh Mỹ). `DoHA` viết đủ ở lần đầu — đúng.
- s026, s027 "**no points test**", "not a new points-tested application" — đúng: 188C/888C Significant Investor **chưa bao giờ** có thang điểm (khác 188A/188B cần 65 điểm). Xem mâu thuẫn ở mục 3.1.
- s072 "A fund investment is an **at-risk investment**", s078 "The investment is at risk", s074 "to **help manage** that risk" — tuân thủ đúng, không hứa bảo toàn vốn, không dùng "capital protection". Phần viết tốt nhất trang.
- s081 "to the same standard as in the U.S. and Canada" — giữ đúng (so sánh chuẩn hồ sơ, không phải ngữ cảnh khách Việt).
- s008 "has stopped accepting new expressions of interest" — dịch sát nguồn; xem mục 3.2.
- `police clearance certificate` (s035), `complying investment`, `Medicare`, `senior secondary` — đúng.

## 2. Đã làm mềm vì tuân thủ

1. s005 "is granted PR as well" → "**can be granted** PR at the same time" — bỏ giọng chắc chắn.
2. s095 "there is no Medicare" → "there is **normally** no Medicare access" — tránh khẳng định tuyệt đối sai với người mang quốc tịch nước có Reciprocal Health Care Agreement.
3. s101 "about" → "**generally**" — giữ mức rào của nguồn nhưng đúng đăng ký văn phong pháp lý.
4. Giữ nguyên s072, s074, s077, s078, s086 (rủi ro và rút vốn) — không làm nhẹ, đúng chỉ đạo brief.

## 3. Nguồn có vẻ sai hoặc lỗi thời — cần CEO xác nhận

*(Đã dịch đúng nguồn theo luật dự án mục 5; **không** đề xuất sửa bản dịch cho khớp quy định thật.)*

1. **s089 — "Tiếng Anh tốt giúp cộng điểm" MÂU THUẪN NGAY TRONG TRANG.** Nguồn Việt: "Tiếng Anh tốt giúp **cộng điểm** và tránh phí bảo trợ ngoại ngữ." Nhưng chính trang này nói **hai lần** rằng diện 188C/888C **không có thang điểm** (s026 "No points test", s069 "no points test"). Quy định thật đứng về phía s026/s069: Significant Investor stream không dùng points test; tiếng Anh chỉ liên quan tới **second instalment visa application charge** (áp cho đương đơn từ 18 tuổi không chứng minh được functional English). Vế "cộng điểm" của nguồn là **sai và tự mâu thuẫn**. Bản Anh giữ nguyên theo luật dự án — đề nghị CEO cho **bỏ vế "cộng điểm" trong bản Việt**. Đây là lỗi dễ bị cố vấn di trú bên mua bắt nhất trên cả ba trang.
2. **s008 — mốc đóng chương trình để trống.** Nguồn: BIIP "đã ngừng nhận hồ sơ **EOI** mới". Chính xác hơn: Bộ Nội vụ Úc **ngừng nhận đơn xin visa diện 188 từ 31/07/2024**, và các EOI còn tồn cũng đã bị huỷ. Nguồn **không nêu ngày** — với trang duy nhất trong bộ ba có nói tới việc chương trình đã đóng, thiếu mốc ngày làm dữ kiện mất giá trị.
3. **Nguồn không nêu con số A$5.000.000 ở bất kỳ đoạn nào.** Cả trang mô tả Significant Investor stream mà **không có con số định nghĩa chính nó**, kể cả ba cấu phần bắt buộc (≥A$1.000.000 quỹ VCPE; ≥A$1.500.000 quỹ quản lý cổ phiếu công ty mới niêm yết ASX; ≥A$2.500.000 khoản cân bằng). Hệ quả: trang **không có phép quy đổi tiền nào**, và nhà đầu tư quốc tế không so sánh được với 888A/888B (hai trang kia đều có số). Khoảng trống lớn nhất của trang.
4. **s092 — "con được học trường công" miễn phí.** Chính sách học phí trường công với người giữ **visa tạm trú** khác nhau theo bang (NSW và Victoria có thu phí với một số diện tạm trú). Nguồn đã rào "điều kiện cụ thể tùy bang" nên bản Anh giữ nguyên mức chắc chắn — nhưng câu mở đầu "Có." vẫn mạnh hơn thực tế.
5. **s098 — "age locked at the time the 188 visa is granted".** Mốc khoá tuổi con phụ thuộc nên được đối chiếu lại: thông thường tuổi được xét ở **thời điểm nộp và thời điểm quyết định** hồ sơ. Nguồn viết "khoá tuổi khi có visa 188" — cần CEO/cố vấn Úc xác nhận trước khi trang lên sóng, vì đây là dữ kiện gia đình dùng để lập kế hoạch.
6. **s014 — an sinh xã hội** không nêu newly arrived resident's waiting period (giống 888A, 888B).

## 4. Kết luận

- nặng: 3 · vừa: 9 · nhẹ: 7
- **Hai lỗi phải sửa trước khi bàn giao bất kể quyết định gì khác: s002 (H1 viết hoa cả dòng) và s104 (ngoặc kép nhân đôi).** Cả hai lên trang là thấy ngay.
- Không có cụm `cam` trong bản Anh. Khối rủi ro đầu tư (s070–s078) đạt chuẩn tuân thủ, không cần đụng.
- Mâu thuẫn nội tại **s089 ↔ s026/s069** là điểm chuyên môn nặng nhất của cả bộ ba trang — phải đưa lên CEO.
