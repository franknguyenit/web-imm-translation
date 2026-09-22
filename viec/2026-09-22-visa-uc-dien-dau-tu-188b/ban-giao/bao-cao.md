# Báo cáo bàn giao — Visa Úc diện đầu tư 188B → Australia 188B Investor Visa

## 1. Nguồn và quy mô
- Nguồn: viec/nhap/2026-09-22-uc-188-3-trang.json (tệp 3 trang, `--trang 1060`) · bản xuất ACF Page Importer của trang https://immgroup.com/dau-tu-dinh-cu-uc/visa-uc-dien-dau-tu-188b/
- 104 đoạn · 1.096 chữ nguồn · bộ nhớ dịch khớp sẵn 31 đoạn
- Bộ chuyển ACF: `acf-product-2026` · template `template-parts/content-product-2026.php`

## 2. Quyết định lớn nhất của bài — thì động từ và ngôi
Chương trình **Business Innovation and Investment Program (BIIP) của Úc đã đóng vĩnh viễn với hồ sơ mới từ 31/07/2024**
(immi.homeaffairs.gov.au, nguyên văn: "closed permanently to new applications on 31 July 2024"). Vì vậy bản tiếng Anh:
- dùng **thì quá khứ** cho điều kiện tham gia và quy trình nộp hồ sơ (không còn nộp được nữa);
- dùng **thì hiện tại** cho quyền của người **đang giữ** visa 188 và cho lộ trình lên visa 888 (vẫn mở với họ);
- dùng **ngôi thứ ba** ("the investor", "applicants", "visa holders") thay vì "you/your", để không mời người đọc vào một diện
  không còn nộp được;
- đưa **dữ kiện đóng chương trình lên trước** lời mời trong khối lưu ý đầu trang, và vào cả `meta_title` lẫn `meta_description`
  (người tìm đang hỏi "còn mở không").
Cả hai agent soát đã được báo trước đây là lựa chọn cố ý và đều xác nhận bài đọc tự nhiên.

## 3. Từ khoá
- Chính: **188B Investor visa**. Lý do: đối thủ đặt tiêu đề theo mã diện ("188B Visa – Business Visa (Investment)", "Australia 188B Investor Visa 2026", "Investor Stream subclass 188B").
- Phụ: subclass 188B requirements · Australia investor visa · complying investment Australia · 888B permanent residence · BIIP closure · Australia investment migration.
- ⚠ Xếp hạng theo **độ phủ tiêu đề đối thủ**, **chưa có số lượt tìm kiếm**.

## 4. Đoạn viết lại lớn
- H1, hero, tiêu đề mục viết lại theo lối Anh–Mỹ.
- s031 "Phù hợp với nhà đầu tư tài chính" → "Designed for investors with substantial financial capacity and a background in investment or business who did not want to run a business in Australia themselves."
- Cấu phần vốn dùng đúng tên chính thức của khung *complying investment*: **venture capital and growth private equity funds** · **managed funds investing in emerging companies listed on an Australian stock exchange** · **balancing investment**.

## 5. Đoạn đã bỏ hoặc viết chung vì ngữ cảnh khách Việt
- s018 "tự do đi lại **giữa Việt Nam và Úc**" → "between Australia and their home country".
- s081 "Những **người Việt** thành công trên đất Úc" → "Immigrant success stories in Australia".
Không bỏ hẳn đoạn nào; không có đoạn `[BO]`.

## 6. Tiền và quy đổi
- Trang **không có số tiền VND** nên không phải quy đổi (`ty-gia.json` chỉ để tra cứu, cửa 0 vẫn đòi có).
- Mức vốn luật định giữ nguyên AUD: A$2,500,000 · A$500,000 · A$750,000 · A$1,250,000. Không đổi sang USD.

## 7. Cảnh báo cửa 0 — đã đọc từng dòng, giữ nguyên và lý do

- «diện doanh nhân» → gợi ý «entrepreneur stream»: **bác**. Tên chính thức của Úc trên immi.homeaffairs.gov.au là *Business Innovation stream*; «entrepreneur stream/category» là chữ của Canada (PNP), dùng cho trang Úc là sai ngành.
- «tỉnh bang» → gợi ý «province»: **bác**. Úc có **state** và **territory**, không có province. Nguồn tiếng Việt dùng nhầm chữ của Canada — đề nghị CEO cho sửa bản Việt.
- «thang điểm di trú» (dòng `chot`) → gợi ý «selection factor grid»: **đã xử lý dứt điểm**. Dòng `chot` này sinh ra từ trang New Brunswick (Canada) và ban đầu CHẶN trang Úc; đã thêm dòng mới «thang điểm di trú Úc → points test», và phiên dịch ba trang 888 đã thu hẹp khoá cũ thành «thang điểm di trú (New Brunswick)». Sau khi thu hẹp, cờ `#bo-qua-tn` ở s024 của trang 188C không còn cần nữa nên đã gỡ; cửa 0 vẫn XANH.
- «phí bảo trợ ngoại ngữ» → gợi ý «second instalment visa application charge»: **bác**. Home Affairs viết đầy đủ là *second instalment **of the** visa application charge* — bản dịch giữ cách viết này cho khớp trang 188C. ⚠ Dòng `phí bảo trợ ngoại ngữ` (do phiên dịch ba trang 888 thêm) và dòng `phí ngoại ngữ` (phiên này thêm) đang ghi hai cách viết khác nhau cho cùng một khoản phí — nên hợp nhất, chờ CEO quyết.
- «thẩm định» → «due diligence»: **bác**. Tiêu đề bước "Assessment and case preparation" là nhãn đã dùng thống nhất ở các trang trước (bộ nhớ dịch khớp 100%).
- «đầu tư định cư» → «residency by investment…»: **bác**. "Australia investment immigration" là nhãn liên kết đã thống nhất toàn bộ trang dịch vụ.
- «an sinh xã hội» → «social security»: **bác**. Nhãn thống nhất với trang Ontario là "Allowances, benefits and social programs in …"; "Social Security" là tên riêng của Mỹ.
- «hình thức đầu tư» → «how you invest»: **bác**. Cả bài dùng ngôi thứ ba, không dùng "you" (lý do ở mục 2).
- «lộ trình» → «pathway»: đã dùng "pathway" ở các đoạn nói về lộ trình 888; các đoạn còn lại diễn đạt khác cho tự nhiên.
- CẤU TRÚC "heading nhảy H1→H3" và "H2→H4": do bố cục sẵn có của template `acf-product-2026`, không phải lỗi dịch.

## 8. Đã làm mềm vì tuân thủ
Không có câu nào hứa kết quả hay hứa lợi nhuận: s025 và s029 nói về lãi quỹ đều kèm vế điều kiện ("depending on how those funds perform"), s104 nêu rủi ro thẳng. Không phải làm mềm chỗ nào.

## 8b. Góp ý của B5/B6 đã bác và lý do
- B5 (song ngữ) **không phát hiện lỗi nào** ở trang này.
- B6 đề nghị s104 "the proof of assets" → "documenting assets": **bác** — bảng thuật ngữ chốt «chứng minh tài sản → proof of assets»; đã viết lại câu cho gọn mà vẫn giữ thuật ngữ.
- B6 đề nghị s095 thêm mệnh đề giải thích khoản phí: **bác một phần** — giữ đúng ý nguồn ("reduce"), chỉ thêm tên chính thức của khoản phí; phần dữ kiện nguồn có vẻ sai đưa xuống mục 8 cho CEO.
- B6 đề nghị gọi cấu phần "emerging companies" giống hệt trang 188C: **bác** — hai bản tiếng Việt viết khác nhau ("quỹ đầu tư vào các công ty mới trên sàn chứng khoán Úc" ở 188B, "quỹ công ty mới hoặc đang phát triển" ở 188C), dịch sát từng trang mới đúng.
- Nhận 12 đoạn sửa còn lại của B6, trong đó quan trọng nhất: **"complying funds" → "complying investments"** (3 chỗ, tên chính thức của Home Affairs).

## 8c. Điều nguồn có vẻ sai hoặc lỗi thời — CEO xác nhận
Không tự sửa dữ kiện nào. **CEO quyết**:

1. **"Sớm nhất sau 3 năm" (s006) — có vẻ SAI.** Điều kiện chính thức của 888B là đã **giữ khoản đầu tư hợp lệ ít nhất 4 năm**, cộng **2 năm có mặt thực tế ở Úc trong 3 năm** ngay trước khi nộp 888B. Không có mốc 3 năm nào cho việc giữ vốn.
2. **"Sở hữu tối thiểu 10% vốn … và trực tiếp điều hành tối thiểu 3 năm" (s040) — gộp nhầm hai điều kiện riêng.** Chính thức: (a) **3 năm** kinh nghiệm quản lý doanh nghiệp đủ điều kiện **hoặc** danh mục đầu tư đủ điều kiện; và (b) trong **ít nhất 1 trong 5 năm tài chính** ngay trước khi được mời, có sở hữu **10%** doanh nghiệp đủ điều kiện. Nguồn Việt buộc 10% và 3 năm vào cùng một vế.
3. **"Giảm chi phí bảo trợ ngoại ngữ" (s095) — có vẻ SAI.** Tiếng Anh tốt **không làm giảm** khoản này: người từ 18 tuổi không chứng minh được *functional English* thì **phải đóng** *second instalment of the visa application charge*, có thì **không phải đóng**. Đây là chuyện có/không, không phải nhiều/ít. Bản dịch hiện **giữ đúng ý nguồn**; chờ CEO chốt rồi sửa cả bản Việt lẫn bản Anh.
4. **"Điều kiện cư trú theo quy định" (s098) — nguồn né số.** Quy định chính thức có con số rõ: **2 năm ở Úc trong 3 năm** ngay trước khi nộp 888B.
5. **"Từ 18–55 tuổi" (s034)** — như trang 188A: chính thức là *under 55*, và bang/vùng lãnh thổ có thể miễn mốc tuổi.
6. **Cấu phần thứ hai (s047) — thiếu vế.** Quy định chính thức cho phép cả **listed investment companies**, không chỉ managed funds.
7. **Phân bổ vốn (s046–s048) và mốc đóng 31/07/2024 — ĐÚNG**, đã đối chiếu nguồn chính thức.

## 9. Tệp import và cảnh báo cho team

- Tệp: `ban-giao/visa-uc-dien-dau-tu-188b.en.json` (đủ 48 khoá ACF như nguồn, 0 trường còn chữ Việt, không mất xuống dòng).
- ⚠ **Bản xuất là của TRANG TIẾNG VIỆT** (`"lang": "vi"`, `post_id` 1060 là ID bài tiếng Việt). **Không được import vào post_id này** — sẽ ghi đè trang tiếng Việt đang chạy. Team cần WPML duplicate → "Translate independently" → xuất lại JSON của **trang tiếng Anh** rồi import vào đúng post đó.
- ⚠ 16 liên kết nội bộ trong tệp vẫn trỏ **miền staging bản tiếng Việt** (`staging-41de-immgroupcom.wpcomstaging.com/...`). Bảng `lien-ket/lien-ket-vi-en.tsv` chỉ có immgroup.com nên máy không tự đổi. Team quyết đổi sang trang `/en/` tương ứng khi các trang đó lên.
- Chưa có trang `/en/` tương ứng (hreflang của trang Việt chỉ trỏ về `immgroup.com/en/`) → **không cần chuyển hướng 301**.
- Nhãn: **chưa qua soi độc lập**.

## 10. Kết quả cửa 0
- `python3 cong-cu/dich.py kiem` → **XANH**, 0 lỗi chặn, đã giải trình từng cảnh báo ở mục 7.
- B5 (hiệu đính song ngữ, Sonnet) và B6 (soát bản xứ + chuyên môn, Opus) chạy **song song, độc lập**, không thấy báo cáo của nhau.
