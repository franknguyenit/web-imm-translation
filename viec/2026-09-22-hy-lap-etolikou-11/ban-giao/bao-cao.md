# Báo cáo — Dự án Etolikou 11 (trung tâm cảng Piraeus, Hy Lạp)

- **Nguồn:** tệp HTML thuần của theme — `template-bds-imm/du-an/hy-lap__etolikou-11/dist/hy-lap__etolikou-11.html`
  (**không phải ACF**). Trang web tương ứng:
  `/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-hy-lap/dau-tu-lay-thuong-tru-nhan-hy-lap-du-an-can-ho-dich-vu-etolikou-11/`
- **Số đoạn:** 132 đoạn chữ (130 vào bảng song ngữ) / 1.203 chữ nguồn.
- **Cửa 0:** XANH · 0 lỗi chặn · 15 cảnh báo. **Nhãn: chưa qua soi độc lập.**

## Cách ráp lại và 3 cửa kiểm đã chạy
1. `rut-layout.py rut` rút chữ kèm **vị trí byte** → `nhet` ghi bản dịch về đúng byte cũ.
2. **Nhét lại chính bản tiếng Việt → tệp ra giống tệp gốc TỪNG BYTE ✓**
3. **Số thẻ HTML bản Anh = bản gốc ✓** · **không còn ký tự tiếng Việt sống ✓**
4. Chưa đo trên trình duyệt ở 375 · 577 · 700 · 768 · 1440px — **team nên đo trước khi đăng**.

## Tệp bàn giao
| Tệp | Dùng để |
|---|---|
| **`tmp-info.en.php`** | **bản HTML tiếng Anh hoàn chỉnh để dán lên trang** — tệp chính |
| `ban-dich-de-duyet.docx` | bản duyệt nội dung |
| `bang-song-ngu.md` | bảng đối chiếu từng đoạn Việt–Anh |
| `bai-dich.en.md` / `.en.html` / `.vi.md` | bản chữ trần để đọc và so |
| `seo.json` · `hy-lap-etolikou-11.en.json` | SEO · bản ACF-giả nội bộ (**không import**) |

## Từ khoá
- **Chính:** `greece golden visa real estate`.
- **Phụ:** `greece golden visa real estate for sale` · `greece golden visa real estate requirements` ·
  `greece golden visa properties for sale` · `greece golden visa cost` · `greece golden visa processing time` ·
  `greece golden visa property investment`.
- **Chọn "real estate" cho trang này và "property" cho Kastella Bay** để hai trang dự án **không giành nhau cùng
  một truy vấn**; cả hai cụm đều phủ 6/6 thị trường.
- **H1 giữ nguyên tên dự án "Etolikou 11"**; cụm từ khoá chính nằm ở dòng `p` đầu trang và trong meta.
- ⚠ Xếp hạng theo độ phủ gợi ý Google, **chưa có số lượt tìm**.

## Bẫy riêng của template bất động sản
- **Nhiều đoạn là TÊN ICON Material Symbols** (`luggage`, `school`, `apartment`, `verified`, `calendar_month`,
  `account_tree`, `location_city`, `travel_explore`, `location_off`, `badge`, `balance`, `play_arrow`, và tên trong
  `{1}…{/1}`: `pool`, `fitness_center`, `attractions`, `workspaces`, `chair`, `support_agent`, `home`,
  `business_center`). **Dịch là vỡ icon** — đã giữ nguyên xi, B5 và B6 đã kiểm từng dòng.
- **28 chuỗi chữ NGOÀI tầm bộ rút** (`alt`, `aria-label`, `iframe title`, chuỗi JavaScript) đã dịch bằng
  `cong-cu/vet-chu-ngoai.py` với bảng `viec/2026-09-22-hy-lap-etolikou-11/chu-ngoai-bo-rut.tsv`.

## Đã phải SỬA MỘT LUẬT KIỂM (ghi theo yêu cầu của CLAUDE.md)
Bộ kiểm đọc "**170 m**" và "**500 m**" thành **170 triệu / 500 triệu** vì `m` là hệ số "million" của tiếng Anh.
Đây là **luật kiểm sai thật**, không phải lỗi của bài. Đã sửa `cong-cu/dich.py`: hệ số **một chữ cái** (`m`, `k`)
chỉ tính khi **dính liền** số (`US$5m`, `800k`); có dấu cách thì là đơn vị đo. Hệ số nhiều chữ cái
(`million`, `bn`, `mn`, `thousand`) vẫn tính khi có dấu cách. Đã thêm ca kiểm `test_m_dinh_lien_moi_la_trieu`;
**58 test xanh**.

## Quy đổi tiền
- **€250,000 giữ nguyên đơn vị**, không quy đổi USD. Nguồn trang này không có số VND.

## Chỗ đã làm mềm vì tuân thủ
- **s036 · s095 (B6, mức NẶNG):** buộc mức €250,000 vào **loại tài sản chuyển đổi công năng**, để người đọc
  không hiểu đó là mức chung của Golden Visa Hy Lạp.
- **s090:** nguồn viết "tài sản sinh lời và tích sản **an toàn** bằng ngoại tệ", "đặc quyền **vô giá**" →
  "**can be** more than an asset that produces income and holds value in a foreign currency". Giữ độ lớn của
  nguồn, bỏ đúng chữ tuyệt đối hoá.
- **s006:** "Còn suất" → "**Units available**" (thẻ bất động sản, không phải thẻ chương trình định cư).
- **Anh–Anh → Anh–Mỹ:** "letting" → "rentals", "owner-occupier" → "owner-occupant" (s035, s051, s053, s081).
- `#bo-qua-tn` ở s001, s091, s099, s124: "thường trú nhân Hy Lạp" → **Greece Golden Visa**.

## Góp ý của B5/B6 đã BÁC hoặc chọn phương án thứ ba
- **s090:** B5 muốn giữ đủ "tích sản an toàn", B6 muốn bỏ hẳn "income-producing". **Bác cả hai**, dùng phương án
  thứ ba ở trên (giữ cả hai ý của nguồn, bỏ chữ "an toàn").
- **s130 (B5 báo mức NẶNG):** cho rằng bản Anh ghi nhầm tên dự án khác. **Bác** — B5 đọc nhầm **cột gợi ý bộ nhớ
  dịch** (`tm`) thành cột `en`; bản dịch thực tế đã đúng "Etolikou 11 project".

## Nguồn có vẻ SAI hoặc cần CEO xác nhận — đã dịch đúng nguồn
1. **"Khoảng 15 phút đến sân bay quốc tế Athens" (s031) gần như chắc SAI.** Piraeus cách sân bay ATH khoảng
   50 km, thực tế 45–60 phút. Đây là dữ kiện dễ kiểm chứng nhất trên trang — sai sẽ mất uy tín ngay.
   **Cần sửa cả bản tiếng Việt.**
2. **"Tiêu chuẩn xây dựng hạng A" (s061)** — Hy Lạp không có hệ chứng nhận nào tên như vậy; người đọc Mỹ hiểu
   "Class A" là xếp hạng thị trường của toà nhà văn phòng. Cần nêu rõ theo tiêu chuẩn nào.
3. **Hero nêu "250.000 EUR" trần trụi, không chú thích loại tài sản** — chỗ dễ hiểu nhầm nhất cả trang.
4. **"Sinh sống, học tập và **kinh doanh**" (s108)** dễ bị hiểu là có quyền lao động tại Hy Lạp — cần xác nhận
   phạm vi quyền của người giữ thẻ Golden Visa.
5. **"Dự kiến hoàn thành Quý 4/2027"** — cần mốc cập nhật.
6. **"Tối ưu cho thuê" (s053)** là khẳng định hiệu quả khai thác không dẫn nguồn.

## Slug cũ cần 301
- Không có.

## Kết quả kiểm
- Cửa 0: **XANH**, 0 lỗi chặn, 15 cảnh báo đã giải trình.
- **B5: 1 điểm đã bác có lý do + 1 TRUNG BÌNH đã xử lý.** **B6: 21 dòng sửa** (2 mức NẶNG) + 4 điểm đưa lên CEO.
- **Liên kết:** trang không có liên kết nội bộ nào trỏ bản tiếng Việt.
