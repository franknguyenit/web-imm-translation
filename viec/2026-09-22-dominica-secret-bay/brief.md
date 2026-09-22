# Brief — Dự án Secret Bay (Dominica) — template HTML thuần của theme

- **Mục đích:** trang **dự án resort** bán suất **cổ phần bất động sản trong dự án được Chính phủ Dominica phê
  duyệt**, kèm lộ trình **quốc tịch Dominica (CBI)**. Đây là trang CBI, **KHÔNG phải trang thường trú** như mảng Síp.
- **Khác 9 trang BĐS Síp:** sản phẩm là **cổ phần trong resort đang vận hành**, không phải căn hộ để ở ⇒ người đọc
  quan tâm hộ chiếu + dòng tiền, không quan tâm phòng ngủ. Resort đã hoạt động (khác các dự án Síp còn xây).
- **Người đọc:** nhà đầu tư quốc tế muốn quốc tịch thứ hai nhanh, chi phí thấp nhất nhóm Caribbean.
- **Giọng:** cố vấn điềm tĩnh; trang này **nhiều lời hứa lợi nhuận nhất mẻ** nên phần lớn việc là rào lại.

## Từ khoá (B3 — độ phủ gợi ý Google 6 thị trường, CHƯA có số lượt tìm)
- **Chính: `dominica citizenship by investment real estate`** (6/6 thị trường). Trang nước
  (`2026-09-22-quoc-tich-dominica`) đã lấy `dominica citizenship by investment` trần ⇒ trang dự án lấy nhánh
  **real estate** để không giành cùng truy vấn.
- Phụ: `dominica citizenship by investment cost` · `can foreigners buy property in dominica` ·
  `how to get dominica citizenship` · `dominica approved real estate projects` · `dominica second passport`.
- WebSearch: 5 kết quả đầu do **cbiu.gov.dm** (trang chính phủ) thống trị + Harvey Law, Global Citizen Solutions.
  Chính phủ xác nhận **ngưỡng BĐS là US$200,000** và **giữ 3 năm kể từ ngày được cấp quốc tịch**.

## Phân đoạn dịch sát / viết lại / bỏ
| Khối | Cách làm |
|---|---|
| s005–s007, s034–s046 (bảng thông số), s082–s091 (lộ trình CBI), s096–s108 | **dịch sát** |
| s002–s003 (hero), H2 (s018, s029, s047, s064, s082, s092, s109), CTA (s004, s033, s110) | **viết lại** |
| s048, s050, s052, s054, s067, s070, s073, s094, s099, s104, s113 | **GIỮ NGUYÊN XI** — tên icon Material Symbols |
| s095, s100, s105 (`01/02/03`) | giữ nguyên |
| Không có đoạn nào chỉ hợp khách Việt ⇒ **không bỏ đoạn nào** |

## Luật thuật ngữ mảng Dominica / CBI
- **"Dominica" làm định ngữ, KHÔNG dùng "Dominican"** — ngành hiểu là **Dominican Republic**, nước khác.
- "quốc tịch" → `citizenship`; chương trình → `Citizenship by Investment (CBI) Program`.
- "cổ phần bất động sản trong dự án được phê duyệt" → `a share in a government-approved real estate project`.
- "tích sản bằng ngoại tệ" → `a store of value held in US dollars` (bỏ "an toàn"; không viết "foreign currency").

## Bẫy riêng của template BĐS
- **Tên icon Material Symbols** (kể cả trong `{1}…{/1}`) — dịch là **vỡ icon**.
- **Chữ ngoài tầm bộ rút** (`alt`, `aria-label`, chuỗi JavaScript) dịch bằng `cong-cu/vet-chu-ngoai.py`;
  trang này có **24 chuỗi alt "Hình dự án Secret Bay 1…21"** — phải khai đủ, sắp chuỗi dài trước.
- `rut-layout.py rut` giữ vị trí byte; `moi` cần `--bo-chuyen theme-layout-2026`.
- **Cửa kiểm 1 đã chạy:** nhét lại bản tiếng Việt → tệp ra **giống tệp gốc từng byte ✓**

## Điều phải ghi báo cáo cho CEO
- **s055 hứa lợi nhuận:** "3-6%/năm" + "nhận **lãi suất** theo từng quý" — đây là **cổ phần**, không phải khoản
  vay có lãi suất; và trang Dominica **thiếu câu rào** mà trang Grenada cùng mẻ có. Bản Anh dùng
  `projected`/`distributions`, không hứa.
- **s043 "Mức đầu tư trên bài gốc"** — nhãn biên tập **nội bộ lọt vào bảng thông số khách đọc**.
- **s108 là ghi chú biên tập nội bộ lọt vào trang khách:** "Con số này cần được kiểm chứng lại; Anh Quốc hiện yêu
  cầu công dân Dominica xin visa." Lặp đúng lỗi của trang Quốc tịch Grenada 21/09.
- **US$212,000 vs ngưỡng chính thức US$200,000** (cbiu.gov.dm) — nguồn không giải thích chênh lệch.
- **s047/s049 xếp hạng Travel + Leisure không ghi NĂM**; nguồn viết sai tên tạp chí ("Travel & Leisure").
- **s053 "9 năm thành công liên tiếp"** không ghi mốc bắt đầu ⇒ sẽ lỗi thời.
