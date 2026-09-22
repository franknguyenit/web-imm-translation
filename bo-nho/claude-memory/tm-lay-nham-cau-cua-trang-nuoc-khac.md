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

**Lan sang cả trang khác châu lục.** Ngay việc kế tiếp (Grenada, cùng ngày 21/09/2026) dính tiếp: s049
"Điều kiện tham gia chương trình" nhận `TM 100%: "**Ireland golden visa requirements**"` — câu vừa nạp vào bộ nhớ
dịch vài phút trước — và s089 "Cuộc sống tại Grenada" nhận `TM 85%: "Living in **Ireland**"`. Nghĩa là **càng dịch
nhiều trang cùng template, bẫy càng dày**, không riêng các nước châu Âu.

**How to apply:** trong lời giao cho sub-agent dịch, luôn có dòng cảnh báo: *"hễ gợi ý TM nhắc tên nước khác
thì bỏ, dịch lại"*, và nhắc riêng các đoạn nghi ngờ. Đừng chạy `dien --tm100` cho trang chương trình dùng
template `content-product-2026` nếu chưa đọc qua từng gợi ý — nhất là các đoạn tiêu đề chung
("Điều kiện tham gia chương trình", "Cuộc sống tại <nước>", "Rủi ro đầu tư", "Có thể bạn quan tâm").
Xem [[trang-chuong-trinh-chau-au-khong-dich-permanent-resident]] · [[grenada-cho-ceo-xac-nhan]].

## Biến thể thứ hai: TM đúng nước, SAI THÌ và SAI TÊN BƯỚC của tỉnh bang khác (Nova Scotia, 22/09/2026)

Đến trang tỉnh bang Canada thứ 7 thì bẫy đổi dạng: gợi ý TM **đúng chủ đề, đúng ngôn ngữ, nhưng sai bối cảnh**.

- **Sai thì.** TM trả về câu của **Ontario** — chương trình ĐÃ ĐÓNG nên bản dịch cũ viết ở **thì quá khứ**:
  s004 `TM 92%: "The stream **was designed** for business owners…"`, s005 `TM 94%: "Investors **had to run**…"`,
  s045 `TM 100%: "The applicant's eligibility… **were assessed**"`. Nova Scotia **đang mở** ⇒ phải viết thì hiện tại.
  `--tm100` sẽ lấp thẳng câu quá khứ vào một trang chương trình còn mở mà cửa 0 không bắt được.
- **Sai tên bước.** TM trả về câu của **British Columbia**: s048 `TM 100%: "Submit your registration (EOI)"` —
  B.C. dùng chữ *registration*, Nova Scotia dùng **EOI**; s056 `TM 100%: "Move to **BC** to invest…"`.
- **Sai tên tài liệu.** `thuat-ngu.csv` ghi "business performance agreement **(sai)**" theo phạm vi B.C., nhưng với
  Nova Scotia thì **Business Performance Agreement mới là đúng**. Đã tách thành hai dòng CSV theo tỉnh bang.

**How to apply:** trước khi dịch một trang tỉnh bang / nước mới, kiểm **chương trình còn mở hay đã đóng** rồi mới
đọc gợi ý TM; gợi ý `TM 100%` vẫn phải soi **thì động từ, tên tỉnh bang, tên bước hồ sơ**. Quy tắc gọn:
*TM cho chữ, không cho bối cảnh.*
