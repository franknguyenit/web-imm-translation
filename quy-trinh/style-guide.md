# Style guide — IMM Group English website

Bản 1 · 17/09/2026. Sửa khi CEO chốt cách viết mới; mỗi thay đổi ghi ngày + nguyên văn CEO ở cuối tệp.

## 1. Người đọc và giọng

- **Người đọc:** nhà đầu tư quốc tế có tài sản lớn (HNWI), gia đình muốn quốc tịch/cư trú thứ hai, người được
  giới thiệu từ ngân hàng tư nhân hoặc family office. Không mặc định họ là người Việt, đang sống ở Việt Nam, hay có
  tài sản ở Việt Nam.
- **Khẩu hiệu thương hiệu tiếng Anh đang dùng:** "Wealth Management & Global Citizenship".
- **Giọng:** cố vấn điềm tĩnh, chính xác, kiểu ngân hàng tư nhân. Tự tin nhưng không hô hào. Nói với
  người đọc bằng "you / your family". Công ty tự xưng "IMM Group" hoặc "we".
- **Bỏ lối quảng cáo kiểu Việt:** "quyền lực", "số 1", "hàng đầu", "siêu", "cơ hội vàng", "đừng bỏ lỡ", nhiều dấu
  chấm than, VIẾT HOA CẢ CÂU → thay bằng dữ kiện ("visa-free or eVisa access to 180+ destinations").

## 2. Dịch sát hay viết lại (transcreation)

| Dịch SÁT — giữ nghĩa từng ý, không thêm bớt | VIẾT LẠI — giữ ý chính, đổi cách nói cho người bản xứ |
|---|---|
| Điều kiện chương trình, số tiền, thời hạn, số việc làm | H1, khối mở đầu (hero), tiêu đề mục |
| Tên đơn, mẫu, cơ quan, luật (I-526E, RIA 2022, USCIS) | Nút kêu gọi hành động (CTA) |
| Quy trình pháp lý, câu hỏi thường gặp mang tính luật | Gạch đầu dòng lợi ích |
| Cảnh báo rủi ro, tuyên bố miễn trừ trách nhiệm | Câu dẫn, câu chuyển đoạn, lời chứng thực (giữ dữ kiện) |

Viết lại vẫn **không được** thêm dữ kiện, lời hứa hay con số mà nguồn không có.

## 3. Tuân thủ — cấm tuyệt đối (máy chặn qua `thuat-ngu.csv` loại `cam`)

- Không hứa chắc kết quả: "guaranteed approval / green card / citizenship / returns", "100% success".
- Không nói "risk-free", "completely safe". Với EB-5: tiền đầu tư **phải chịu rủi ro** ("at risk") theo luật Mỹ.
  Nguồn viết "an toàn" thì dịch thành "structured to manage risk", "with capital protection features", …
- Không nói hộ luật sư: giữ "consult an independent immigration attorney / tax advisor" nếu nguồn có.
- Thông tin luật có mốc ngày thì giữ mốc ("as of May 22, 2026").
- Nguồn có câu hứa hẹn quá mức → viết lại cho đúng chuẩn và **liệt kê trong báo cáo** mục "Đã làm mềm".

## 4. Khách quốc tế, không phải khách Việt

| Nguồn | Cách xử lý |
|---|---|
| "khách hàng Việt Nam", "nhà đầu tư Việt" | "clients", "investors", "families" |
| "tại Việt Nam", "ở Việt Nam" (thủ tục) | "in your home country", "in your country of residence" |
| "lý lịch tư pháp số 2 tại Sở Tư pháp" | "police clearance certificate from your country of residence" |
| "quy đổi khoảng X tỷ đồng" đi kèm số USD/EUR | bỏ phần tiền Việt, ghi `#bo-qua-so: số VND chỉ nhắc lại số USD` |
| Thuế Việt Nam, chuyển tiền theo Ngân hàng Nhà nước, công chứng ở Việt Nam, Tết, sổ đỏ | viết chung ("local tax rules", "outbound transfer regulations") hoặc bỏ với `#bo:` |
| Hotline, địa chỉ văn phòng Việt Nam trong thân bài | giữ số dạng quốc tế +84…, hoặc thay bằng CTA chung |
| Dữ kiện công ty (thành lập 2005 tại Việt Nam, trụ sở) | giữ, ghi `#viet-nam-hop-le` |
| Câu chuyện khách có tên người Việt | "one of our clients", không tự bịa quốc tịch khác |

Mọi đoạn bỏ hoặc viết chung đều liệt kê trong báo cáo.

## 5. Số, tiền, ngày

- **Tiếng Anh Mỹ** (color, program, naturalization, center) — kể cả trang về Úc, Canada, Anh, trừ **tên chính
  thức** (Significant Investor visa, Canadian "permanent residence", UK "Innovator Founder visa").
- Số: `800,000` · `2.5%` · `10 jobs` · dùng chữ số cho mọi số (kể cả 1–9) trừ khi đứng đầu câu.
  ⚠ Nguồn Việt: `800.000` = 800 nghìn, `2,5` = 2.5.
- Khoảng: `2–3 years` (gạch ngang dài en dash). Tuổi: `under 21`, `aged 18–21`.
- Ngày: `September 30, 2026`. Không viết `30/09/2026`, không `30th`.
- Tiền USD: `US$800,000` (mọi lần, vì người đọc đa quốc gia). Triệu: `US$1.2 million`.
- Tiền khác: `€500,000` · `£2 million` · `A$5 million` · `C$` · `NZ$` · `S$`.
- **Quy đổi:**
  1. Tiền **VND** → luôn đổi sang USD theo `ty-gia.json` của việc; viết `approximately US$20,000`.
     Làm tròn: dưới 10.000 USD → hàng trăm; dưới 1 triệu USD → hàng nghìn; từ 1 triệu → 1–2 chữ số thập phân triệu.
  2. Mức vốn **luật định** bằng EUR, AUD, CAD… → **giữ tiền gốc**; chỉ thêm `(approximately US$X)` ở lần nhắc đầu
     nếu giúp người đọc. Không bao giờ thay tiền luật định bằng USD.
  3. Ghi mọi phép quy đổi vào báo cáo: số gốc · tỷ giá · nguồn tỷ giá · ngày.

## 6. Tên riêng và định dạng

- Tên chương trình, cơ quan, mẫu đơn: dùng tên tiếng Anh chính thức; lần đầu viết đủ kèm viết tắt
  ("Targeted Employment Area (TEA)").
- Tên người Việt trong đội ngũ: viết **không dấu** như trang `/en/our-people/` (Nguyen Huu Hung).
- H1: Title Case. H2–H6: Sentence case. Không viết hoa cả dòng (nguồn Việt hay viết hoa hết).
- Giữ đúng số liên kết và chỗ in đậm như nguồn. Liên kết nội bộ trỏ trang Việt → thay bằng trang `/en/` tương
  ứng nếu có (kiểm bằng thẻ hreflang), không có thì giữ và ghi vào báo cáo.
- CTA: "Book a consultation" · "Speak with an advisor" · "Download the guide".

## 7. SEO on-page (chuẩn máy kiểm)

- `meta_title` 30–60 ký tự, chứa **nguyên cụm** từ khoá chính, kết bằng `| IMM Group` nếu còn chỗ.
- `meta_description` 120–160 ký tự, có từ khoá chính + một lợi ích + lời mời hành động.
- `slug` chữ thường không dấu, gạch nối, ≤75 ký tự, chứa chữ chính của từ khoá, **tiếng Anh** (không giữ slug
  tiếng Việt như `/en/visa-dinh-cu-my-eb5/`). Trang tiếng Anh cũ đã có slug khác → ghi trong báo cáo cần
  **chuyển hướng 301** từ slug cũ.
- Đúng một H1; từ khoá chính trong H1 và 150 chữ đầu; từ khoá phụ rải ở H2 một cách tự nhiên; mật độ ≤2,5%.
- Alt ảnh: tả cái có trong ảnh, ≤125 ký tự, chỉ chèn từ khoá khi đúng nội dung ảnh.

## 8. Nhật ký thay đổi style guide

- 17/09/2026 — Bản 1 dựng theo brief CEO: tiếng Anh cho khách quốc tế, đổi tiền sang USD, bỏ ngữ cảnh khách Việt.
- 17/09/2026 — CEO chốt tiếng Anh Mỹ + `US$`, một bản chung mọi thị trường (nguyên văn: "đồng ý 1,2").
