---
name: ontario-canada-trang-chuong-trinh-da-dong
description: Trang chương trình ĐÃ ĐÓNG (Ontario Entrepreneur Stream) — đổi thời động từ, "Closed" là lợi thế SEO; và bẫy tệp export lang=vi mang post_id trang Việt
metadata:
  node_type: memory
  type: project
  originSessionId: session_01CaAgAc6iqh5C5bpMByMErC
---

Việc `2026-09-22-dinh-cu-canada-ontario` (Cowork, 22/09/2026).

## 1. Bẫy nặng nhất: tệp export ACF là của TRANG TIẾNG VIỆT

`nguon.json` có `"lang": "vi"` và `post_id: 24338` — đó là ID của **bài tiếng Việt**. Nếu team import
`ban-giao/<slug>.en.json` vào đúng post_id đó thì **nội dung tiếng Anh ghi đè trang tiếng Việt đang chạy**.
`moi` và `ghep` **KHÔNG cảnh báo** việc này (chúng chỉ cảnh báo khi *thiếu* `post_id`).

**Why:** luồng đúng (CEO chốt 18/09/2026) là export JSON của **trang tiếng Anh** sau khi WPML nhân bản và bật
"Translate independently". Người xuất tệp dễ xuất từ trang Việt vì đang mở trang đó.

**Việc phải làm mỗi lần `moi` xong:** đọc trường `lang` trong `meta.json`/`nguon.json`. Thấy `vi` → vẫn dịch
bình thường, nhưng ghi chú bàn giao **phải cảnh báo team lấy đúng post_id trang tiếng Anh trước khi Nhập**.

## 2. Trang chương trình đã đóng: đổi thời động từ, không dịch sát thời hiện tại

Nguồn viết thời hiện tại như chương trình đang mở, trong khi chính nguồn nói nó đã đóng. Dịch sát sẽ để nhà đầu tư
quốc tế hiểu là còn nộp được — rủi ro tuân thủ. Cách đã dùng và được cả B5 lẫn B6 xác nhận là đọc tự nhiên:

- **quá khứ** cho cơ chế chương trình: điều kiện, quyền lợi, quy trình ("the stream was designed for…",
  "investors had to…", "the province required no security deposit");
- **hiện tại** cho: thông báo đã đóng, dữ kiện chung về nước đó, và **quyền của thường trú nhân** (con học đại học
  theo học phí bản xứ, sau khi có PR được sống ở tỉnh bang khác);
- tiêu đề mục để **dạng danh từ** cho khỏi phải chọn thời ("Relocation for the whole family", "No age limit").

Gợi ý bộ nhớ dịch TM 100% có thể sai vì thời: "Why investors **choose** this program" → phải đổi thành "chose".

## 3. "Closed" trong meta title là lợi thế SEO, không phải điều cần che

Đối thủ 2026 đặt hẳn "OINP Entrepreneur Stream Closed: Alternatives" — vì người tìm **đang hỏi chương trình còn
mở không** (đúng mẫu Ireland: "does ireland have a golden visa program" 24 lần). Nên `meta_title` ghi
"Ontario Entrepreneur Stream: Program Closed | IMM Group": trung thực và khớp ý định tìm kiếm.

## 4. Cowork chặn mạng của `tukhoa` và `tygia` ở CẢ HAI phía

Shell trên máy CEO (`device_bash`) báo `403 Forbidden` qua tunnel; container cloud thì `curl` tới
`suggestqueries.google.com` và `open.er-api.com` trả rỗng. **Chỉ `WebSearch` chạy được.** Hệ quả:

- Từ khoá xếp hạng theo **tiêu đề 20 kết quả đầu của WebSearch**, không có gợi ý tự hoàn thành và không có số
  lượt tìm — phải ghi rõ trong `brief.md` và trong báo cáo.
- `ty-gia.json` ghi tay, nêu rõ nguồn là tỷ giá lấy trong cùng ngày cho việc khác của dự án.
- `bash cong-cu/dong-bo-bo-nho.sh` **luôn ĐỎ trong Cowork** ("memory Claude 0 tệp, local 9 tệp"): thư mục
  `~/.claude/projects/<đường-dẫn-mã-hoá>/memory` không tồn tại vì (a) Cowork chỉ thấy thư mục dự án được nối, (b)
  đường dẫn dự án trên máy này là `/Users/kiennh23/Claude/Projects/Web IMM Translation`, khác đường dẫn trong
  skill (`/Users/mac/Claude/Projects/web-imm-translation`). **Đừng sửa script cho nó xanh.** Ghi memory và bài học
  skill vào bản local trong repo (`bo-nho/`), rồi phiên Claude Code chạy trong thư mục dự án sẽ đẩy lên.

## 5. Thuật ngữ Canada — bổ sung cho bài học PEI

- **"social programs" / "social benefits"**, KHÔNG dùng **"Social Security"** (định chế Mỹ). Bộ nhớ dịch gợi ý
  "Welfare, benefits and Social Security in the U.S." ở mức 89%; luồng chính sửa thành "…in Canada" và **vẫn sai** —
  chỉ bắt được khi đọc lại `seo/tu-khoa-thi-truong.md` (dòng PEI đã ghi đúng bài học này). **Đọc file từ khoá trước
  khi chốt nhãn liên kết, đừng chỉ dựa vào cửa 0.**
- **province**, không phải "state" (nguồn Việt viết "Bang British Columbia", "Bang Nova Scotia").
- **net worth**, không phải "total assets" (mức xét là tài sản ròng).
- **security deposit** (đặt cọc cam kết với tỉnh bang) ≠ **escrow account** (ký quỹ EB-5) — hai dòng CSV khác nhau.
- Nguồn viết sai tên tỉnh bang **"Manioba"** → bản dịch ghi đúng **Manitoba**, nêu trong báo cáo.

## 6. Nguồn Ontario lỗi thời / thiếu — đã đưa lên mục CEO quyết

- Ba mức **C$400.000 tổng tài sản · C$200.000 đầu tư · 1 việc làm** chỉ áp cho doanh nghiệp **ngoài Greater Toronto
  Area** (trong GTA: C$800.000 · C$600.000 · **2 việc làm**) — mà trang lại lấy Toronto làm điểm hấp dẫn.
- Mốc **"18 tháng"** tạo việc làm không khớp OINP (việc làm duy trì ≥10 tháng tới Final Report; triển khai 20 tháng).
- Mốc đóng **"tháng 2/2024"** của trang IMM lệch cả hai mốc thật: tạm ngưng 04/12/2023, đóng hẳn **04/11/2024**.
- Thiếu bước **đề cử của tỉnh bang (nomination)** trước khi nộp PR lên liên bang.
- Thiếu điều kiện **sở hữu tối thiểu 33,3% vốn**.
- Ba lời quảng bá không tìm thấy trong tài liệu OINP: "chỉ cần tốt nghiệp THPT", "không giới hạn tuổi",
  "không yêu cầu ký quỹ".
