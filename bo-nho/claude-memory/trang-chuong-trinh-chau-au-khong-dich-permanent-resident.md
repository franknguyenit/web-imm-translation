---
name: trang-chuong-trinh-chau-au-khong-dich-permanent-resident
description: Trang "Thường trú nhân <nước châu Âu>" dịch theo tên ngành (Golden Visa / Residency by Investment), không dịch "permanent resident"
metadata:
  type: project
---

Các trang chương trình châu Âu của immgroup.com đặt tên theo mẫu "Thường trú nhân <nước>"
(Hy Lạp, Ireland, Cyprus, Latvia, Malta, Bồ Đào Nha, Hungary, Bulgaria). Bản tiếng Anh dùng
**"<Nước> Golden Visa"** hoặc **"<Nước> Residency by Investment"**, KHÔNG dùng "permanent resident".

**Why:** các chương trình này cấp thẻ cư trú có thời hạn (Hy Lạp: 5 năm, gia hạn 5 năm/lần), không phải
thường trú vĩnh viễn — dịch "permanent resident" là sai dữ kiện và là rủi ro tuân thủ. Ngoài ra nghiên cứu
từ khoá 21/09/2026 cho thấy người tìm gõ "greece golden visa", không ai gõ "greece permanent residence".

**How to apply:** dòng `thường trú nhân` trong `thuat-ngu/thuat-ngu.csv` có `trang_thai=chot` nên bộ kiểm
báo cảnh báo ở mọi đoạn loại này. Gắn cờ `#bo-qua-tn: <lý do>` cho từng đoạn (dạng
`[sXXX|#bo-qua-tn: lý do] text`) — ĐỪNG sửa dòng `thường trú nhân`, vì nó vẫn đúng cho trang Mỹ / thẻ xanh.
**Cách gọn hơn (học 21/09/2026):** thêm dòng riêng `thường trú nhân <nước>` → `<Nước> Golden Visa` với
`trang_thai=goi-y` vào CSV; bộ kiểm khớp cụm dài hơn nên chỉ còn cảnh báo ở nhãn liên kết sang các nước
CHƯA có dòng riêng (trang Hy Lạp: từ 13 cờ xuống 8). Làm dòng tương tự khi dịch từng nước mới.
Ngoại lệ: trong câu hỏi đáp so sánh khái niệm ("Golden Visa có khác thường trú nhân không?") thì **được**
dùng "permanent residence" — đó là so sánh khái niệm, không phải tên sản phẩm.
**Ngoại lệ đã kiểm 22/09/2026 — ba nước KHÔNG áp dụng luật này:** Bulgaria, Cộng hòa Síp và Malta **thật sự cấp
quyền thường trú** (Bulgaria cấp thẻ thường trú ngay, không qua tạm trú; Síp cấp PR giữ khi còn duy trì đầu tư;
Malta có tên chính thức *Malta Permanent Residence Programme — MPRP*). Với ba nước này, **"permanent residence"
trong thân bài là ĐÚNG dữ kiện, phải dùng**. Chỉ tiêu đề trang, H1 và nhãn mục mới dùng tên sản phẩm
"<Nước> Golden Visa" — lý do là SEO (người tìm gõ "golden visa"), không phải vì dữ kiện. Nghiên cứu từ khoá
22/09/2026 xác nhận: riêng Bulgaria nhánh "permanent residency" mạnh ngang nhánh "golden visa", còn Malta thì
chính tên pháp lý MPRP cũng là từ khoá thật.
Chốt lại cách làm: kiểm chương trình cấp **thẻ có thời hạn** (Hy Lạp, Ireland) hay **quy chế thường trú**
(Bulgaria, Síp, Malta) trước, rồi mới chọn chữ.

Xem `viec/2026-09-21-thuong-tru-nhan-hy-lap/`, `viec/2026-09-22-thuong-tru-nhan-malta/` và
[[hy-lap-cho-ceo-xac-nhan]], [[bon-trang-chau-au-22-09-cho-ceo]].
