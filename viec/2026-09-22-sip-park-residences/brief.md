# Brief — Dự án Park Residence (Nicosia, Cộng Hòa Síp) — template HTML thuần của theme

- **Mục đích:** trang **dự án bất động sản** bán kèm lộ trình **thường trú nhân vĩnh viễn Cộng Hòa Síp**
  (ngưỡng đủ điều kiện: **300.000 EUR + VAT, mua mới từ chủ đầu tư**). Giá khởi điểm dự án **320.000 EUR**.
- **Khác 8 trang Síp đã dịch:** đây là dự án **DUY NHẤT ở Nicosia** (thủ đô, nội địa, không có biển) —
  bán bằng lý do hành chính/giáo dục/công viên, không bán view biển. 12 căn, 2–3 phòng ngủ, chủ đầu tư Cybarco.
- **Người đọc:** nhà đầu tư quốc tế muốn vừa mua tài sản EU vừa lấy thường trú cho cả gia đình; nhánh
  người Anh (hậu Brexit) và nhánh gia đình có con đi học là hai nhóm mạnh nhất trong gợi ý Google cho Nicosia.
- **Giọng:** cố vấn bất động sản cho HNWI — mô tả thật, bỏ lối quảng cáo.

## Từ khoá (B3 — xếp theo độ phủ gợi ý Google 6 thị trường, CHƯA có số lượt tìm)
- **Chính: `nicosia apartments for sale`** (6/6 thị trường). Lý do: đây là trang Nicosia duy nhất của loạt,
  và 8 trang Síp trước đã lấy hết các cụm Paphos/Limassol/sea view/golden visa — không được đá nhau.
- Phụ: `nicosia property for sale` · `buy apartment in cyprus` · `buying property in cyprus for residency` ·
  `nicosia flats for sale` · `buy property in cyprus and get residency` · `can foreigners buy property in cyprus`.
- WebSearch 5 kết quả đầu: toàn cổng rao vặt (JamesEdition, Savills, Zyprus, DevelopersCyprus) → trang dự án
  không đấu nổi ở cụm trần; thắng ở **tên dự án + cụm địa phương** trong meta title.

## Phân đoạn dịch sát / viết lại / bỏ
| Khối | Cách làm |
|---|---|
| s005–s007 (giá, bàn giao, chủ đầu tư), s036–s050 (bảng thông số), s086–s094 (lộ trình PR), s104–s120 (thuế, quốc tịch) | **dịch sát** — số, mốc, điều kiện luật |
| s002–s003 (hero), s017/s030/s051/s066/s087/s095/s121 (H2), s004/s035/s122 (CTA) | **viết lại** cho tự nhiên, không thêm dữ kiện |
| s052, s055, s069, s072, s075, s097, s102, s108, s125 | **GIỮ NGUYÊN XI** — tên icon Material Symbols, không phải chữ |
| s079–s082 (danh sách dự án khác) | giữ tên riêng |
| Không có đoạn nào chỉ hợp khách Việt ⇒ **không bỏ đoạn nào** |

## Nguồn và cách ráp lại
- Nguồn `template-bds-imm/du-an/sip__park-residences/dist/`, **HTML thuần, không phải ACF**.
- `rut-layout.py rut` rút chữ kèm **vị trí byte** → `nhet` ghi bản dịch về đúng byte cũ.
- **Cửa kiểm 1 đã chạy:** nhét lại bản tiếng Việt → tệp ra **giống tệp gốc từng byte ✓**
- Bàn giao thêm `tmp-info.en.php`, `bang-song-ngu.md`, `ban-dich-de-duyet.docx`.

## Luật thuật ngữ mảng Síp (khác Hy Lạp)
- **Síp cấp thường trú THẬT** ⇒ "thường trú nhân" = **permanent residence / permanent resident**;
  "Cyprus Golden Visa" **không** dùng trong thân bài.
- Giữ đủ ba lằn ranh: **PR Síp ≠ quốc tịch Síp ≠ quyền sống/làm việc toàn EU**.
- "Công dân EU" → **Cypriot (EU) citizenship**; "tự do di chuyển" → **visa-free travel to … destinations**.
- "tích sản an toàn" → **store of value** (bỏ chữ "an toàn"); "nhà phát triển hàng đầu" → bỏ puffery.

## Bẫy riêng của template BĐS
- **Nhiều đoạn là TÊN ICON Material Symbols**, kể cả trong `{1}…{/1}` — dịch là **vỡ icon**.
- **Chữ ngoài tầm bộ rút** (`alt`, `aria-label`, chuỗi JavaScript) dịch bằng `cong-cu/vet-chu-ngoai.py`.
- **Đoạn TM kế thừa KHÔNG mang theo cờ** `#bo-qua-so` ("đến Síp 1 lần mỗi 2 năm") → gắn lại sau khi lấp TM.
- **Ngân sách ký tự**: nhãn trong ô CSS (chip điều hướng s008–s016, ô thông số) giữ ngắn như bản Việt.

## Điều phải ghi báo cáo cho CEO
- **Thuế doanh nghiệp 12,5%** (nguồn ghi "đối chiếu 18/08/2026") — loạt trang Síp nói hai kiểu (Elysia Blu ghi
  15% từ 2026). Dịch đúng nguồn, đưa CEO quyết.
- Nguồn gõ sai tên thủ đô ở s030: **"Nicossia"** (đúng: Nicosia) — bản Anh viết đúng, đề nghị sửa bản Việt.
- Tên dự án nói hai kiểu: **"Park Residence"** (H1, s008) và **"Park Residences Nicosia"** (s065).
- "Tiến độ dự án" để trống ("Đang cập nhật") trong khi trang đang chào bán.
- Điều kiện nhập tịch nguồn ghi **8 năm trong 11 năm** + **tiếng Hy Lạp B1** — cần đối chiếu quy định hiện hành.
