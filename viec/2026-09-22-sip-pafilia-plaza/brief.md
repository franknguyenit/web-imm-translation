# Brief — Dự án pafilia-plaza (Cộng Hòa Síp) — template HTML thuần của theme

- **Mục đích:** trang **dự án bất động sản** bán kèm lộ trình **thường trú nhân vĩnh viễn Cộng Hòa Síp**
  (ngưỡng bất động sản đủ điều kiện: **300.000 EUR + VAT, mua mới từ chủ đầu tư**).
- **Người đọc:** nhà đầu tư quốc tế muốn vừa mua tài sản ở EU vừa lấy thường trú cho cả gia đình.
  Gợi ý Google cho Síp cho thấy **người Anh là nhóm đọc lớn nhất** (nhánh hậu Brexit) và nhánh **nghi ngờ/an toàn**
  rất mạnh ("is it safe to buy property in cyprus").
- **Giọng:** cố vấn bất động sản cho HNWI — mô tả thật, không lối quảng cáo.

## Nguồn và cách ráp lại
- Nguồn `template-bds-imm/du-an/sip__pafilia-plaza/dist/`, **HTML thuần, không phải ACF**.
- `rut-layout.py rut` rút chữ kèm **vị trí byte** → `nhet` ghi bản dịch về đúng byte cũ.
- **Cửa kiểm 1 đã chạy:** nhét lại bản tiếng Việt → tệp ra **giống tệp gốc từng byte ✓**
- Bàn giao thêm `tmp-info.en.php`, `bang-song-ngu.md`, `ban-dich-de-duyet.docx`.

## Luật thuật ngữ mảng Síp (khác Hy Lạp)
- **Síp cấp thường trú THẬT** ⇒ "thường trú nhân" dịch là **permanent residence / permanent resident**.
  Cụm "Cyprus Golden Visa" chỉ dùng ở meta của trang Elysia Blu.
- Bản Anh phải giữ đủ lằn ranh **PR Síp ≠ quốc tịch Síp ≠ quyền sống/làm việc toàn EU**.
- "Công dân EU" → **Cypriot (EU) citizenship**; "tự do di chuyển" → **visa-free travel to … destinations**.

## Bẫy riêng của template BĐS
- **Nhiều đoạn là TÊN ICON Material Symbols**, kể cả trong `{1}…{/1}` — dịch là **vỡ icon**, giữ nguyên xi.
- **Chữ ngoài tầm bộ rút** (`alt`, `aria-label`, `iframe title`, chuỗi JavaScript) dịch bằng
  `cong-cu/vet-chu-ngoai.py` với bảng `chu-ngoai-bo-rut.tsv` của từng trang.
- **Đoạn TM kế thừa KHÔNG mang theo cờ:** "chỉ cần đến Síp 1 lần mỗi 2 năm" theo bộ nhớ dịch sang nhưng mất cờ
  `#bo-qua-so` ⇒ cả bốn trang mẻ này đều đỏ cửa 0 ở đúng chỗ đó. Gắn lại cờ ngay sau khi lấp TM.

## Điều phải ghi báo cáo cho CEO
- **Thuế doanh nghiệp Síp nói hai kiểu trong cùng loạt:** Elysia Blu ghi **15% từ 2026**, các trang còn lại ghi **12,5%**.
- Điều kiện nhập tịch nguồn ghi **8 năm/11 năm** — cần đối chiếu quy định hiện hành.
- "ONE — toà nhà ven biển cao nhất châu Âu" thiếu chữ **residential**; "60% đất ven biển" không dẫn nguồn.
