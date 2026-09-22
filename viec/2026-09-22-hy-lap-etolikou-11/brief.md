# Brief — Dự án Etolikou 11 (căn hộ dịch vụ, trung tâm cảng Piraeus, Hy Lạp)

- **Mục đích:** trang **dự án bất động sản** — 158 căn hộ dịch vụ chuyển đổi từ toà nhà công nghiệp cũ,
  bán kèm lộ trình Golden Visa Hy Lạp mức 250.000 EUR.
- **Người đọc:** nhà đầu tư quốc tế muốn tài sản cho thuê ở châu Âu + thẻ cư trú cho cả gia đình.
- **Thị trường hợp:** Mỹ, Anh, UAE, Ấn Độ, Trung Quốc, Đông Nam Á, Israel.
- **Giọng:** cố vấn bất động sản cho HNWI — mô tả thật, không lối quảng cáo.

## Nguồn và cách ráp lại (KHÁC mọi việc trước)
- Nguồn là **tệp HTML thuần của theme** (`template-bds-imm/du-an/hy-lap__etolikou-11/dist/`), **không phải ACF**.
- Dùng `cong-cu/rut-layout.py rut` rút chữ kèm **vị trí byte**, `nhet` ghi bản dịch về đúng byte cũ.
- **Cửa kiểm 1 đã chạy:** nhét lại chính bản tiếng Việt → tệp ra **giống tệp gốc từng byte** ✓.
- Bàn giao thêm `tmp-info.en.php`, `bang-song-ngu.md`, `ban-dich-de-duyet.docx` — cùng bộ với
  việc `2026-09-21-overview-usa-v2-2`.

## Từ khoá (độ phủ gợi ý Google 6 thị trường, CHƯA có số lượt tìm)
- **Chính:** `greece golden visa real estate`. **Phụ:** `greece golden visa real estate for sale` ·
  `greece golden visa real estate requirements` · `greece golden visa properties for sale` ·
  `greece golden visa cost` · `greece golden visa processing time` · `greece golden visa property investment`.
- Chọn "real estate" cho trang này và "property" cho Kastella Bay để **hai trang dự án không giành nhau
  cùng một truy vấn** (cannibalization); cả hai cụm đều phủ 6/6 thị trường.
- **H1 là tên dự án ("Etolikou 11")**; cụm từ khoá chính nằm ở dòng `p` đầu trang và trong meta title/description.

## Bẫy riêng của trang này
- **Rất nhiều đoạn là TÊN ICON Material Symbols**, không phải chữ (`luggage`, `school`, `apartment`, `verified`,
  `calendar_month`, `account_tree`, `location_city`, `travel_explore`, `location_off`, `badge`, `balance`,
  `play_arrow`, và tên trong `{1}…{/1}`: `pool`, `fitness_center`, `attractions`, `workspaces`, `chair`,
  `support_agent`, `home`, `business_center`). **Dịch là vỡ icon** — giữ nguyên xi.
- `#bo-qua-tn` ở s091, s099: nguồn viết "thường trú nhân Hy Lạp" nhưng thẻ Hy Lạp có thời hạn 5 năm —
  tên tiếng Anh đã chốt cho mảng Hy Lạp là **Greece Golden Visa**.
- **Bẫy bộ kiểm đã phải sửa luật:** "170 m" / "500 m" bị đọc thành 170 và 500 **triệu** (hệ số "m" của tiếng Anh).
  Đã sửa `dich.py`: hệ số một chữ cái ("m", "k") chỉ tính khi **dính liền** số ("US$5m", "800k"); có dấu cách
  thì là đơn vị đo. Đã thêm ca kiểm `test_m_dinh_lien_moi_la_trieu`, 58 test xanh.

## Điều phải ghi báo cáo cho CEO
- **Mức 250.000 EUR chỉ áp cho bất động sản chuyển đổi công năng** (đúng loại dự án này); mức chung của Golden
  Visa Hy Lạp cao hơn nhiều.
- "tài sản sinh lời và tích sản **an toàn**", "đặc quyền **vô giá**", "**tối ưu** cho thuê",
  "**Tiêu chuẩn xây dựng hạng A**" — các khẳng định không dẫn nguồn, đã làm mềm hoặc cần CEO xác nhận.
- "Dự kiến hoàn thành Quý 4/2027" — cần mốc cập nhật.
