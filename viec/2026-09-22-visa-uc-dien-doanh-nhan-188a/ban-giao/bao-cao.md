# Báo cáo bàn giao — Visa Úc diện doanh nhân 188A → Australia 188A Business Innovation Visa

## 1. Nguồn và quy mô
- Nguồn: viec/nhap/2026-09-22-uc-188-3-trang.json (tệp 3 trang, `--trang 1066`) · bản xuất ACF Page Importer của trang https://immgroup.com/dau-tu-dinh-cu-uc/visa-uc-dien-doanh-nhan-188a/
- 107 đoạn · 1.041 chữ nguồn · bộ nhớ dịch khớp sẵn 35 đoạn
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
- Chính: **188A Business Innovation visa**. Lý do: đối thủ đặt tiêu đề theo **mã diện + tên stream chính thức** ("Subclass 188A – Business Innovation Stream", "Australia 188A Business Innovation Visa: Requirements & Guide"). Người tìm gõ mã diện, không gõ "golden visa" — giống mẫu đã học ở các trang PNP Canada.
- Phụ: subclass 188A requirements · Australia business visa for entrepreneurs · 888A permanent visa · state or territory nomination · BIIP closure · Australia business migration.
- ⚠ Xếp hạng theo **độ phủ tiêu đề đối thủ**, **chưa có số lượt tìm kiếm** (`tukhoa` trả 0 gợi ý vì Cowork chặn mạng tới Google; muốn có số cần công cụ trả phí như Ahrefs/Semrush).

## 4. Đoạn viết lại lớn
- H1, khối hero, mọi tiêu đề mục: viết lại theo lối Anh–Mỹ (H1 Title Case, H2–H6 Sentence case) thay vì dịch sát chữ hoa toàn dòng của nguồn.
- s027 "Mức đầu tư dễ tiếp cận" → "With a threshold from A$300,000, the investment requirement was among the lowest of Australia's business and investor visa streams."
- s055 "Hồ sơ được xét duyệt theo quy định của Bộ Di trú Úc" → "The Department of Home Affairs assessed the application against the visa criteria" (người trong nghề nói *assessed against the visa criteria*).

## 5. Đoạn đã bỏ hoặc viết chung vì ngữ cảnh khách Việt
- s016 "tự do đi lại **giữa Việt Nam và Úc**" → "between Australia and their home country".
- s036 "kinh nghiệm kinh doanh thành công **tại Việt Nam**" → "in the applicant's home country".
- s038 tiêu đề "Điều kiện doanh nghiệp **tại Việt Nam**" → "Requirements for the existing business".
- s081 "Những **người Việt** thành công trên đất Úc" → "Immigrant success stories in Australia".
Không bỏ hẳn đoạn nào; không có đoạn `[BO]`.

## 6. Tiền và quy đổi
- Trang **không có số tiền VND** nên không phải quy đổi. `ty-gia.json` chép lại từ việc cùng ngày (nguồn open.er-api.com, cập nhật 22/09/2026) chỉ để tra cứu, vì cửa 0 vẫn đòi có tệp này.
- Mức vốn **luật định bằng AUD giữ nguyên tiền gốc** theo style guide mục 5.2: A$300,000 · A$750,000 · A$1,250,000. Không thêm "(approximately US$…)" để bản dịch không mang con số nguồn không có.
- Viết dạng chữ số đầy đủ (`A$1,250,000`) chứ không rút thành `A$1.25 million`: giữ đúng con số nguồn để phép kiểm số của cửa 0 đối chiếu được. Agent soát có nêu, luồng chính **bác** với lý do này.

## 7. Cảnh báo cửa 0 — đã đọc từng dòng, giữ nguyên và lý do

- «diện doanh nhân» → gợi ý «entrepreneur stream»: **bác**. Tên chính thức của Úc trên immi.homeaffairs.gov.au là *Business Innovation stream*; «entrepreneur stream/category» là chữ của Canada (PNP), dùng cho trang Úc là sai ngành.
- «tỉnh bang» → gợi ý «province»: **bác**. Úc có **state** và **territory**, không có province. Nguồn tiếng Việt dùng nhầm chữ của Canada — đề nghị CEO cho sửa bản Việt.
- «thang điểm di trú» (dòng `chot`) → gợi ý «selection factor grid»: **đã xử lý dứt điểm**. Dòng `chot` này sinh ra từ trang New Brunswick (Canada) và ban đầu CHẶN trang Úc; đã thêm dòng mới «thang điểm di trú Úc → points test», và phiên dịch ba trang 888 đã thu hẹp khoá cũ thành «thang điểm di trú (New Brunswick)». Sau khi thu hẹp, cờ `#bo-qua-tn` ở s024 của trang 188C không còn cần nữa nên đã gỡ; cửa 0 vẫn XANH.
- «thẩm định» → «due diligence»: **bác**. Tiêu đề bước "Assessment and case preparation" là nhãn đã dùng thống nhất ở các trang trước (bộ nhớ dịch khớp 100%).
- «đầu tư định cư» → «residency by investment…»: **bác**. "Australia investment immigration" là nhãn liên kết đã thống nhất toàn bộ trang dịch vụ.
- «an sinh xã hội» → «social security»: **bác**. Nhãn thống nhất với trang Ontario là "Allowances, benefits and social programs in …"; "Social Security" là tên riêng của Mỹ.
- «hình thức đầu tư» → «how you invest»: **bác**. Cả bài dùng ngôi thứ ba, không dùng "you" (lý do ở mục 2).
- «lộ trình» → «pathway»: đã dùng "pathway" ở các đoạn nói về lộ trình 888; các đoạn còn lại diễn đạt khác cho tự nhiên.
- CẤU TRÚC "heading nhảy H1→H3" và "H2→H4": do bố cục sẵn có của template `acf-product-2026`, không phải lỗi dịch.

Riêng trang này còn cảnh báo `s093 «chứng minh tài chính» → proof of means`: **bác** — "proof of means" không phải cách nói của ngành di trú Úc; đã dùng "the financial requirement".

## 8. Đã làm mềm vì tuân thủ
Không có câu nào hứa kết quả, hứa lợi nhuận hay nói "an toàn". Không phải làm mềm chỗ nào. Hai agent soát cùng xác nhận.

## 8b. Góp ý của B5/B6 đã bác và lý do
- B5 đề nghị s054 "Decision on the application" → "Approval of the application": **nhận** (nguồn nói "Nhận chấp thuận hồ sơ", và s059 cùng ý đã dịch "approved").
- B6 đề nghị đổi `A$1,250,000` → `A$1.25 million`: **bác** (lý do ở mục 5).
- B6 đề nghị nâng "background and medical" lên "health and character requirements": **bác** — thêm thuật ngữ nguồn không dùng và phá phép kiểm thuật ngữ.
- Nhận toàn bộ 13 đoạn sửa còn lại của B6 (giọng văn, en dash `18–55`, "private health insurance" thay lối Anh–Úc "private health cover", "health examinations", dấu phẩy Oxford).

## 8c. Điều nguồn có vẻ sai hoặc lỗi thời — CEO xác nhận
Không tự sửa dữ kiện nào. Bản Anh dịch đúng nguồn; dưới đây là chỗ nguồn tiếng Việt lệch trang chính thức — **CEO quyết**:

1. **"Từ 18–55 tuổi" (s032).** immi.homeaffairs.gov.au ghi điều kiện là *under 55 years of age* (tức 55 tuổi đã không còn đủ điều kiện), và bang/vùng lãnh thổ **có thể miễn mốc tuổi** nếu doanh nghiệp mang lại "exceptional economic benefit". Nguồn Việt vừa đọc như bao gồm tuổi 55, vừa bỏ mất ngoại lệ.
2. **"Sở hữu tối thiểu 30% vốn" (s039, s045).** Mức 30% chỉ áp khi doanh thu doanh nghiệp từ A$400.000/năm trở lên; dưới mức đó đòi **51%**, còn công ty đại chúng niêm yết chỉ cần **10%**. Nguồn Việt nêu một con số phẳng 30%.
3. **"Trực tiếp điều hành doanh nghiệp tối thiểu 3 năm" (s040).** Home Affairs **không** đặt mốc 3 năm cho 188A; điều kiện là có phần sở hữu trong doanh nghiệp ở **2 trong 4 năm tài chính** ngay trước khi được mời nộp hồ sơ (cùng khung với điều kiện doanh thu ở s041). Mốc "3 năm" là điều kiện của **188B**.
4. **Tổng tài sản A$1.250.000 (s034) — thiếu vế.** Quy định chính thức còn đòi tài sản này **chuyển hợp pháp được sang Úc trong vòng 2 năm** kể từ ngày cấp visa.
5. **Doanh thu A$750.000 (s041) — thiếu vế.** Đúng là mức tối thiểu toàn quốc, nhưng NSW/Sydney đòi tới **A$1,25 triệu**. Trang đã nói "tùy yêu cầu từng bang" ở mục đầu tư mà không nói ở mục doanh thu.
6. **Tên gọi sai trong bản tiếng Việt** (bản Anh đã dịch đúng, đề nghị sửa bản Việt): "Bộ Di trú Úc" → cơ quan là **Department of Home Affairs** · "tỉnh bang Úc" → Úc có **state / territory**, không có province · "Thang điểm Di trú Úc" → **points test**.
7. **Mốc đóng 31/07/2024 (s008, s086) — ĐÚNG.** immi.homeaffairs.gov.au ghi nguyên văn: "The Business Innovation and Investment Program (BIIP) closed permanently to new applications on 31 July 2024."

## 9. Tệp import và cảnh báo cho team

- Tệp: `ban-giao/visa-uc-dien-doanh-nhan-188a.en.json` (đủ 48 khoá ACF như nguồn, 0 trường còn chữ Việt, không mất xuống dòng).
- ⚠ **Bản xuất là của TRANG TIẾNG VIỆT** (`"lang": "vi"`, `post_id` 1066 là ID bài tiếng Việt). **Không được import vào post_id này** — sẽ ghi đè trang tiếng Việt đang chạy. Team cần WPML duplicate → "Translate independently" → xuất lại JSON của **trang tiếng Anh** rồi import vào đúng post đó.
- ⚠ 16 liên kết nội bộ trong tệp vẫn trỏ **miền staging bản tiếng Việt** (`staging-41de-immgroupcom.wpcomstaging.com/...`). Bảng `lien-ket/lien-ket-vi-en.tsv` chỉ có immgroup.com nên máy không tự đổi. Team quyết đổi sang trang `/en/` tương ứng khi các trang đó lên.
- Chưa có trang `/en/` tương ứng (hreflang của trang Việt chỉ trỏ về `immgroup.com/en/`) → **không cần chuyển hướng 301**.
- Nhãn: **chưa qua soi độc lập**.

## 10. Kết quả cửa 0
- `python3 cong-cu/dich.py kiem` → **XANH**, 0 lỗi chặn, đã giải trình từng cảnh báo ở mục 7.
- B5 (hiệu đính song ngữ, Sonnet) và B6 (soát bản xứ + chuyên môn, Opus) chạy **song song, độc lập**, không thấy báo cáo của nhau.
