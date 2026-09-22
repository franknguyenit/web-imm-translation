# B6 — Soát bản xứ + chuyên môn · viec/2026-09-22-ov-canada

Đọc bản tiếng Anh trước (không nhìn cột vi), sau đó đối chiếu chuyên môn trên `song-ngu.tsv`.
Tổng thể: giọng đúng kiểu cố vấn private-wealth, thuật ngữ Canada (PNP, Start-Up Visa, designated
organization, settlement funds, provincial nomination) dùng đúng nghề, C$ nhất quán trong văn xuôi.
Có **1 lỗi nặng về tuân thủ** (RCIC bị nói thành luật sư) và vài chỗ còn "mùi dịch".

## Bảng lỗi

| Mã đoạn | Vấn đề | Mức nặng |
|---|---|---|
| s346 | **RCIC bị dịch/ghi thành "Licensed Canadian immigration lawyers".** RCIC = *Regulated Canadian Immigration Consultant*, do CICC quản lý, **không phải luật sư**. Ở Canada, xưng là luật sư khi không phải luật sư là vi phạm quy định hành nghề → rủi ro tuân thủ thật, không chỉ là lỗi chữ. (Nguồn Việt s346 cũng viết sai như vậy — xem mục "cần CEO".) Sửa và báo CEO. | **NẶNG** |
| s296 | Câu này là **ghi chú nội bộ lọt ra trang khách đọc**: "…and are not presented as open to new applications" là lời dặn người dựng trang, không phải câu nói với nhà đầu tư. Viết lại cho người đọc. | vừa |
| s238 | Tiêu đề cột bảng so sánh "The minimum investment" — thừa mạo từ, lệch với các cột khác ("Minimum net worth", "Management experience"). Tiêu đề cột tiếng Anh không dùng "The". | vừa |
| s064, s129, s160, s193 | "is a mandatory requirement" — thừa (mandatory + requirement). Tiếng Anh bản xứ: "is required". | vừa |
| s050, s083, s115, s148, s181, s219 | "English at the level of IELTS General 4.0/5.0": (a) "at the level of" là lối dịch, nguồn nói "tương đương" → "equivalent to"; (b) tên kỳ thi chính thức là **IELTS General Training**, "IELTS General" là cách gọi tắt. Ô bảng so sánh (s247, s253…) để nguyên "IELTS 4.0" vì phải ngắn. | vừa |
| s005 | Lặp gốc từ "investor… investors" ngay câu hero; câu dài, có "— a path to" nối lỏng. Viết gọn, vẫn giữ nguyên cụm từ khoá chính "canada investor visa". | vừa |
| s318 | Gạch đầu dòng mở bằng "So your file meets…" — nối kiểu khẩu ngữ, lạc giọng trong danh sách năng lực. | nhẹ |
| s017 | "…2 main groups: provincial entrepreneur streams, and the Start-Up Visa…" — dấu phẩy trước "and" khi chỉ có hai vế là sai. | nhẹ |
| s044, s078, s109, s143, s175, s214 | "12 – 15" dùng en dash **có khoảng trắng**, trong khi s300/s304 viết "12–15 months" sát. Style guide mục 5 để dạng sát. Không sửa vì các ô này là stat-row bám đúng bố cục nguồn — nêu để CEO/team thống nhất một kiểu. | nhẹ |
| s038–s039, s072–s073… | Stat-row ghi đơn vị "CAD" tách riêng, còn văn xuôi và bảng so sánh dùng "C$" — hai cách viết tiền trên cùng trang. Do cấu trúc trường của template (label/value/unit), giữ nguyên; nêu để biết. | nhẹ |

### Không phải lỗi (đã kiểm, để khỏi soát lại)
- s201, s217 có cờ `#bo-qua-so` — cố ý, đúng dạng ngày Mỹ.
- Tên chương trình và cơ quan: Provincial Nominee Program (PNP), Start-Up Visa, designated organization,
  settlement funds, provincial nomination letter, Investment Migration Council (IMC) — dùng đúng.
- s227 "Former benefits" + s228 chia thì quá khứ cho chương trình đã đóng: xử lý đúng và chuyên nghiệp.
- s333 (hoàn phí), s124/s188 ("under the applicable rules") đã làm mềm đủ theo style guide mục 3.
- s314 bỏ "gia đình Việt Nam" → "client families": đúng style guide mục 4.

## Bản sửa DÀI HƠN bản cũ (cân nhắc ngân sách ký tự)
Không có bản sửa nào rơi vào `.stat-row-label`, `.stat-row-value` hay ô bảng so sánh. Hai dòng dài thêm đều là `li`
(danh sách gạch đầu dòng, xuống dòng tự do):
- s050/s083/s115/s148/s181/s219: 41 → 48 ký tự ("English equivalent to IELTS General Training 4.0").
- s318: 58 → 65 ký tự.
- Riêng s346 nằm trong stat-row: bản sửa **ngắn hơn** (37 → 30 ký tự). Nếu team muốn đủ nghĩa hơn thì dùng
  "Regulated Canadian immigration consultants" (42 ký tự, dài hơn bản cũ 5 ký tự) — chọn bản ngắn cho an toàn bố cục.

## Mâu thuẫn / dữ kiện của NGUỒN — cần CEO quyết (KHÔNG tự sửa vào bản dịch)
1. **s345–s346 (gốc Việt):** nguồn ghi nhãn "RCIC" nhưng giá trị là "Luật sư di trú Canada cấp phép". RCIC là
   *chuyên viên tư vấn di trú được quản lý*, không phải luật sư. Bản dịch đã sửa cho đúng nghề và đúng luật hành nghề
   Canada; **trang tiếng Việt nên sửa theo**. s317 ("luật sư và chuyên viên di trú… cấp phép RCIC") thì viết đúng.
2. **Nova Scotia — 100.000 hay 150.000 CAD:** thẻ chương trình (s032, s169) và huy hiệu "Lowest investment" (s167)
   ghi *từ 100.000 CAD*, còn bảng so sánh (s256) ghi *từ 150.000 CAD (tại Halifax)*. Hai con số đều có trong nguồn
   (s183/s184 giải thích trong/ngoài Halifax) nhưng đặt cạnh nhau dễ gây hiểu nhầm. Đề nghị bảng so sánh ghi
   "From C$100,000 (outside Halifax)" hoặc thẻ ghi rõ điều kiện — chờ CEO chốt.
3. **Saskatchewan thiếu một ô trong bảng so sánh:** các dòng khác có 6 ô (chương trình · đầu tư · tài sản ·
   kinh nghiệm · tiếng Anh · trạng thái); riêng Saskatchewan (s273–s277) chỉ có 5 — **thiếu ô tiếng Anh**. Lỗi của
   nguồn, không phải của bản dịch. Cần CEO/team bổ sung (hoặc để "—").
4. **Điều kiện quốc tịch (s060, s092, s125, s156):** nguồn viết "sau 5 năm có PR mới xin quốc tịch". Luật Canada tính
   theo **1.095 ngày cư trú thực tế trong 5 năm gần nhất**, không phải "đủ 5 năm PR". Đã dịch đúng nguồn, chờ CEO.
5. **Start-Up Visa — s224:** nguồn nói đương đơn và tổ chức bảo trợ nắm "tối thiểu 50%" quyền biểu quyết. Quy định
   IRCC thường diễn đạt là **trên 50%** (và riêng đương đơn tối thiểu 10%). Đã dịch đúng nguồn, chờ CEO.
6. **Mốc đóng chương trình (s201, s217):** 19/12/2025 (work permit) và 01/01/2026 (PR). Không tự kiểm chứng, đã giữ
   nguyên theo nguồn — CEO xác nhận lại trước khi đăng vì đây là dữ kiện dễ lỗi thời nhất trang.
7. **s336 "doanh nghiệp phi lợi nhuận" → "not-for-profit business":** dịch sát nguồn, nhưng một công ty tư vấn có thu
   phí tự nhận "not-for-profit" là tuyên bố dễ bị soi ở thị trường quốc tế. Nếu ý CEO là "doanh nghiệp tạo tác động
   xã hội" thì nên đổi thành "social enterprise". Chờ CEO, chưa sửa.
8. **Từ khoá chính "canada investor visa" (ngoài phạm vi B6, nêu để biết):** Canada hiện **không còn** diện
   "investor visa" liên bang (IIP đóng 2014); người trong ngành gọi là *business immigration / entrepreneur streams*.
   Từ khoá vẫn hợp lý về mặt tìm kiếm, nhưng nên tránh để thân bài ngụ ý đang tồn tại một loại visa tên như vậy —
   bản sửa s005 đã gỡ bớt ngụ ý đó mà vẫn giữ nguyên cụm từ khoá.
