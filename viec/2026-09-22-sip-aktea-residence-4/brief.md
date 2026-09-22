# Brief — Dự án Aktea Residence 4 (Limassol, Cộng Hòa Síp) — template HTML thuần của theme

- **Mục đích:** trang **dự án bất động sản** bán kèm lộ trình **thường trú nhân vĩnh viễn Cộng Hòa Síp**
  (ngưỡng đủ điều kiện: **300.000 EUR + VAT, mua mới từ chủ đầu tư**). Giá khởi điểm **545.000 EUR**.
- **Khác các trang Síp đã dịch:** tháp boutique **4 tầng**, căn **1–2 phòng ngủ**, cách biển 1 km, cạnh bãi
  Dasoudi; điểm bán mạnh nhất là **mua mới từ chủ đầu tư, hoàn thiện Quý 4/2026** — tức **hàng off-plan sắp bàn
  giao**, đúng loại bất động sản mà diện PR Síp yêu cầu.
- **Người đọc:** nhà đầu tư quốc tế muốn tài sản EU mới, bàn giao sớm + thường trú cho cả gia đình.
- **Giọng:** cố vấn bất động sản cho HNWI — mô tả thật, bỏ lối quảng cáo.

## Từ khoá (B3 — xếp theo độ phủ gợi ý Google 6 thị trường, CHƯA có số lượt tìm)
- **Chính: `new build apartments in cyprus`** (6/6 thị trường). Lý do: diện PR Síp **chỉ nhận bất động sản mua
  mới từ chủ đầu tư**, nên "new build" vừa là điểm bán vừa là điều kiện pháp lý; và cụm địa phương Limassol
  đã giao cho Centro Limassol, cụm sea view cho Seaview Heights.
- Phụ: `off plan property cyprus` · `new build properties in cyprus` · `buy apartment in cyprus` ·
  `buying property in cyprus for residency` · `buy property in cyprus and get residency` ·
  `can foreigners buy property in cyprus`.
- ⚠ **Tránh mọi cụm "north cyprus"** trong gợi ý — Bắc Síp là vùng khác, không thuộc EU, không có diện PR này.
- WebSearch 5 kết quả đầu: cổng off-plan (Cyprus-Real.Estate, DevelopersCyprus, offplanproperties.com) +
  bài giải thích "off-plan là gì" → người tìm vừa muốn danh mục vừa muốn hiểu rủi ro mua nhà hình thành.

## Phân đoạn dịch sát / viết lại / bỏ
| Khối | Cách làm |
|---|---|
| s005–s007, s036–s048 (bảng thông số), s085–s093 (lộ trình PR), s099–s115 (thuế, quốc tịch) | **dịch sát** |
| s002–s003 (hero), s017/s030/s049/s061/s082/s090/s116 (H2), s004/s035/s117 (CTA) | **viết lại** |
| s050, s053, s064, s067, s070, s091(?), s097, s103, s120 | **GIỮ NGUYÊN XI** — tên icon Material Symbols |
| s074–s077 (danh sách dự án khác) | giữ tên riêng |
| Không có đoạn nào chỉ hợp khách Việt ⇒ **không bỏ đoạn nào** |

## Nguồn và cách ráp lại
- Nguồn `template-bds-imm/du-an/sip__aktea-residence-4/dist/`, **HTML thuần, không phải ACF**.
- `rut-layout.py rut` rút chữ kèm **vị trí byte** → `nhet` ghi bản dịch về đúng byte cũ.
- **Cửa kiểm 1 đã chạy:** nhét lại bản tiếng Việt → tệp ra **giống tệp gốc từng byte ✓**
- Bàn giao thêm `tmp-info.en.php`, `bang-song-ngu.md`, `ban-dich-de-duyet.docx`.

## Luật thuật ngữ mảng Síp (khác Hy Lạp)
- **Síp cấp thường trú THẬT** ⇒ "thường trú nhân" = **permanent residence / permanent resident**;
  "Cyprus Golden Visa" **không** dùng trong thân bài.
- Giữ đủ ba lằn ranh: **PR Síp ≠ quốc tịch Síp ≠ quyền sống/làm việc toàn EU**.
- "Công dân EU" → **Cypriot (EU) citizenship**; "tự do di chuyển" → **visa-free travel to … destinations**.
- "tích sản an toàn" → **store of value**; "nhà phát triển hàng đầu" → bỏ puffery.

## Bẫy riêng của template BĐS
- **Tên icon Material Symbols** (kể cả trong `{1}…{/1}`) — dịch là **vỡ icon**.
- **Chữ ngoài tầm bộ rút** (`alt`, `aria-label`, chuỗi JavaScript) dịch bằng `cong-cu/vet-chu-ngoai.py`.
- **Đoạn TM kế thừa mất cờ** `#bo-qua-so` ("đến Síp 1 lần mỗi 2 năm") → gắn lại sau khi lấp TM.
- **Ngân sách ký tự** cho chip điều hướng s008–s016 và ô thông số.

## Điều phải ghi báo cáo cho CEO
- **Thuế doanh nghiệp 12,5%** ("đối chiếu 18/08/2026") — Elysia Blu cùng loạt ghi **15% từ 2026**. Đưa CEO quyết.
- **Mốc bàn giao Quý 4/2026 đã tới nơi** (hôm nay 22/09/2026) mà "Tiến độ dự án" vẫn ghi "Đang cập nhật" —
  trang nói "Đang xây dựng"; CEO nên xác nhận mốc trước khi đăng bản Anh.
- Giá **545.000 EUR** là giá **một mức duy nhất**, không phải "từ" — nguồn ghi "Giá khởi điểm" ở hero nhưng
  bảng thông số không có dòng giá; giữ đúng nguồn, đề nghị CEO thống nhất.
- Điều kiện nhập tịch nguồn ghi **8 năm trong 11 năm** + **tiếng Hy Lạp B1** — cần đối chiếu quy định hiện hành.
