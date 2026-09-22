# Báo cáo dịch — Axis Istanbul (Thổ Nhĩ Kỳ)

**Nguồn:** `template-bds-imm/du-an/tho-nhi-ky__axis-istanbul/dist/…html` (HTML thuần của theme).
Trang Việt: https://immgroup.com/quoc-tich-tho-nhi-ky-turkey/quoc-tich-tho-nhi-ky-du-an-axis-istanbul/
**Khối lượng:** 148 đoạn · 1.168 chữ nguồn · bộ nhớ dịch khớp sẵn 64 đoạn (43% — nhờ trang nước Thổ Nhĩ Kỳ).

## 1. Từ khoá
- **Chính:** `turkey citizenship by investment real estate` (6/6 thị trường). Trang nước
  `2026-09-22-quoc-tich-tho-nhi-ky-turkey` đã lấy cụm trần ⇒ trang dự án lấy nhánh **real estate** — đúng mẫu
  đã dùng cho Secret Bay và InterContinental Grenada.
- **Phụ:** `turkish citizenship by real estate investment` · `turkish passport by real estate investment` ·
  `minimum investment in turkey for citizenship` · `buy property in istanbul` · `buy apartment in istanbul` ·
  `turkey istanbul property for sale`.
- ⚠ **Xếp hạng theo độ phủ gợi ý Google 6 thị trường — CHƯA CÓ SỐ LƯỢT TÌM** (cần Ahrefs/Semrush).
- 5 kết quả đầu là **hãng luật và hãng tư vấn** (Henley & Partners, Legal 500, Global Citizen Solutions,
  getgoldenvisa), **không phải cổng rao vặt** như mảng Síp ⇒ đối thủ là các bài hướng dẫn, nên meta title đặt
  **cụm từ khoá trước, tên dự án sau**. Nguồn ngoài xác nhận ngưỡng **US$400,000**, giữ **3 năm**, sau 3 năm
  bán được mà vẫn giữ quốc tịch — **khớp nguồn IMM**.

## 2. Đoạn viết lại lớn
- Hero (s003), H2 (s017, s030, s048, s067, s090, s094, s102, s142), CTA **viết lại**; bảng thông số, lộ trình,
  8 khối lợi thế **dịch sát**.

## 3. Đoạn đã bỏ hoặc viết chung vì ngữ cảnh Việt
- **s119 "Có thể giữ tên VIỆT NAM hoặc chọn tên mới theo bảng chữ cái Thổ Nhĩ Kỳ"** → viết chung:
  `You can keep your current name or take a new one in the Turkish alphabet…` (style guide mục 4).
- Ngoài ra **không bỏ đoạn nào**; 148/148 đoạn đều được dịch.

## 4. Quy đổi tiền
- **Không có phép quy đổi nào** — giữ nguyên `US$400,000` và `US$284,000` (mức luật định và giá bán đều bằng USD).
- `ty-gia.json` chỉ để tra cứu: 1 USD = 25.970 VND · open.er-api.com, 22/09/2026.

## 5. Chỗ đã làm mềm vì tuân thủ — 5 lỗi NẶNG B6 bắt
1. **s140 (NẶNG, cả hai agent bắt) — trang TỰ ĐÁ NHAU.** s124 nói "Không yêu cầu cư trú", s140 nói "cư trú tối
   thiểu 3 năm". Bản Anh nay nói rõ: *"Under US rules, an investor who obtained citizenship by investment must
   show at least 3 years of residence in Türkiye before applying for an E-2 visa. **This is a US condition, not
   a Turkish one.**"* — và s124 thành "No requirement to live in Türkiye **before or after you apply**".
   (Cơ sở: AMIGOS Act của Mỹ, đã ghi trong bảng thuật ngữ từ việc visa E-2 18/09.)
   ⚠ Đã **bỏ chữ "continuous"** mà bộ nhớ dịch tự thêm — nguồn không có.
2. **s126 "Không giới hạn quốc tịch đương đơn"** → `Open to applicants of most nationalities, subject to Turkish
   law.` Thổ Nhĩ Kỳ **thực tế có hạn chế** với một số quốc tịch; để trần là lời hứa tuyệt đối sai thực tế.
3. **s136 "Quốc tịch vĩnh viễn, không ràng buộc duy trì thêm"** → nói rõ **không phải duy trì THÊM ĐẦU TƯ**
   (`does not have to be maintained through further investment`), không phải "không có nghĩa vụ nào".
4. **s093** bán E-2 không điều kiện → thêm `subject to US requirements`; bỏ "an toàn" và "vô giá";
   `a store of value held in US dollars`.
5. **s078 "Cam kết bất động sản không có tranh chấp"** — câu không có chủ thể, đọc như **IMM** bảo đảm.
   Đã nêu rõ chủ thể: `The developer undertakes that…`.
- Thêm: **s107 "110 quốc gia" → `110 destinations`** (Hồng Kông không phải quốc gia) · **s132 "Không yêu cầu
  tiếng Anh" → `No language requirement.`** (câu "no English requirement" trên một trang tiếng Anh đọc phi lý,
  và Thổ Nhĩ Kỳ không đòi bài kiểm ngôn ngữ nào) · **s033** viết lại để người đọc thấy rõ khoảng cách
  **US$284,000 (giá căn rẻ nhất) vs US$400,000 (ngưỡng quốc tịch)**.

## 6. ⚠ Lỗi này LẶP ở trang nước Thổ Nhĩ Kỳ đã bàn giao
`s107`, `s136`, `s140` là **bộ nhớ dịch 100% bê từ trang `quoc-tich-tho-nhi-ky-turkey`** ⇒ ba lỗi trên
**đang có trên trang nước đã bàn giao**. Lệnh `nap` của bước B10 đã ghi đè bộ nhớ dịch bằng bản sửa
(14 câu được cập nhật), nên trang sau sẽ lấy đúng; **nhưng trang nước cần sửa tay.**

## 7. Góp ý đã BÁC và lý do
- **B6 đề nghị nhãn chip `About Sur Yapı` (s013):** **bác** — giữ `Developer Sur Yapı` cho khớp mẫu
  `Developer Cybarco` / `Range Developments` của 12 trang dự án khác.
- **B5 đề nghị `A route to citizenship` (s015):** **bác** — `A path to citizenship` là bộ nhớ dịch 100% đang
  dùng ở **10 trang đã bàn giao**. Ghi lại như **ứng viên sửa đồng loạt**.
- **B5 đề nghị đổi `assess your eligibility` (s144):** **bác** — cụm dùng chung toàn bộ trang dự án.
- **B5 đề nghị s140 "hold Turkish citizenship for at least 3 years":** **bác** — nguồn nói **cư trú**
  (residence), không phải giữ quốc tịch; lấy bản của B6 nhưng bỏ chữ "continuous".

## 8. Điều nguồn có vẻ sai hoặc lỗi thời — CEO xác nhận trước khi đăng
1. **s126 "Không giới hạn quốc tịch đương đơn"** — nghi nguồn nói quá (xem mục 5.2). Bản Anh đã rào.
2. **s081 "ưu đãi phí luật sư 5.000 USD"** — **không rõ là GIẢM 5.000 USD hay PHÍ LÀ 5.000 USD**.
   Bản Anh dịch theo nghĩa thứ hai (`a preferential legal fee of US$5,000`). CEO xác nhận.
3. **s084 "Siêu Thương hiệu 2014–2015"** — danh hiệu **11 năm trước**, nguồn không ghi tổ chức trao.
4. **s091 "Tiến độ dự án: Đang cập nhật…"** trong khi trang đang chào bán.
5. **s107 "hơn 110"** không ghi ngày đối chiếu.
6. **s033 vs s045:** căn rẻ nhất **US$284,000 KHÔNG đủ** ngưỡng quốc tịch — nên nêu rõ hơn trong bản Việt.

## 9. Slug cũ cần chuyển hướng 301
- **Không có.** Slug đề xuất: `axis-istanbul-turkey-citizenship-by-investment-real-estate`.

## 10. Kết quả cửa 0
- **XANH · 0 lỗi chặn · 17 cảnh báo** (148/148 đoạn đã dịch).
- Giải trình: 8 cảnh báo chữ "lộ trình" (chọn `route`/`path` thống nhất toàn loạt) · 4 cảnh báo "Thổ Nhĩ Kỳ"
  gợi ý `Türkiye|Turkey` trong khi bản Anh dùng **tính từ `Turkish`** — đúng bảng thuật ngữ · s118 "nhập tịch"
  và s141 "định cư" là gợi ý không khớp ngữ cảnh · s084 "bản Anh có số 2 không có ở nguồn" (nguồn viết chữ
  "hai năm liên tiếp", bản Anh viết `2014 and 2015`) · 2 cảnh báo SEO (H1 là **tên dự án**; thân bài không chứa
  nguyên cụm từ khoá).
- **Cửa kiểm ráp ngược:** nhét bản Việt → giống tệp gốc **từng byte ✓**; bản Anh thay đủ **151/151** đoạn,
  vét thêm **36 chỗ** chữ ngoài bộ rút.

## 11. Nhãn bắt buộc
**CHƯA QUA SOI ĐỘC LẬP.**
