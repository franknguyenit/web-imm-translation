# Soát song ngữ — viec/2026-09-22-ov-uc

Đối chiếu toàn bộ 352 dòng `song-ngu.tsv` cột `vi` với `en`. Đã đối chiếu chéo số liệu AUD/tháng/ngày/mã visa
(188A/B/C, 888A/B/C) giữa các mục lặp lại (Tổng quan, Bảng so sánh, từng trang con, Lộ trình) — khớp nội bộ,
không phát hiện sai số liệu hay lệch mã visa nào. Cơ cấu đầu tư cộng khớp: 188B = 500k+750k+1,25 triệu =
2,5 triệu AUD; 188C = 1 triệu+1,5 triệu+2,5 triệu = 5 triệu AUD.

## Lỗi thuật ngữ (VỪA)

- **s150, s193** — "Quỹ đầu tư cân bằng" dịch thành "balancing investment funds" (sai ngữ pháp/thuật ngữ tài
  chính). Thuật ngữ chuẩn ngành là "balanced fund". Đề xuất sửa "balanced investment funds" — NGẮN HƠN bản hiện
  tại 1 ký tự, không vượt ngân sách ô.

## Rủi ro tuân thủ — mục được yêu cầu chú ý riêng (NẶNG)

- **s175–s177 (188C, "Lãi suất 8–10%/năm (TB)")** — Bản Anh đã làm mềm đúng hướng: "Lãi suất" (interest rate,
  ngụ ý cố định) → "Return" (lợi nhuận đầu tư, đúng bản chất quỹ hơn). Nhưng con số 8–10%/năm vẫn hiện thành
  thẻ số nổi bật (stat card) cho nhà đầu tư quốc tế mà KHÔNG có chữ hạn định kiểu "historical" / "not
  guaranteed" / "past performance". Theo mục 3 style guide (cấm hứa chắc kết quả, đặc biệt sản phẩm đầu tư có
  rủi ro), đây là rủi ro tuân thủ ở các thị trường Mỹ/Anh/Singapore/UAE khi quảng cáo mức lợi nhuận cụ thể.
  Đề xuất trong `sua-song-ngu.txt`: thêm "historical" vào s177 (DÀI HƠN bản hiện tại — xem ghi chú). Việc có
  thêm hẳn một dòng "không đảm bảo lợi nhuận" ở mục Lưu ý 188C (s204–s207) hay không là quyết định nội dung,
  vượt phạm vi sửa câu của B5 — đề nghị B6/gom hoặc CEO quyết, ghi vào báo cáo mục "đã làm mềm".

## Nhất quán thuật ngữ — không bắt buộc sửa (NHẸ)

- **s255** "Closed to new files" vs **s276** "Closed to new applications" cho cùng khái niệm "ngừng nhận hồ sơ
  mới". Khác nhau vì s255 nằm trong ô trạng thái ngắn (ngân sách ký tự), giữ nguyên hợp lý — chỉ ghi chú, không
  đề xuất sửa vì "applications" sẽ tràn ô.
- **s071** "Residence for PR" dùng viết tắt "PR" mà "permanent residence" chưa từng được viết đủ trước đó trong
  bài. Chấp nhận được vì đây là nhãn hàng ngắn (~12 ký tự) trong bảng so sánh — chỉ ghi chú.
- **s305** "nominating states" thiếu "or territories" trong khi s100/s143/s188/s299 đều dùng "state(s) or
  territory/territories" nhất quán. Đây là câu văn thường (không phải ô bảng), đề xuất sửa — xem
  `sua-song-ngu.txt`.

## Nội dung Việt Nam bị bỏ không gắn cờ `#bo:` — để bổ sung báo cáo (NHẸ, đúng hướng nhưng thiếu vết)

- **s288** "cho doanh nhân Việt Nam" bị bỏ hẳn khi dịch câu giới thiệu công ty — đúng mục 4 style guide (không
  mặc định khách Việt) nhưng cột `ghi_chu` không có `#bo:` để lưu vết.
- **s292** "gia đình Việt" → "families" (bỏ quốc tịch) — đúng mục 4, thiếu ghi chú.
- **s351** "Những người Việt thành công trên đất Úc" → "Immigrant success stories in Australia" (bỏ quốc tịch)
  — đúng mục 4, thiếu ghi chú.

Đề nghị liệt kê ba đoạn này vào `bao-cao.md` mục "đoạn đã bỏ hoặc viết chung vì ngữ cảnh Việt" (không cần sửa
lại bản dịch — bản dịch hiện tại đã đúng chuẩn quốc tế hoá).

## Không phát hiện

Không có sai nghĩa, sót ý nghiêm trọng, số liệu/ngày/mốc thời gian/mã visa/tên tiểu bang/cơ quan sai, hay thẻ
`{1}…{/1}`/`{br}` thiếu/thừa trong các dòng đã rà.
