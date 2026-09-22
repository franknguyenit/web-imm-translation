---
name: trang-du-an-bds-template-html
description: Trang dự án bất động sản dựng bằng template-bds-imm — đường dịch, bẫy icon, và cái bẫy 250.000 EUR của Golden Visa Hy Lạp
metadata:
  type: project
---

Trang dự án bất động sản của IMM nằm ở repo riêng `~/Claude/Projects/template-bds-imm/du-an/<slug>/`:
`noi-dung.json` (chữ) + `khuon.mustache.html` (khuôn) → `node build.js` → `dist/<slug>.html`.
**CEO 22/09/2026 đưa tệp `dist/*.html` và yêu cầu đầu ra có `tmp-info.en.php`** — tức đi đường
`rut-layout.py rut/nhet` giữ nguyên byte markup, không dịch `noi-dung.json`. (Đã nêu với CEO rằng dịch
`noi-dung.json` sẽ sạch hơn; CEO vẫn chọn đường HTML.)

**Ba bẫy phải nhớ:**
1. **Tên icon Material Symbols bị bộ rút bắt như chữ** (`apartment`, `paid`, `pool`, `play_arrow`, `verified`…),
   kể cả nằm trong `{1}…{/1}`. Dịch là **vỡ icon**. Phải dặn bằng chữ trong lời giao cho cả B5 và B6.
2. **Rất nhiều chữ nằm ngoài tầm bộ rút**: `alt`, `aria-label`, `iframe title`, và **chuỗi trong JavaScript**
   ("Xem thêm … ảnh dự án", "Media tiếp theo", "Đóng"). Dùng `cong-cu/vet-chu-ngoai.py` + bảng
   `viec/<việc>/chu-ngoai-bo-rut.tsv`. Bảng phải **sắp chuỗi dài trước** (tool tự sắp) — nếu không
   "Video dự án" sẽ nuốt mất "Video dự án căn hộ dịch vụ Etolikou 11".
3. **Mức 250.000 EUR của Golden Visa Hy Lạp chỉ áp cho bất động sản CHUYỂN ĐỔI CÔNG NĂNG.** Để con số đứng trần
   là làm người đọc quốc tế tưởng đó là mức chung (mức chung cao hơn nhiều). B6 bắt lỗi này ở **cả hai** trang.

**Điểm chờ CEO của hai trang 22/09/2026:** Etolikou 11 ghi "khoảng 15 phút đến sân bay quốc tế Athens" —
thực tế ~50 km, 45–60 phút, **sai ở cả bản tiếng Việt**; "Tiêu chuẩn xây dựng hạng A" không có hệ chứng nhận nào
ở Hy Lạp. Kastella Bay ghi "sở hữu vĩnh viễn, toàn quyền **bán**" nhưng điều kiện giữ thẻ là **duy trì quyền sở
hữu** — bán là mất thẻ; mục "Tiến độ dự án" để trống trong khi trang đang chào bán.

Xem thêm [[nam-trang-truc-22-09-cho-ceo]], [[trang-chuong-trinh-chau-au-khong-dich-permanent-resident]].
