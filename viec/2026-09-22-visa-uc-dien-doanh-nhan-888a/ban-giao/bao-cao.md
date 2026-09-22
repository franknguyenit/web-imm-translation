# Báo cáo dịch — Visa Úc diện doanh nhân 888A

- **Nguồn:** tệp JSON xuất từ ACF của trang `https://immgroup.com/dau-tu-dinh-cu-uc/visa-uc-dien-doanh-nhan-888a/`
  (post_id 1064, `lang: vi`, template `content-product-2026.php`, xuất từ miền staging).
- **Khối lượng:** 94 đoạn · 1.074 chữ tiếng Việt. Dịch ở luồng chính bằng Opus, không chia mẻ.
- **Bộ nhớ dịch:** 25 đoạn có gợi ý; dùng lại nguyên văn các nhãn khối liên kết và nút bấm.

## Từ khoá

- **Chính:** `888a business innovation visa`.
- **Phụ:** `subclass 888 business innovation stream` · `888 visa australia` · `188a to 888a` ·
  `subclass 888 visa requirements` · `australia business visa permanent residency` ·
  `business innovation and investment permanent visa`.
- **Lý do:** người tìm ở Úc gõ **số subclass** chứ không gõ "golden visa" hay "citizenship by investment".
  Viết tắt 888A/888B/888C do chính ngành di trú Úc dùng (NSW Government đặt URL `/subclass-888c`,
  Work Visa Lawyers "Significant Investor (SIV) – 888C"), nên giữ được trong H1 và meta title.
  Cách đặt tên khớp nhãn liên kết của ba trang 188A/188B/188C đã dịch trong cùng ngày.
- ⚠ **Xếp hạng theo độ phủ tiêu đề đối thủ qua WebSearch, CHƯA có số lượt tìm kiếm.** Lệnh `tukhoa` không
  chạy được vì Cowork chặn mạng dòng lệnh tới Google. Muốn có số lượt tìm cần công cụ trả phí (Ahrefs/Semrush).

## Đoạn viết lại lớn

- s002 H1: nguồn "VISA ÚC DIỆN DOANH NHÂN 888A" → "Australia **888A** Business Innovation Visa" (bỏ viết hoa cả
  dòng theo style guide mục 6; đặt tên diện theo tên chính thức Home Affairs; giữ thẻ giữ chỗ `{1}…{/1}`).
- s021: nguồn "Từ visa 188A tạm trú chuyển sang 888A thường trú" → "Holders of the 188A provisional visa move to
  888A permanent residence once the requirements are met" (bản đầu viết "becomes", đọc như visa tự chuyển đổi).
- s072 "Khác biệt 188A và 888A" → "188A versus 888A".

## Đoạn đã viết chung vì ngữ cảnh khách Việt (style guide mục 4)

| Đoạn | Nguồn | Bản Anh |
|---|---|---|
| s015–s016 | "Tự do đi lại Việt Nam – Úc" · "trong thời hạn thẻ thường trú" | Nói về quyền ra vào Úc, không nhắc Việt Nam; "thẻ thường trú" → **travel facility on the permanent visa** (Úc **không cấp thẻ thường trú**, chỉ có quyền tái nhập cảnh gắn với visa) |
| s068 | "Những người Việt thành công trên đất Úc" | "Immigrant success stories in Australia" (bảng thuật ngữ chặn "Vietnamese …") |

**Không bỏ hẳn đoạn nào.**

## Quy đổi tiền

- A$300,000 × 0.7121 = US$213,630 → viết **"approximately US$214,000"** (s034).
- Tỷ giá: `ty-gia.json`, `usd_moi_aud = 0.7121`, nguồn open.er-api.com (ExchangeRate-API), cập nhật
  22/09/2026, chép từ việc `2026-09-22-dinh-cu-canada-tinh-bang-nova-scotia` cùng ngày (mạng Cowork chặn `tygia`).
- AUD là tiền luật định ⇒ **giữ A$**, USD chỉ là số tham chiếu trong ngoặc (style guide mục 5.2).
- Trang **không có tiền VND** ⇒ không có phép đổi VND nào.

## Chỗ đã làm mềm vì tuân thủ

- s018: thêm "that apply at the time" cho điều kiện nhập tịch — không hứa điều kiện đứng yên.
- s048: giữ "Processing times depend on the individual case and on the Department of Home Affairs".
- s014: "is eligible for" thay vì "được hưởng" — thường trú nhân Úc phải chờ
  *newly arrived resident's waiting period* với phần lớn trợ cấp, nguồn không nêu.
- s082: "a poorly chosen acquisition puts the application at risk" — giữ cảnh báo rủi ro của nguồn.

## Góp ý của B5 / B6 đã bác

| Đoạn | Góp ý | Lý do bác |
|---|---|---|
| s012, s038 | B5 đề nghị bỏ "or territory", chỉ viết "any state of Australia" | Úc có **cả state và territory** (ACT, NT). Viết "any state" loại bỏ hai vùng lãnh thổ — sai thực tế, và lệch trang 188A cùng bộ đã dùng "state or territory" |
| s016 | B5 đề nghị "permanent resident card" | Úc **không cấp thẻ thường trú**. Lấy bản của B6: "travel facility on the permanent visa" |

Đã nhận 15/15 đoạn sửa của B6 và bác 3 đoạn của B5 như trên.

## Nguồn có vẻ sai hoặc lỗi thời — CEO xác nhận (đã dịch đúng nguồn, không tự sửa)

1. **s032 — ngưỡng sở hữu ngược chiều.** Nguồn: "sở hữu tối thiểu **30%** … hoặc theo ngưỡng quy định nếu
   doanh thu **cao hơn**". Quy định Home Affairs đi ngược lại: **51%** khi doanh thu dưới A$400.000, **30%** khi
   từ A$400.000, **10%** khi công ty niêm yết. Người đọc quốc tế sẽ hiểu ngưỡng sở hữu **tăng** theo doanh thu.
   → đề nghị sửa **bản tiếng Việt**.
2. **s035 — thiếu con số.** Nguồn nói "2 trong 3 điều kiện … đạt mức quy định" mà không nêu **A$200.000**
   (tài sản ròng doanh nghiệp) và **A$600.000** (tổng tài sản cá nhân + doanh nghiệp).
3. **s037 — mốc cư trú để mở.** Nguồn ghi "theo quy định của visa subclass 888"; quy định thật là
   **12 tháng trong 2 năm** trước khi nộp — một trong ba con số người đọc tìm nhất.
4. **Cả trang không nhắc BIIP đã đóng nhận hồ sơ mới 31/07/2024.** Trang 888C cùng bộ có nói (s008), 888A và
   888B không. Với người đọc quốc tế, trang đọc như đang bán một chương trình còn mở.
5. **s014 — an sinh xã hội:** nguồn không nêu *newly arrived resident's waiting period*.

## Liên kết và ID bài

- Tệp `.en.json` còn **16 liên kết** trỏ bản tiếng Việt trên miền `staging-41de-immgroupcom.wpcomstaging.com`.
  Bảng `lien-ket/lien-ket-vi-en.tsv` chỉ có cặp của `immgroup.com` nên `ghep` không đổi được và không cảnh báo.
- `post_id` trong tệp là **1064 — ID của trang tiếng Việt**. Không import vào ID này (sẽ đè trang Việt).

## Slug cũ cần chuyển hướng 301

- Chưa biết trang `/en/` cũ. Slug mới đề xuất: `888a-business-innovation-visa`. Nếu đã có bản `/en/` với slug
  tiếng Việt thì cần 301 sang slug mới — CEO xác nhận.

## Kết quả cửa 0

- **XANH · 0 lỗi chặn · 15 cảnh báo.** Cảnh báo gồm: 13 gợi ý thuật ngữ (đã quyết theo tên chính thức Úc —
  "Business Innovation stream" thay vì "entrepreneur stream" của Canada; "social security" là chữ đúng của Úc)
  và 2 cảnh báo CẤU TRÚC (H1→H3, H2→H4) do template `acf-product-2026` luôn sinh.
- Lần kiểm đầu: 1 lỗi chặn (chưa có `seo.json`) + 17 cảnh báo.
- B5 (Sonnet) bắt 1 vừa + 1 nhẹ · B6 (Opus) bắt 1 nặng + 9 vừa + 5 nhẹ.

**Nhãn: chưa qua soi độc lập.**
