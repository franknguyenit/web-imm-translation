# Brief — Dự án beachside-villa (Cộng Hòa Síp) — template HTML thuần của theme

- **Mục đích:** trang **dự án bất động sản** bán kèm lộ trình **thường trú nhân vĩnh viễn Cộng Hòa Síp**
  (ngưỡng bất động sản đủ điều kiện: **300.000 EUR + VAT, mua mới từ chủ đầu tư**).
- **Người đọc:** nhà đầu tư quốc tế muốn vừa mua tài sản ở EU vừa lấy thường trú cho cả gia đình.
- **Thị trường hợp:** Anh, Mỹ, UAE, Israel, Ấn Độ, Trung Quốc, Đông Nam Á.
- **Giọng:** cố vấn bất động sản cho HNWI — mô tả thật, không lối quảng cáo.

## Nguồn và cách ráp lại
- Nguồn `template-bds-imm/du-an/sip__beachside-villa/dist/`, **HTML thuần, không phải ACF**.
- `rut-layout.py rut` rút chữ kèm **vị trí byte** → `nhet` ghi bản dịch về đúng byte cũ.
- **Cửa kiểm 1 đã chạy:** nhét lại bản tiếng Việt → tệp ra **giống tệp gốc từng byte ✓**
- Bàn giao thêm `tmp-info.en.php`, `bang-song-ngu.md`, `ban-dich-de-duyet.docx`.

## Luật thuật ngữ RIÊNG của mảng Síp (khác Hy Lạp)
- **Síp cấp thường trú THẬT** ⇒ "thường trú nhân" dịch là **permanent residence / permanent resident** —
  KHÔNG dùng "Golden Visa" trong thân bài. Tên "Cyprus Golden Visa" chỉ dùng ở **meta title/description** cho SEO,
  theo ghi chú đã chốt trong `thuat-ngu.csv`.
- Bản Anh phải nói rõ **PR Síp ≠ quốc tịch Síp ≠ quyền sống/làm việc toàn EU** (nguồn đã có, giữ nguyên).
- "Công dân EU" → **Cypriot (EU) citizenship**; "tự do di chuyển" → **visa-free travel to … destinations**.

## Bẫy riêng của template BĐS
- **Nhiều đoạn là TÊN ICON Material Symbols**, kể cả trong `{1}…{/1}` — dịch là **vỡ icon**, giữ nguyên xi.
- **Chữ ngoài tầm bộ rút** (`alt`, `aria-label`, chuỗi JavaScript) dịch bằng `cong-cu/vet-chu-ngoai.py`
  với bảng `chu-ngoai-bo-rut.tsv` của từng trang.

## Điều phải ghi báo cáo cho CEO
- **Thuế doanh nghiệp Síp nói hai kiểu giữa ba trang:** Elysia Blu ghi **15% từ 2026**, hai trang villa ghi
  **12,5% (đối chiếu 18/08/2026)**.
- **Số năm kinh nghiệm của Pafilia:** Coral Vista ghi **45 năm** ở phần mô tả, khối chủ đầu tư của cả ba trang ghi **48 năm**.
- Điều kiện nhập tịch nguồn ghi **8 năm/11 năm** — cần đối chiếu quy định hiện hành.
- "ONE — toà nhà ven biển cao nhất châu Âu" thiếu chữ **residential**; "60% đất ven biển" không dẫn nguồn.
