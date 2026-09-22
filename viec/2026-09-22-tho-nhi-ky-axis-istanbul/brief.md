# Brief — Axis Istanbul (Thổ Nhĩ Kỳ) — template HTML thuần của theme

- **Mục đích:** trang **dự án căn hộ** bán kèm lộ trình **quốc tịch Thổ Nhĩ Kỳ (CBI)** — mua bất động sản
  **từ 400.000 USD**, giữ **3 năm**. Trang CBI, không phải thường trú.
- **Khác 3 trang CBI Caribbean cùng ngày:** nhà đầu tư **mua đứt căn hộ đứng tên mình** (title deed / tapu),
  không phải mua cổ phần trong dự án được phê duyệt ⇒ cách diễn đạt khác hẳn.
- **Điểm bán riêng:** Thổ Nhĩ Kỳ là **nước ký hiệp ước E-2** với Mỹ; trang bán cả lộ trình E-2.
- **Người đọc:** nhà đầu tư quốc tế muốn quốc tịch thứ hai nhanh + cửa vào Mỹ diện E-2.
- **Giọng:** cố vấn điềm tĩnh; trang có **8 khối "lợi thế"** toàn câu phủ định ("không yêu cầu…") nên dễ trượt
  thành lời hứa tuyệt đối.

## Từ khoá (B3 — độ phủ gợi ý Google 6 thị trường, CHƯA có số lượt tìm)
- **Chính:** `turkey citizenship by investment real estate` (6/6). Trang nước
  `2026-09-22-quoc-tich-tho-nhi-ky-turkey` đã lấy cụm trần ⇒ trang dự án lấy nhánh **real estate**,
  đúng mẫu đã dùng cho Secret Bay và InterContinental Grenada.
- **Phụ:** `turkish citizenship by real estate investment` · `turkish passport by real estate investment` ·
  `minimum investment in turkey for citizenship` · `buy property in istanbul` · `buy apartment in istanbul` ·
  `turkey istanbul property for sale`.
- WebSearch 5 kết quả đầu: **hãng luật và hãng tư vấn** (Henley & Partners, Legal 500, Global Citizen Solutions,
  getgoldenvisa), **không phải cổng rao vặt** như mảng Síp ⇒ meta title đặt **cụm từ khoá trước, tên dự án sau**.
- Nguồn ngoài xác nhận: ngưỡng **US$400,000**, giữ **3 năm**, sau 3 năm bán được mà vẫn giữ quốc tịch.

## Phân đoạn dịch sát / viết lại / bỏ
| Khối | Cách làm |
|---|---|
| s005–s007, s037–s047 (bảng thông số), s094–s101 (lộ trình), s106–s141 (8 khối lợi thế) | **dịch sát** |
| s003 (hero), H2 (s017, s030, s048, s067, s090, s094, s102, s142), CTA (s004, s036, s143) | **viết lại** |
| s049, s052, s055, s058, s070, s073, s076, s079, s082, s104, s108, s112, s116, s120, s127, s133, s137, s146 | **GIỮ NGUYÊN XI** — tên icon Material Symbols |
| s105, s109, s113, s117, s121, s128, s134, s138 (`01`–`08`) | giữ nguyên |
| **s119 "Có thể giữ tên VIỆT NAM"** | **viết chung**: `keep your current name` (style guide mục 4) |

## Luật thuật ngữ mảng Thổ Nhĩ Kỳ (bảng thuật ngữ)
- **Thân bài dùng tên chính thức `Türkiye`**; cụm "Turkey" chỉ ở **meta title / từ khoá** (người tìm gõ vậy).
- "quốc tịch Thổ Nhĩ Kỳ" → `Turkish citizenship` (tính từ), tên chương trình là
  `Turkey Citizenship by Investment`.
- "giấy chứng nhận quyền sở hữu" → `title deed (tapu)`, lần đầu viết đủ.
- **`E-2 treaty investor visa`** ở lần nhắc đầu trong thân bài.
- "tích sản **an toàn** bằng ngoại tệ" → `a store of value held in US dollars` (bỏ "an toàn", bỏ "vô giá").

## Bẫy riêng của template BĐS
- **Tên icon Material Symbols** (kể cả trong `{1}…{/1}`) — dịch là **vỡ icon**.
- **Chữ ngoài tầm bộ rút** (`alt`, `aria-label`, chuỗi JavaScript) → `cong-cu/vet-chu-ngoai.py`; bảng phải khớp
  tệp **sau khi `nhet`** (chuỗi đã được `nhet` dịch thì không còn trong tệp).
- **Cửa kiểm 1 đã chạy:** nhét lại bản tiếng Việt → tệp ra **giống tệp gốc từng byte ✓**

## Điều phải ghi báo cáo cho CEO
- **Trang TỰ ĐÁ NHAU:** s124 "**Không yêu cầu cư trú**" vs s140 "**cư trú tối thiểu 3 năm**". Thật ra là hai
  chuyện khác nhau — Thổ Nhĩ Kỳ không đòi cư trú để **nhập tịch**, nhưng Mỹ đòi **3 năm** với người có quốc tịch
  qua đầu tư khi xét **E-2** (AMIGOS Act). Bản Anh nói rõ đây là điều kiện **của Mỹ**.
- **s126 "Không giới hạn quốc tịch đương đơn"** — Thổ Nhĩ Kỳ **có** hạn chế với một số quốc tịch. Nghi nguồn
  nói quá; dịch đúng nguồn, đưa CEO quyết.
- **s084 "Siêu Thương hiệu 2014–2015"** — danh hiệu 11 năm trước, không ghi tổ chức trao.
- **s081 "ưu đãi phí luật sư 5.000 USD"** — không rõ là **giảm** 5.000 USD hay **phí là** 5.000 USD.
- **s033 vs s045/s047:** căn rẻ nhất **284.000 USD KHÔNG đủ** ngưỡng 400.000 USD — phải để người đọc thấy rõ.
- **s091 "Tiến độ dự án: Đang cập nhật…"** trong khi trang đang chào bán.
