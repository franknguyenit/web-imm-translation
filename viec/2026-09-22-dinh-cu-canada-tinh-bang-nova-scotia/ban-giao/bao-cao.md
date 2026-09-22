# Báo cáo dịch — Định cư Canada tỉnh bang Nova Scotia

- **Nguồn:** tệp JSON xuất từ ACF Page Importer, CEO đính kèm ngày 22/09/2026.
  `viec/nhap/2026-09-22-dinh-cu-canada-tinh-bang-nova-scotia.json` (chép nguyên văn, md5 khớp bản CEO gửi).
  Trang gốc: `immgroup.com/dau-tu-dinh-cu-canada/dinh-cu-canada-tinh-bang-nova-scotia/` · post_id 89082.
- **Khối lượng:** 105 đoạn · 1.286 chữ tiếng Việt · 67 đoạn có gợi ý bộ nhớ dịch từ 6 trang tỉnh bang Canada
  đã dịch trước đó trong ngày.
- **Nhãn:** **chưa qua soi độc lập** — chưa có người thật ngoài quy trình đọc lại bản tiếng Anh.

## 1. Từ khoá

- **Chính:** `nova scotia entrepreneur stream` — đây vừa là tên chính thức trên liveinnovascotia.com, vừa là cụm
  đối thủ mạnh nhất đặt ở tiêu đề (Wild Mountain Immigration, Canadim, Borders Law Firm, Amir Ismail).
- **Phụ:** `nsnp entrepreneur stream` · `nova scotia nominee program` · `nova scotia entrepreneur immigration`
  (Adapt Immigration, CanReach dùng ở title) · `nova scotia business immigration` (Sobirovs, Schindler Visa) ·
  `canada entrepreneur immigration` (cụm trục, dùng chung 7 trang tỉnh bang) ·
  `nova scotia entrepreneur stream requirements`.
- ⚠ **Xếp hạng theo độ phủ tiêu đề đối thủ trên Google (qua WebSearch), CHƯA CÓ SỐ LƯỢT TÌM KIẾM.** Lệnh `tukhoa`
  trả 0 gợi ý vì Cowork chặn mạng dòng lệnh tới Google — lặp lại đúng hiện tượng ở việc PEI, Ontario,
  New Brunswick. Muốn có số lượt tìm cần Ahrefs hoặc Semrush (công cụ trả phí, mục 6 CLAUDE.md — chờ CEO quyết).

## 2. Đoạn viết lại lớn

- **s002 (H1):** "ĐỊNH CƯ CANADA DIỆN DOANH NHÂN / TỈNH BANG NOVA SCOTIA" → "Entrepreneur Immigration to Canada /
  The Nova Scotia Entrepreneur Stream". Viết lại để H1 chứa nguyên cụm từ khoá chính; giữ đủ thẻ `{br}` và `{1}{/1}`.
- **s004:** đổi "Chương trình" thành tên đầy đủ "The Nova Scotia Entrepreneur Stream" để từ khoá chính xuất hiện
  trong 150 chữ đầu (cửa 0 bắt lỗi này ở lần kiểm thứ hai).
- **s022:** "Không yêu cầu lợi nhuận doanh nghiệp" → "No profitability requirement" (rút gọn cho khớp nhịp các H3 khác).
- Các H2/H3 còn lại viết lại nhẹ theo sentence case; nguồn viết hoa cả dòng, bản tiếng Anh không.

## 3. Đoạn đã bỏ hoặc viết chung vì ngữ cảnh khách Việt

**Không có.** Trang này không có đoạn nào chỉ dành riêng cho khách Việt Nam: không nhắc thủ tục ở Việt Nam,
không có số tiền VND, không có hotline hay địa chỉ văn phòng trong thân bài.

## 4. Quy đổi tiền

Tỷ giá: `ty-gia.json` của việc, nguồn **open.er-api.com (ExchangeRate-API)**, cập nhật **22/09/2026 00:02 UTC**,
`usd_moi_cad = 0.7131` — chép từ việc New Brunswick cùng ngày vì lệnh `tygia` không ra mạng được từ Cowork
(lỗi `Tunnel connection failed: 403 Forbidden`).

| Số gốc | Phép tính | Ghi trong bài | Đoạn |
|---|---|---|---|
| C$100,000 | × 0.7131 = US$71,310 | approximately US$71,000 | s007 |
| C$150,000 | × 0.7131 = US$106,965 | approximately US$107,000 | s007 |
| C$600,000 | × 0.7131 = US$427,860 | approximately US$428,000 | s032 |
| C$400,000 | × 0.7131 = US$285,240 | approximately US$285,000 | s033 |

Mức vốn luật định bằng CAD nên **giữ nguyên C$**, USD chỉ là số tham chiếu trong ngoặc (style guide mục 5.2).
USD chỉ xuất hiện ở **lần nhắc đầu của mỗi mức**; s020, s038, s039 nhắc lại nên không lặp USD.

## 5. Chỗ đã làm mềm vì tuân thủ

- s015 "Cơ hội trở thành thường trú nhân" → "A path to permanent residence" (không hứa chắc được PR).
- s017 "Lộ trình quốc tịch Canada" → "A route to Canadian citizenship", giữ đủ điều kiện nguồn nêu.
- s036 "tương đương IELTS 5.0" → "**roughly** equivalent to an IELTS score of 5.0". Lý do: bảng quy đổi
  CLB 5 sang IELTS không đồng đều giữa bốn kỹ năng (nghe 5.0, đọc 4.0, viết 5.0, nói 5.0) — nói "tương đương"
  không có chữ "roughly" là khẳng định quá chắc.
- s090 giữ nguyên ranh giới trách nhiệm của nguồn: đơn vị tư vấn hỗ trợ kế hoạch kinh doanh, không vận hành thay.
- Toàn trang không có "guaranteed", "risk-free", "100% success", không nói hộ luật sư.

## 6. Làm rõ thêm so với nguồn (đã ghi rõ, không phải thêm dữ kiện)

- **s007, s021, s032, s033, s038, s039:** nguồn viết "trong/ngoài **Halifax**". Bản tiếng Anh viết
  **Halifax Regional Municipality (HRM)**, lần đầu viết đủ kèm viết tắt. Lý do: ranh giới luật định của mức vốn là
  HRM — rộng hơn thành phố Halifax, gồm cả Dartmouth, Bedford, Sackville. Nói "in Halifax" khiến nhà đầu tư ở
  Dartmouth hiểu nhầm mình thuộc mức thấp hơn. Nguồn chính thức: liveinnovascotia.com/entrepreneur.
- **s061:** nguồn viết "chính quyền liên bang Canada" → bản tiếng Anh ghi tên cơ quan chính thức
  **Immigration, Refugees and Citizenship Canada (IRCC)** theo style guide mục 6, đồng bộ với trang New Brunswick.
- **s054, s055:** giữ tên riêng **Business Performance Agreement** viết hoa. Nova Scotia dùng đúng tên có chữ
  "business" — khác British Columbia chỉ gọi "performance agreement".

## 7. Góp ý của B5/B6 đã BÁC và lý do

- **B5 · s066** đề nghị đổi nhãn liên kết "Compare Canada's investment immigration programs" thành
  "investor immigration programs" cho khớp biến thể trong `thuat-ngu.csv`. **Bác** — nhãn liên kết này đã bàn giao
  y hệt ở 6 trang tỉnh bang Canada khác; đổi riêng trang Nova Scotia sẽ làm lệch nhãn giữa các trang. Nếu CEO muốn
  đổi thì phải đổi đồng loạt 7 trang trong một lượt.
- **B6 · s041** đề nghị sửa thành "…to qualify to apply for a provincial nomination and, from there, permanent
  residence". **Bác** — nguồn chỉ viết "để đủ điều kiện nộp hồ sơ PR", không nhắc bước đề cử ở câu này. Khối điều
  kiện thuộc nhóm **dịch sát** (style guide mục 2). Bước đề cử đã được nói rõ ở s059 trong phần quy trình.

## 8. Điều nguồn có vẻ sai hoặc thiếu — CẦN CEO XÁC NHẬN

Tất cả đều đã **dịch đúng theo nguồn tiếng Việt**, không tự sửa (mục 5 CLAUDE.md).

1. **s042 — điều kiện tạo việc làm.** Nguồn viết "tạo tối thiểu 1 việc làm toàn thời gian cho người dân Canada;
   nếu mua lại doanh nghiệp, cần duy trì việc làm hiện có". Trang chính thức của Nova Scotia **không liệt kê tạo
   việc làm trong điều kiện tối thiểu** — nội dung này thường nằm trong Business Performance Agreement ký riêng
   với từng nhà đầu tư. Đề nghị CEO xác nhận trước khi đăng.
2. **s035 — kinh nghiệm quản lý.** Nguồn chính thức ghi "**more than** 5 years" (hơn 5 năm) cho nhánh quản lý cấp
   cao, nguồn IMM ghi "tối thiểu 5 năm". Nguồn chính thức còn yêu cầu **sở hữu tối thiểu 1/3 doanh nghiệp** cho
   nhánh 3 năm — nguồn IMM không có.
3. **Điều kiện tuổi.** Nguồn chính thức yêu cầu đương đơn **đủ 21 tuổi trở lên**; nguồn IMM không nêu.
4. **Nova Scotia gộp diện từ 18/02/2026.** Tỉnh bang gộp 10 diện còn 4; diện Entrepreneur nay bao luôn
   International Graduate Entrepreneur stream cũ. Tên "Entrepreneur stream" vẫn đúng, nhưng trang tiếng Việt chưa
   phản ánh đợt hợp nhất. Nguồn: CIC News 18/02/2026.
5. **NSNP bắt đầu thu phí từ 01/09/2026** (thông báo 06/08/2026 trên trang chính thức). Nguồn IMM không nhắc phí.
6. **Nội dung lặp sẵn có trong nguồn:** s008 và s025 gần như trùng nguyên văn về chi phí sinh hoạt; s008 và s029
   cùng nói lợi thế ven Đại Tây Dương. Đã dịch đúng nguồn, không tự cắt — đề nghị bộ phận nội dung rút gọn bản Việt.
7. **s062 — nhãn CTA "Xem tất cả dự án" → "View all projects".** Trong ngành investment migration, "projects"
   thường hiểu là dự án EB-5. Trên trang doanh nhân Canada dễ gây hiểu nhầm — đề nghị đổi nhãn ở bản Việt trước.

## 9. Chuyện khuôn câu cần CEO chốt cho CẢ 7 TRANG (không sửa riêng trang này)

Khối điều kiện s032–s042 viết ở **ngôi thứ ba không chủ ngữ** ("Has a personal net worth of…", "Invests at least…",
"Presents a viable business plan…"), trong khi toàn trang xưng "you / your". Đây là khuôn đã dùng và đã bàn giao ở
các trang tỉnh bang trước (gợi ý bộ nhớ dịch trả về TM 100% cho s037 và s040), nên **không tự đổi một mình trang
Nova Scotia**. Nếu CEO muốn thống nhất sang "You must have…" thì cần sửa đồng loạt 7 trang trong một lượt.

## 10. Cảnh báo cửa 0 đã đọc và giữ nguyên

Cửa 0: **XANH · 0 lỗi chặn · 14 cảnh báo** (lần kiểm đầu tiên là ĐỎ, chỉ vì chưa có `seo.json`; lần thứ hai bắt
thiếu từ khoá chính trong 150 chữ đầu, đã sửa ở s004).

- **12 cảnh báo THUẬT NGỮ** là gợi ý biến thể, không phải lỗi: s001/s002/s049 "tỉnh bang" (tên tỉnh bang và
  "Government of Nova Scotia" đã đủ nghĩa) · s001/s010/s027 "định cư" · s017 "lộ trình" → dùng "route" theo bộ nhớ
  dịch TM 100% · s035 "quản lý cấp cao" → đã dùng "senior management role" · s044/s093 "thẩm định" → "assessment"
  và "assessing", không phải "due diligence" theo nghĩa thẩm định pháp lý · s066 xem mục 7 · s102 "chứng minh tài
  chính" → "documentation of your finances", hợp văn cảnh câu rủi ro hơn "proof of means".
- **2 cảnh báo CẤU TRÚC** (H1 nhảy xuống H3, H2 nhảy xuống H4) là **do khuôn ACF `content-product-2026`**, không
  phải lỗi dịch — mọi trang product dùng khuôn này đều báo giống nhau. Muốn hết thì phải sửa template.

## 11. Chuyển hướng 301

**Không cần.** Trang chưa từng có bản tiếng Anh (không tìm thấy thẻ hreflang, `tham-khao-ban-en-hien-co.md`
không được tạo). Slug tiếng Anh đề xuất là `nova-scotia-entrepreneur-stream`.

## 12. Cần làm ở phía team web

- 17 liên kết trong tệp JSON **vẫn trỏ trang tiếng Việt** trên staging (7 trang tỉnh bang Canada + 9 mục "Hiểu về
  Canada" + nút đăng ký tư vấn), vì các trang đó chưa có bản `/en/` chạy thật. `post_slug`, `post_id` 89082 và
  `lang: vi` trong tệp cũng giữ nguyên bản gốc.
- Import vào **trang tiếng Anh** (bản WPML đã "Translate independently"), **không import vào trang Việt**.
