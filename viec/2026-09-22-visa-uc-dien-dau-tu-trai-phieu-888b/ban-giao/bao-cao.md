# Báo cáo dịch — Visa Úc diện đầu tư 888B

- **Nguồn:** tệp JSON xuất từ ACF của trang `https://immgroup.com/dau-tu-dinh-cu-uc/visa-uc-dien-dau-tu-trai-phieu-888b/`
  (post_id 1062, `lang: vi`, template `content-product-2026.php`, xuất từ miền staging).
- **Khối lượng:** 91 đoạn · 1.017 chữ tiếng Việt. Dịch ở luồng chính bằng Opus, không chia mẻ.
- **Bộ nhớ dịch:** 30 đoạn có gợi ý.

## Từ khoá

- **Chính:** `888b investor visa`.
- **Phụ:** `subclass 888 investor stream` · `888 visa australia` · `188b to 888b` ·
  `australia investor visa permanent residency` · `subclass 888 investor stream requirements` ·
  `business innovation and investment permanent visa`.
- **Lý do:** "Investor stream" là tên chính thức trên immi.homeaffairs.gov.au và được chính quyền bang dùng
  nguyên văn (Live in Melbourne: "…(subclass 888) – Investor stream"). Người tìm gõ số subclass, không gõ
  "golden visa". Đặt tên khớp nhãn liên kết của ba trang 188A/188B/188C cùng bộ.
- ⚠ **Chữ "trái phiếu" trong tên trang tiếng Việt KHÔNG phải từ khoá tiếng Anh** — từ 01/07/2021 diện 188B/888B
  dùng **complying investment** (quỹ đầu tư mạo hiểm, quỹ quản lý, khoản cân bằng), không còn là trái phiếu
  chính quyền bang. Bản Anh không dùng "bond investment visa".
- ⚠ **Xếp hạng theo độ phủ tiêu đề đối thủ qua WebSearch, CHƯA có số lượt tìm kiếm** (`tukhoa` bị chặn mạng).

## Đoạn viết lại lớn

- s002 H1: "VISA ÚC DIỆN ĐẦU TƯ 888B" → "Australia **888B** Investor Visa" (bỏ viết hoa cả dòng; giữ `{1}…{/1}`).
- s028 H2: "ĐIỀU KIỆN CHUYỂN LÊN VISA 888B" → "Requirements for moving from **188B** to 888B" — thêm "188B"
  cho song song với H2 cùng vai của trang 888A; đã gắn cờ `#bo-qua-so`.
- s032: xem mục viết chung bên dưới.

## Đoạn đã viết chung vì ngữ cảnh khách Việt (style guide mục 4)

| Đoạn | Nguồn | Bản Anh |
|---|---|---|
| s015–s016 | "Tự do đi lại Việt Nam – Úc" · "trong thời hạn thẻ thường trú" | Nói về quyền ra vào Úc, không nhắc Việt Nam; "thẻ thường trú" → **travel facility on the permanent visa** (Úc không cấp thẻ thường trú) |
| s032 | "Ngoại tệ AUD là mốc chính; **VND** chỉ nên dùng để tham khảo theo tỷ giá tại thời điểm" | "The thresholds are set in Australian dollars; any conversion into another currency is indicative only and moves with the exchange rate" — bỏ VND, giữ nguyên ý |
| s065 | "Những người Việt thành công trên đất Úc" | "Immigrant success stories in Australia" |

**Không bỏ hẳn đoạn nào.**

## Quy đổi tiền

- A$2,500,000 × 0.7121 = US$1,780,250 → viết **"approximately US$1.78 million"** (s030).
- Tỷ giá: `ty-gia.json`, `usd_moi_aud = 0.7121`, nguồn open.er-api.com (ExchangeRate-API), cập nhật 22/09/2026,
  chép từ việc `2026-09-22-dinh-cu-canada-tinh-bang-nova-scotia` cùng ngày.
- AUD là tiền luật định ⇒ **giữ A$**; s073 nhắc lại nên không lặp số USD.
- Trang **không có tiền VND** ⇒ không có phép đổi VND nào (s032 chỉ nói về nguyên tắc quy đổi, đã viết chung).

## Chỗ đã làm mềm vì tuân thủ

- s007, s018, s027, s091: "become eligible to apply for Australian citizenship" — **đủ điều kiện nộp**, không
  hứa được cấp quốc tịch.
- s045: giữ "Processing times depend on the individual case and on the Department of Home Affairs".
- s079: giữ nguyên độ mạnh của nguồn — "an at-risk investment; returns and the recovery of capital depend on
  how the investment performs and on the terms of the fund". Không dùng "capital protection".
- s082: giữ "subject to the rules and the investment terms that apply at that time" — không hứa chắc rút được vốn.

## Góp ý của B5 / B6 đã bác

| Đoạn | Góp ý | Lý do bác |
|---|---|---|
| s012 | B5 đề nghị bỏ "or territory" | Úc có cả state và territory (ACT, NT); và ba trang 188 cùng bộ đã dùng "state or territory" |
| s016 | B5 đề nghị "permanent resident card" | Úc không cấp thẻ thường trú — lấy bản của B6 |

Đã nhận 17/17 đoạn sửa của B6 và bác 2 đoạn của B5.

## Nguồn có vẻ sai hoặc lỗi thời — CEO xác nhận (đã dịch đúng nguồn, không tự sửa)

1. **s031 — thời gian giữ vốn "3 năm".** Quy định thật: **4 năm** giữ liên tục khoản complying investment
   A$2.500.000 (mốc từ 01/07/2021). Lệch **1 năm** ở con số nhà đầu tư dùng để tính dòng tiền — **rủi ro cao
   nhất trong cả bộ ba trang 888**.
2. **s034 + s073 — cư trú "2 năm cộng dồn trong 3 năm".** Quy định thật: **2 năm trong 4 năm** ngay trước khi
   **nộp** hồ sơ. Nguồn vừa sai mẫu số (3 thay vì 4) vừa lấy mốc là **ngày được cấp** thay vì **ngày nộp**.
3. **A$2.500.000 là mốc từ 01/07/2021.** Hồ sơ 188B nộp trước mốc đó theo quy định cũ là **A$1.500.000
   designated investment**. Trang dành cho người **đang giữ** 188B mà không phân biệt hai nhóm này.
4. **Nguồn không nhắc BIIP đã đóng nhận hồ sơ mới 31/07/2024** (trang 888C cùng bộ có nói).
5. **Tên trang tiếng Việt dùng chữ "trái phiếu"** — sai bản chất sản phẩm từ 01/07/2021. Đề nghị đổi tên
   bản tiếng Việt.
6. **s014 — an sinh xã hội:** nguồn không nêu *newly arrived resident's waiting period*.

## Liên kết và ID bài

- Tệp `.en.json` còn **16 liên kết** trỏ bản tiếng Việt trên miền `staging-41de-immgroupcom.wpcomstaging.com`.
- `post_id` trong tệp là **1062 — ID của trang tiếng Việt**. Không import vào ID này.

## Slug cũ cần chuyển hướng 301

- Chưa biết trang `/en/` cũ. Slug mới đề xuất: `888b-investor-visa`. CEO xác nhận nếu đã có bản `/en/`.

## Kết quả cửa 0

- **XANH · 0 lỗi chặn · 10 cảnh báo** (8 gợi ý thuật ngữ đã quyết theo tên chính thức Úc + 2 cảnh báo CẤU TRÚC
  H1→H3 và H2→H4 do template `acf-product-2026` luôn sinh).
- Lần kiểm đầu: 1 lỗi chặn (chưa có `seo.json`) + 10 cảnh báo.
- B5 (Sonnet) bắt 1 vừa + 1 nhẹ · B6 (Opus) bắt 1 nặng + 6 vừa + 6 nhẹ.

**Nhãn: chưa qua soi độc lập.**
