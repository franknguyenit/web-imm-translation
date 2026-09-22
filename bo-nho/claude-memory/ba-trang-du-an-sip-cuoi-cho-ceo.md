---
name: ba-trang-du-an-sip-cuoi-cho-ceo
description: Park Residence · Centro Limassol · Aktea Residence 4 — điểm chờ CEO chốt và lỗi "European residence" trượt cả ba trang
metadata:
  type: project
---

Ba trang dự án BĐS Síp cuối (dịch 22/09/2026, nâng loạt Síp lên **9 trang**): `sip-park-residences`,
`sip-centro-limassol`, `sip-aktea-residence-4` — đều của chủ đầu tư **Cybarco**, đều đi đường
`rut-layout.py` từ `dist/*.html`, bàn giao `tmp-info.en.php`.

**Lỗi trượt hệ thống cả ba trang:** đoạn mở khối thường trú ("mở ra đặc quyền thường trú **châu Âu** vô giá")
bị dịch thành *"a route to European residence"* — **đá thẳng với đoạn tuân thủ ngay trong cùng trang**
(PR Síp không cho quyền sống/làm việc toàn EU). Cả 6 agent B5/B6 đều bắt, mức NẶNG. Bản đúng đã có sẵn ở
Elysia Blu và Seaview Heights: *"held in euros … a route to permanent residence in Cyprus"*. Bài học: khi TM
gợi ý 94% và mình phải thay tên dự án, **đừng tiện tay viết lại phần còn lại của câu** — phần còn lại đã qua
hai cửa soát ở trang trước. Xem [[tm-lay-nham-cau-cua-trang-nuoc-khac]].

**Bẫy Anh-Anh của template BĐS** (B6 bắt ở cả ba): `letting support` · `timber` · `video door entry` ·
`EV charging point` · `intruder alarm` · `upmarket` — đều đã vào `thuat-ngu.csv`.

**Điểm chờ CEO (ngoài hai điểm cũ: thuế 12,5% vs 15%, nhập tịch 8/11 năm):**
- **Aktea Residence 4: mốc bàn giao "Quý 4/2026" đã tới nơi** (dịch ngày 22/09/2026) mà "Tiến độ dự án" vẫn
  trống và bảng ghi "Đang xây dựng". Rủi ro minh bạch với người mua off-plan.
- **Park Residence: nguồn gõ sai "Nicossia"**, và tên dự án nói hai kiểu ("Park Residence" ở H1 vs
  "Park Residences Nicosia" ở thân bài).
- **URL trang Việt của Aktea ghi "aktea-residences-4"** (số nhiều) trong khi tên dự án là số ít.
- **"Lâu đài Cổ đại"**: nguồn KHÔNG nêu tên riêng. Hai agent B6 mâu thuẫn nhau; đã chốt dịch **"the historic
  castle"** ở cả hai trang, không tự đặt "Limassol Castle".
- **Dấu `–` trang trí trong H2** ("Căn hộ cao cấp tại – {Paphos}") đã **bỏ** ở ba trang này; 6 trang Síp bàn
  giao trước còn giữ ("Premium apartments in – {Paphos}") — đề nghị team sửa đồng bộ.
- **"Prepare the file"** (dùng chung cả 9 trang) là dịch cứng; B6 Centro đòi đổi thành "Prepare your
  application". Đã **bác để giữ nhất quán**; ghi lại như ứng viên **sửa đồng loạt cả loạt**, không sửa lẻ.

Xem thêm [[sip-khac-hy-lap-thuong-tru-that]], [[trang-du-an-bds-template-html]].
