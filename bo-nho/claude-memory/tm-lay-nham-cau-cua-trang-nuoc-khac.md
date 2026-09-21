---
name: tm-lay-nham-cau-cua-trang-nuoc-khac
description: Bộ nhớ dịch gợi ý nhầm câu của trang nước khác (Hy Lạp → Ireland) — phải kiểm tên nước trong mọi gợi ý TM
metadata: 
  node_type: memory
  type: project
  originSessionId: 435a9eb0-4ad7-4f63-8020-cd743837e165
---

Các trang chương trình châu Âu của immgroup.com dùng **chung một khung nội dung**, nên bộ nhớ dịch cho gợi ý
`TM 85–100%` là câu của **nước khác**. Việc Ireland 21/09/2026 dính 3 lần, trong đó một lần **ngược nghĩa**:

- s192 gợi ý "What are the risks of a **Greece** Golden Visa investment?" (TM 100%)
- s237 gợi ý "How many days a year do I have to spend in **Greece**?" (TM 85%)
- s218 gợi ý "**Parents can be included** in the application" (TM 92%) — nguồn Ireland nói bố mẹ **KHÔNG**
  được đi kèm hồ sơ. Dùng lại gợi ý này là sai hoàn toàn dữ kiện.

**Why:** `dich.py` so khớp theo chữ tiếng Việt, mà hai trang chỉ khác nhau ở tên nước và vài con số — độ khớp
vẫn rất cao. `--tm100` tự lấp thì lỗi lọt thẳng vào bản giao mà cửa 0 không bắt được (không phải lỗi số,
không phải lỗi thuật ngữ).

**How to apply:** trong lời giao cho sub-agent dịch, luôn có dòng cảnh báo: *"hễ gợi ý TM nhắc tên nước khác
thì bỏ, dịch lại"*, và nhắc riêng các đoạn nghi ngờ. Đừng chạy `dien --tm100` cho trang chương trình châu Âu
nếu chưa đọc qua từng gợi ý. Xem [[trang-chuong-trinh-chau-au-khong-dich-permanent-resident]].
