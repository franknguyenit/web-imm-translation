# Báo cáo dịch — Visa Úc diện đầu tư trọng yếu 888C

- **Nguồn:** tệp JSON xuất từ ACF của trang `https://immgroup.com/dau-tu-dinh-cu-uc/visa-uc-dien-dau-tu-trong-yeu-888c/`
  (post_id 1057, `lang: vi`, template `content-product-2026.php`, xuất từ miền staging).
- **Khối lượng:** 104 đoạn · 1.136 chữ tiếng Việt. Dịch ở luồng chính bằng Opus, không chia mẻ.
- **Bộ nhớ dịch:** 27 đoạn có gợi ý.

## Từ khoá

- **Chính:** `888c significant investor visa`.
- **Phụ:** `subclass 888 significant investor stream` · `significant investor visa australia permanent residency` ·
  `siv 888c` · `188c to 888c` · `888 visa australia` · `australia significant investor visa requirements`.
- **Lý do:** viết tắt **888C** là từ khoá thật, do chính ngành dùng — NSW Government đặt URL
  `/visas-and-migration/business-and-investor-visas/subclass-888c`, Work Visa Lawyers "Significant Investor
  (SIV) – 888C", Gold Medal Visa "Significant Investor (888C) – Permanent". "Significant Investor stream" là
  tên chính thức trên immi.homeaffairs.gov.au.
- ⚠ **Xếp hạng theo độ phủ tiêu đề đối thủ qua WebSearch, CHƯA có số lượt tìm kiếm** (`tukhoa` bị chặn mạng).

## Đoạn viết lại lớn

- s002 H1: nguồn "THƯỜNG TRÚ NHÂN ÚC — VISA 888C" → "Australian Permanent Residence — **888C Significant
  Investor Visa**" (bỏ viết hoa cả dòng theo style guide mục 6; thêm tên chính thức của diện để có nguyên cụm
  từ khoá chính; giữ thẻ giữ chỗ `{1}…{/1}`).
- s004: thêm tên diện **888C** vào câu đầu để nguyên cụm từ khoá chính nằm trong 150 chữ đầu bài — nguồn chỉ
  ghi 188C. Đã gắn cờ `#bo-qua-so`.
- s036 H3: "Cam kết gắn bó với Úc" → "A commitment to Australia" (bản đầu viết "…to stay in the state", biến
  **Commitment to State** thành điều kiện cư trú và mâu thuẫn với s037).
- s044: "Nhận Visa 888C (thường trú nhân vĩnh viễn)" → "You receive the 888C visa, which grants permanent
  residence, once the application is approved" (tiếng Anh không lặp "permanent permanent").

## Đoạn đã viết chung vì ngữ cảnh khách Việt (style guide mục 4)

| Đoạn | Nguồn | Bản Anh |
|---|---|---|
| s015–s016 | "Tự do đi lại Việt Nam – Úc" · "Tự do đi lại giữa Việt Nam và Úc" | "Travel in and out of Australia freely as a permanent resident" — bỏ nhắc Việt Nam |
| s064 | "Những người Việt thành công trên đất Úc" | "Immigrant success stories in Australia" |

**Giữ nguyên** s081 "tương tự Mỹ, Canada" — đây là so sánh chuẩn mực hồ sơ, không phải ngữ cảnh khách Việt.
**Không bỏ hẳn đoạn nào.**

## Quy đổi tiền

- **Trang không có số tiền nào** (không AUD, không VND) ⇒ **không có phép quy đổi nào**.
- `ty-gia.json` (usd_moi_aud = 0.7121, chép từ việc Nova Scotia cùng ngày) chỉ để tra cứu và để qua cửa kiểm.

## Chỗ đã làm mềm vì tuân thủ

- s072, s078: giữ nguyên "at-risk investment" — không dùng "capital protection", không hứa thu hồi vốn.
- s074: "to help manage that risk" thay vì "giảm thiểu rủi ro" — không hứa loại bỏ rủi ro.
- s077: giữ đủ điều kiện của nguồn ("provided the investment was held for the required period and no capital
  was withdrawn early") — không hứa chắc được duyệt.
- s086: "should be planned with your advisor, so that it does not affect the application".
- s092: giữ rào của nguồn "the exact conditions are set by each state".
- s095: "there is normally no Medicare access" ở giai đoạn 188.
- s101: "generally 4 years of lawful residence" — không nói chắc một con số cứng.
- s104: giữ nguyên lời cảnh báo chống "quan hệ chạy hồ sơ" của nguồn.

## Góp ý của B5 / B6 đã bác

| Đoạn | Góp ý | Lý do bác |
|---|---|---|
| s002 | B6 đề nghị "Australia {1}888C{/1} Significant Investor Visa" (bỏ "Permanent Residence") | Nguồn H1 mở đầu bằng "THƯỜNG TRÚ NHÂN ÚC"; bảng thuật ngữ khoá "thường trú nhân" → phải có **permanent residence** trong H1. Lấy bản của B5, viết Title Case |

Đã nhận 20/20 đoạn sửa của B6 (trừ s002) và 1 đoạn của B5.

## Nguồn có vẻ sai hoặc lỗi thời — CEO xác nhận (đã dịch đúng nguồn, không tự sửa)

1. **s089 — "Tiếng Anh tốt giúp cộng điểm" MÂU THUẪN NGAY TRONG TRANG.** Chính trang này nói **hai lần** rằng
   diện 188C/888C **không có thang điểm** (s026 "No points test", s069 "no points test"). Quy định thật đứng
   về phía s026/s069: Significant Investor stream **không dùng points test**; tiếng Anh chỉ liên quan tới
   **second instalment visa application charge** (áp cho đương đơn từ 18 tuổi không chứng minh được
   functional English). → đề nghị **bỏ vế "cộng điểm" trong bản tiếng Việt**. Đây là lỗi dễ bị cố vấn di trú
   bên mua bắt nhất trong cả ba trang.
2. **s008 — mốc đóng chương trình để trống.** Nguồn ghi BIIP "đã ngừng nhận hồ sơ **EOI** mới". Chính xác hơn:
   Bộ Nội vụ Úc **ngừng nhận đơn xin visa diện 188 từ 31/07/2024**, EOI còn tồn cũng đã bị huỷ. Nguồn không
   nêu ngày — với trang duy nhất trong bộ ba có nói tới việc đóng, thiếu mốc làm dữ kiện mất giá trị.
3. **Nguồn không nêu con số A$5.000.000 ở bất kỳ đoạn nào** — cả trang mô tả Significant Investor stream mà
   thiếu con số định nghĩa chính nó, kể cả ba cấu phần bắt buộc (≥A$1.000.000 quỹ đầu tư mạo hiểm và cổ phần
   tư nhân; ≥A$1.500.000 quỹ quản lý cổ phiếu công ty mới niêm yết ASX; ≥A$2.500.000 khoản cân bằng).
   Hệ quả: nhà đầu tư quốc tế không so sánh được với 888A và 888B (hai trang kia đều có số).
4. **s092 — "con được học trường công".** Chính sách học phí trường công với người giữ **visa tạm trú** khác
   nhau theo bang (NSW và Victoria thu phí với một số diện tạm trú). Nguồn đã rào "tùy bang" nên bản Anh giữ
   nguyên, nhưng câu mở "Có." vẫn mạnh hơn thực tế.
5. **s098 — "tuổi chốt tại thời điểm cấp visa 188".** Thông thường tuổi con phụ thuộc được xét ở **thời điểm
   nộp và thời điểm quyết định** hồ sơ. Cần cố vấn Úc xác nhận trước khi trang lên sóng — gia đình dùng dữ kiện
   này để lập kế hoạch.
6. **s014 — an sinh xã hội:** nguồn không nêu *newly arrived resident's waiting period*.

## Liên kết và ID bài

- Tệp `.en.json` còn **16 liên kết** trỏ bản tiếng Việt trên miền `staging-41de-immgroupcom.wpcomstaging.com`.
- `post_id` trong tệp là **1057 — ID của trang tiếng Việt**. Không import vào ID này.

## Slug cũ cần chuyển hướng 301

- Chưa biết trang `/en/` cũ. Slug mới đề xuất: `888c-significant-investor-visa`. CEO xác nhận nếu đã có bản `/en/`.

## Kết quả cửa 0

- **XANH · 0 lỗi chặn · 14 cảnh báo** (12 gợi ý thuật ngữ đã quyết theo tên chính thức Úc + 2 cảnh báo CẤU TRÚC
  H1→H3 và H2→H4 do template `acf-product-2026` luôn sinh).
- Lần kiểm đầu: 2 lỗi chặn (dòng thuật ngữ `thang điểm di trú` của New Brunswick báo nhầm sang trang Úc — đã
  thu hẹp khoá thành `thang điểm di trú (New Brunswick)`; và chưa có `seo.json`) + 15 cảnh báo.
- B5 (Sonnet) bắt 1 nặng · B6 (Opus) bắt 3 nặng + 9 vừa + 7 nhẹ.

**Nhãn: chưa qua soi độc lập.**
