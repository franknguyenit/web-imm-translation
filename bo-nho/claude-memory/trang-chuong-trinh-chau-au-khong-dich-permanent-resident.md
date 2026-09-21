---
name: trang-chuong-trinh-chau-au-khong-dich-permanent-resident
description: "Trang \"Thường trú nhân <nước châu Âu>\" dịch theo tên ngành (Golden Visa / Residency by Investment), không dịch \"permanent resident\""
metadata: 
  node_type: memory
  type: project
  originSessionId: 435a9eb0-4ad7-4f63-8020-cd743837e165
---

Các trang chương trình châu Âu của immgroup.com đặt tên theo mẫu "Thường trú nhân <nước>"
(Hy Lạp, Ireland, Cyprus, Latvia, Malta, Bồ Đào Nha, Hungary, Bulgaria). Bản tiếng Anh dùng
**"<Nước> Golden Visa"** hoặc **"<Nước> Residency by Investment"**, KHÔNG dùng "permanent resident".

**Why:** các chương trình này cấp thẻ cư trú có thời hạn (Hy Lạp: 5 năm, gia hạn 5 năm/lần), không phải
thường trú vĩnh viễn — dịch "permanent resident" là sai dữ kiện và là rủi ro tuân thủ. Ngoài ra nghiên cứu
từ khoá 21/09/2026 cho thấy người tìm gõ "greece golden visa", không ai gõ "greece permanent residence".

**How to apply:** dòng `thường trú nhân` trong `thuat-ngu/thuat-ngu.csv` có `trang_thai=chot` nên bộ kiểm
sẽ báo LỖI CHẶN ở mọi đoạn loại này. Gắn cờ `#bo-qua-tn: <lý do>` cho từng đoạn (dạng
`[sXXX|#bo-qua-tn: lý do] text`) — ĐỪNG sửa `thuat-ngu.csv` để cho qua, vì dòng đó vẫn đúng cho trang
Mỹ / thẻ xanh. Trang Hy Lạp 21/09/2026 cần 13 cờ như vậy. Xem `viec/2026-09-21-thuong-tru-nhan-hy-lap/`.

**Ireland (21/09/2026) xác nhận lại quy tắc này, cần 11 cờ:** 3 cờ cho tiêu đề trang (s001 post_title,
s009 H1, s015 H2 → "Ireland Golden Visa") và 8 cờ cho khối liên kết "Có thể bạn quan tâm" (s078–s085), nơi
phải **dùng lại y nguyên tên đã chốt trên site** — "Greece Golden Visa", "Cyprus / Latvia / Malta / Portugal /
Hungary / Bulgaria Residency by Investment", "European Citizenship & Residency". Riêng Ireland thì Stamp 4 là
quyền cư trú có thời hạn (2 → 3 → 5 năm), càng không được gọi là permanent residence.
Xem `viec/2026-09-21-thuong-tru-nhan-ireland/` · [[tm-lay-nham-cau-cua-trang-nuoc-khac]].
