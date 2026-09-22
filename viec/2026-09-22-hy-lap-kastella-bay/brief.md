# Brief — Dự án Kastella Bay (căn hộ cao cấp, Piraeus, Hy Lạp)

- **Mục đích:** trang **dự án bất động sản** bán kèm lộ trình Golden Visa Hy Lạp mức 250.000 EUR.
- **Người đọc:** nhà đầu tư quốc tế muốn vừa mua tài sản ở châu Âu vừa lấy thẻ cư trú cho cả gia đình.
- **Thị trường hợp:** Mỹ, Anh, UAE, Ấn Độ, Trung Quốc, Đông Nam Á, Israel.
- **Giọng:** cố vấn bất động sản cho HNWI — mô tả thật, không lối quảng cáo.

## Nguồn và cách ráp lại (KHÁC mọi việc trước)
- Nguồn là **tệp HTML thuần của theme** (`template-bds-imm/du-an/hy-lap__kastella-bay/dist/`), **không phải ACF**.
- Dùng `cong-cu/rut-layout.py rut` để rút chữ kèm **vị trí byte**, `nhet` để ghi bản dịch về đúng byte cũ.
- **Cửa kiểm 1 đã chạy:** nhét lại chính bản tiếng Việt → tệp ra **giống tệp gốc từng byte** ✓.
- Bàn giao thêm `tmp-info.en.php` (bản HTML tiếng Anh để dán lên trang), `bang-song-ngu.md`, `ban-dich-de-duyet.docx`
  — cùng bộ với việc `2026-09-21-overview-usa-v2-2`.

## Từ khoá (độ phủ gợi ý Google 6 thị trường, CHƯA có số lượt tìm)
- **Chính:** `greece golden visa property`. **Phụ:** `greece golden visa properties for sale` ·
  `greece golden visa 250 000` · `buy property in greece for residency` · `greece golden visa property investment` ·
  `greece golden visa requirements` · `greece golden visa real estate requirements`.
- Người tìm hay gõ "properties for sale that meet €400k" ⇒ **mức 250.000 EUR là điểm khác biệt đáng nhấn** trong
  meta description.
- **H1 là tên dự án ("Kastella Bay")** — không nhồi từ khoá vào H1; cụm từ khoá chính nằm ở dòng `p` đầu trang
  và trong meta title/description.

## Bẫy riêng của trang này
- **Rất nhiều đoạn là TÊN ICON Material Symbols**, không phải chữ (`apartment`, `directions_car`, `train`, `paid`,
  `check_circle`, `verified`, `public`, `domain`, `passport`, `travel_explore`, `location_off`, `badge`, `balance`,
  và tên nằm trong `{1}…{/1}`: `hotel`, `bed`, `architecture`, `water`, `restaurant`, `directions_boat`,
  `shopping_bag`, `subway`, `home`, `school`, `business_center`). **Dịch là vỡ icon** — giữ nguyên xi.
- `#bo-qua-so` ở s032: bỏ quy đổi VND "khoảng 7,6 tỷ đồng".
- `#bo-qua-tn` ở s099, s107: nguồn viết "Lộ trình/Lợi thế **thường trú nhân** Hy Lạp" nhưng thẻ Hy Lạp có thời hạn
  5 năm, không phải thường trú — tên tiếng Anh đã chốt cho mảng Hy Lạp là **Greece Golden Visa**.

## Điều phải ghi báo cáo cho CEO
- **Mức 250.000 EUR chỉ áp cho bất động sản chuyển đổi công năng** (đúng loại dự án này); mức chung của Golden
  Visa Hy Lạp cao hơn nhiều. Bản Anh phải không để người đọc hiểu 250.000 EUR là mức chung.
- Câu "tài sản sinh lời và tích sản **an toàn**", "đặc quyền thường trú châu Âu **vô giá**" — đã làm mềm.
- "Tiến độ dự án: Đang cập nhật..." — trang đang thiếu nội dung thật.
- "Bảo hành 2 năm", "sở hữu vĩnh viễn 100%" — cần xác nhận đúng hợp đồng.
