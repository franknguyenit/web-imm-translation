---
name: trang-chuong-trinh-chau-au-khong-dich-permanent-resident
description: Trang "Thường trú nhân <nước châu Âu>" dịch theo tên ngành (Golden Visa / Residency by Investment), không dịch "permanent resident"
metadata:
  type: project
---

Các trang chương trình châu Âu của immgroup.com đặt tên theo mẫu "Thường trú nhân <nước>"
(Hy Lạp, Ireland, Cyprus, Latvia, Malta, Bồ Đào Nha, Hungary, Bulgaria). Bản tiếng Anh dùng
**"<Nước> Golden Visa"** hoặc **"<Nước> Residency by Investment"**, KHÔNG dùng "permanent resident".

**Why:** các chương trình này cấp thẻ cư trú có thời hạn (Hy Lạp: 5 năm, gia hạn 5 năm/lần; Ireland Stamp 4:
2 → 3 → 5 năm), không phải thường trú vĩnh viễn — dịch "permanent resident" là sai dữ kiện và là rủi ro tuân thủ.
Ngoài ra nghiên cứu từ khoá 21/09/2026 cho thấy người tìm gõ "greece golden visa" / "ireland golden visa",
không ai gõ "greece permanent residence".

**How to apply:** dòng `thường trú nhân` trong `thuat-ngu/thuat-ngu.csv` có `trang_thai=chot` nên bộ kiểm
báo **LỖI CHẶN** ở mọi đoạn loại này. Hai cách, dùng cách nào cũng được:

1. **Gắn cờ từng đoạn:** `[sXXX|#bo-qua-tn: lý do] text`. Trang Hy Lạp 21/09/2026 cần 13 cờ; trang Ireland
   cùng ngày cần 11 cờ.
2. **Cách gọn hơn (học 21/09/2026):** thêm dòng riêng `thường trú nhân <nước>` → `<Nước> Golden Visa` với
   `trang_thai=goi-y` vào CSV; bộ kiểm khớp cụm dài hơn nên chỉ còn cảnh báo ở nhãn liên kết sang các nước
   CHƯA có dòng riêng (trang Hy Lạp: từ 13 cờ xuống 8). Làm dòng tương tự khi dịch từng nước mới.

**ĐỪNG sửa hay xoá dòng `thường trú nhân`** — nó vẫn đúng cho trang Mỹ / thẻ xanh.

**Ngoại lệ:** trong câu hỏi đáp so sánh khái niệm ("Golden Visa có khác thường trú nhân không?") thì **được**
dùng "permanent residence" — đó là so sánh khái niệm, không phải tên sản phẩm.

**Khối liên kết "Có thể bạn quan tâm" là nơi tốn cờ nhất** (Ireland: 8/11 cờ nằm ở đây). Phải **dùng lại y
nguyên tên đã chốt trên site**: "Greece Golden Visa", "Cyprus / Latvia / Malta / Portugal / Hungary / Bulgaria
Residency by Investment", "European Citizenship & Residency".

Xem `viec/2026-09-21-thuong-tru-nhan-hy-lap/` · `viec/2026-09-21-thuong-tru-nhan-ireland/` ·
[[hy-lap-cho-ceo-xac-nhan]] · [[ireland-cho-ceo-xac-nhan]] · [[tm-lay-nham-cau-cua-trang-nuoc-khac]].
