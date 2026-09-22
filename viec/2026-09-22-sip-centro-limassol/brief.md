# Brief — Dự án Centro Limassol (Cộng Hòa Síp) — template HTML thuần của theme

- **Mục đích:** trang **dự án bất động sản** bán kèm lộ trình **thường trú nhân vĩnh viễn Cộng Hòa Síp**
  (ngưỡng đủ điều kiện: **300.000 EUR + VAT, mua mới từ chủ đầu tư**). Giá khởi điểm **350.000 EUR**.
- **Khác các trang Síp đã dịch:** dự án **lõi Phố Cổ Limassol**, căn **1–2 phòng ngủ** (nhỏ nhất loạt),
  60 căn, hồ bơi vô cực tầng thượng, **Năng lượng hạng A**; bán bằng lý do **trung tâm đô thị + cho thuê**,
  không bán mặt tiền biển (Seaview Heights và Limassol Marina đã giữ hai góc đó).
- **Người đọc:** nhà đầu tư quốc tế muốn tài sản EU cho thuê được + thường trú cho cả gia đình.
- **Giọng:** cố vấn bất động sản cho HNWI — mô tả thật, bỏ lối quảng cáo.

## Từ khoá (B3 — xếp theo độ phủ gợi ý Google 6 thị trường, CHƯA có số lượt tìm)
- **Chính: `limassol apartments for sale`** (6/6 thị trường; biến thể `apartments for sale in limassol cyprus`).
  Lý do: dự án là **căn hộ** ở Limassol, và loạt trang trước đã lấy "luxury villas", "sea views", "golden visa".
- Phụ: `apartments for sale in limassol cyprus` · `flats for sale in limassol cyprus` ·
  `properties for sale in cyprus limassol` · `buy apartment in cyprus` ·
  `buy property in cyprus and get residency` · `can foreigners buy property in cyprus`.
- WebSearch 5 kết quả đầu: cổng rao vặt (Rightmove, JamesEdition, Savills, DevelopersCyprus) → trang dự án
  thắng ở **tên dự án + cụm địa phương** trong meta title, không đấu cụm trần.

## Phân đoạn dịch sát / viết lại / bỏ
| Khối | Cách làm |
|---|---|
| s005–s007, s036–s052 (bảng thông số), s092–s100 (lộ trình PR), s110–s126 (thuế, quốc tịch) | **dịch sát** |
| s002–s003 (hero), s017/s030/s053/s072/s093/s101/s127 (H2), s004/s035/s128 (CTA) | **viết lại** |
| s054, s057, s060, s075, s078, s081, s103, s108, s114, s131 | **GIỮ NGUYÊN XI** — tên icon Material Symbols |
| s085–s088 (danh sách dự án khác) | giữ tên riêng |
| Không có đoạn nào chỉ hợp khách Việt ⇒ **không bỏ đoạn nào** |

## Nguồn và cách ráp lại
- Nguồn `template-bds-imm/du-an/sip__centro-limassol/dist/`, **HTML thuần, không phải ACF**.
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
- s034 nói **"tối ưu hóa khả năng cho thuê dài hạn lẫn ngắn hạn"** — cho thuê ngắn hạn ở Síp phải đăng ký
  Sổ bộ nhà nghỉ dưỡng (Deputy Ministry of Tourism); bản Anh không hứa dòng tiền, chỉ nói nhu cầu thị trường.
- "Tiến độ dự án" để trống ("Đang cập nhật") trong khi trang đang chào bán.
- Điều kiện nhập tịch nguồn ghi **8 năm trong 11 năm** + **tiếng Hy Lạp B1** — cần đối chiếu quy định hiện hành.
- s042 ghi **60 căn hộ** nhưng không nêu số tầng; các trang cùng loạt đều có số tầng.
