---
name: dich-web-imm
description: Dịch nội dung immgroup.com Việt→Anh cho khách quốc tế (đầu tư định cư, quốc tịch, wealth management) — quy trình 11 bước có bộ nhớ dịch, thuật ngữ, SEO, hai agent soát và cửa kiểm máy. NẠP KHI CEO đưa link immgroup.com, tệp, hoặc dán nội dung tiếng Việt cần dịch sang tiếng Anh cho web; hoặc khi làm việc dịch này ở Cowork/nơi khác ngoài thư mục dự án.
---
# Dịch web IMM Group Việt → Anh

**Nguồn luật đầy đủ:** `/Users/mac/Claude/Projects/web-imm-translation/CLAUDE.md` + `quy-trinh/style-guide.md`. Đang ở thư mục đó thì CLAUDE.md đã tự nạp; skill này dùng khi ở nơi khác và để giữ bài học.

## Chạy nhanh (từ gốc dự án)
1. `python3 cong-cu/dich.py moi "<link|tệp>"` (dán chat → ghi `viec/nhap/<ngày>-<slug>.md` trước; danh sách có số viết `- 5. câu`).
2. Brief + `tukhoa <việc> "hạt"...` + WebSearch từ khoá chính → `brief.md`.
3. Dịch ra `dich-1.txt` dạng `[s001] text` → `dien` → `kiem`.
4. Song song: B5 song ngữ (general-purpose, sonnet) + B6 bản xứ/chuyên môn (general-purpose, opus) → mỗi agent ghi `soat-*.md` + `sua-*.txt`.
5. Gom tay → `gom-sua.txt` → `dien` → `seo.json` → `kiem` XANH → `ghep`.
6. Bàn giao **viết thẳng trong chat**: bảng SEO · bài Markdown (chép từ `ban-giao/bai-dich.en.md`) · ghi chú cho team ≤8 gạch.
7. Tự học: `nap` · thuật ngữ mới `goi-y` · `seo/tu-khoa-thi-truong.md` · memory · skill này · `bash cong-cu/dong-bo-bo-nho.sh` · nhật ký.

## Bài học đã trả giá
- **Nguồn dán từ web dính liền số thứ tự và tiêu đề** ("...Mỹ không?6Gia đình..."): tự tách lại, đánh dấu tiêu đề `##`, và ghi rõ nếu chỉ là đoạn trích (thiếu H1) → `seo.json` đặt `"phan_doan": true`.
- **Đề xuất sửa của agent soát có thể làm mất số thứ tự / định dạng** (B5 bỏ "6."): gom tay, đừng `dien` thẳng tệp `sua-*.txt`.
- **Hai agent soát có thể đề xuất ngược chiều** (một bên đòi đủ độ mạnh của nguồn, một bên đòi làm mềm) → giữ độ lớn của nguồn, bỏ tuyệt đối hoá, bỏ khẳng định chắc chắn về tương lai.
- **Bộ kiểm số từng hiểu nhầm "may" là tháng 5, "one" là số 1** — đã sửa; thấy cảnh báo số lạ thì nghi bộ kiểm trước.
- **Dữ kiện EB-5 nguồn hay nói gọn:** 800.000 USD là mức TEA (chuẩn 1.050.000); điều chỉnh lạm phát từ 01/01/2027; vốn at risk. Ghi chú cho CEO, không tự sửa dữ kiện.
- Từ khoá: "is eb-5 worth it" có ở cả 6 thị trường; người tìm hay so "eb-5 vs gold card"; Ấn Độ tìm nhiều ("for indian", "cost in inr").
- **Bài dài có phần đã dịch:** `dien <việc> dich-1.txt --tm100` tự lấp đoạn khớp 100% bộ nhớ dịch; bản dịch chỉ viết đoạn mới. Lời giao B5/B6 chỉ liệt kê đoạn mới để khỏi soát lại.
- **"Chỉ dịch nội dung"** (CEO 17/09/2026): không hỏi lan man, không phân tích ngoài nhiệm vụ; ghi chú bàn giao chỉ nêu điều CEO phải quyết.
- **Bộ kiểm số: "EB-5 may" từng thành 5 triệu** (hệ số "m" không có ranh giới từ) — đã sửa; tên tháng chỉ tính khi cạnh số ngày 1–31.
- **Tiền VND trùng mức vốn EB-5** ("hơn 20 tỷ đồng"): viết "US$800,000 or more" (trong sai số 5% của tỷ giá) thay vì con số lẻ.
- **Dữ kiện thẻ xanh nguồn hay sai:** "thời gian tối thiểu ở Mỹ để giữ thẻ" → "residence requirements"; "vẫn sống ở quê sau khi có thẻ" → ghi chú rủi ro mất thẻ + thuế toàn cầu.
- **Trang lớn (>2.000 chữ) chia 4 mẻ Opus theo H2** chạy ~2 phút; mẻ trả khác kiểu: nháy cong/thẳng, link tương đối/tuyệt đối, `&amp;` → luồng chính chuẩn hoá bằng máy sau khi gom (đã làm: sed `&amp;`, `](/en/` → tuyệt đối, nháy cong → thẳng).
- **Bẫy "trung" của công cụ:** alt ảnh và chú thích chữ cùng nội dung ("IBDA") từng bị coi là lặp → chú thích thành "IBDA logo". Đã sửa: trung chỉ tính cùng loại (ảnh/không ảnh).
- **Soát trang lớn:** B5 chia 2 mẻ Sonnet theo mã đoạn, B6 1 mẻ Opus đọc cả trang ghép; B6 bắt được lỗi hệ thống giữa các mẻ dịch mà B5 không thấy.
- **Khẳng định "đầu tiên/duy nhất/lâu nhất" của IMM:** thêm "in Vietnam" khi nguồn ngụ ý Việt Nam; ghi chú CEO cần bằng chứng. Bộ đếm số (counter) trên trang lấy về hiện "0" vì chạy bằng JavaScript — ghi chú team.
- **Bộ kiểm:** tháng + năm ("January 2005") và tên Tây có dấu (André, Jurídico) từng bị bắt oan — đã sửa kèm ca kiểm.
- **Trang chương trình châu Âu ("Thường trú nhân <nước>"):** bản Anh dùng "<Nước> Golden Visa" / "<Nước>
  Residency by Investment", KHÔNG dùng "permanent resident" (thẻ có thời hạn, gia hạn — dịch PR là sai dữ kiện).
  Dòng `thường trú nhân` trong CSV là `chot` nên cửa 0 báo LỖI CHẶN: gắn cờ `[sXXX|#bo-qua-tn: lý do] text`
  cho từng đoạn. **Đừng sửa `thuat-ngu.csv`** — dòng đó vẫn đúng cho trang Mỹ/thẻ xanh.
- **Cờ `#bo-qua-so` còn dùng cho cách DIỄN ĐẠT, không chỉ tiền VND:** "6 tháng" → "any 180-day period"
  (đúng luật Schengen, cùng số 90 ngày), "1/3" → "one-third". Bộ kiểm đếm chữ số nên sẽ bắt; ghi lý do vào cờ.
- **Chia mẻ dịch → hai lỗi hệ thống hay gặp, luồng chính phải tự soát:** (1) **lệch ngôi** — mẻ này "you/your
  family", mẻ kia "the investor/investors"; (2) **đoạn `{trung:sXXX}` giữa hai mẻ không khớp y hệt** (s050
  "Your legal spouse" vs s189 "Legal spouse") → `ghep` sai. Trong lời giao, chốt sẵn bản dịch của mọi đoạn
  `trung` bắc cầu giữa hai mẻ, và chốt ngôi "you".
- **Gợi ý TM từ trang khác chương trình rất dễ sai ngữ cảnh:** trang Hy Lạp nhận TM 100% "Other U.S.
  immigration routes" cho "Có thể bạn quan tâm", "EB-5 visa FAQs" cho "Các câu hỏi thường gặp". Nhắc sub-agent
  bỏ mọi gợi ý nhắc tới chương trình khác.
- **Cửa 0 kiểm từ khoá chính trong 150 chữ đầu chỉ tính đoạn `p` và `li`, KHÔNG tính heading** — phải nhét
  nguyên cụm vào gạch đầu dòng đầu tiên của khối hero, không chỉ vào H3.
- **Kiểm tệp JSON giao đi:** so tập đường dẫn trường của `ban-giao/<slug>.en.json` với `nguon.json` — phải
  khớp hệt, chỉ thừa khối `/seo/*` do `ghep` thêm. Bắt được ngay việc mất trường/mất icon/mất ID ảnh.
- **Mức vốn luật định bằng EUR thì KHÔNG quy đổi USD** (style guide 5.2) — nhưng vẫn phải chạy `tygia` trước,
  nếu không cửa 0 đỏ.
- **Trang châu Âu hiện chưa có bản /en/ nào** (kiểm hreflang 21/09/2026: Hy Lạp, Ireland, Cyprus, Latvia,
  Malta, Bồ Đào Nha, Hungary, Bulgaria, trang tổng châu Âu, "Hiểu về nước Hy Lạp") → liên kết nội bộ còn trỏ
  bản Việt, ghi chú cho team quyết.
- **Cowork (máy ảo) chặn mạng dòng lệnh** tới immgroup.com, Google gợi ý, open.er-api.com (lỗi 403 blocked-by-allowlist): lấy trang bằng Browser pane (`request_access` scope site) + `javascript_tool` gỡ HTML vùng `#content` (bỏ script/svg/thuộc tính, bỏ chữ tên icon Material như `play_arrow`, số thứ tự trang trí) → ghi `viec/nhap/<ngày>-<slug>.html` kèm thẻ meta/canonical/hreflang → `moi` tệp đó. Kiểm hreflang các trang liên kết bằng `fetch()` cùng miền trong trang đang mở. Từ khoá: WebSearch; gợi ý Google chỉ lấy được khi trình duyệt tải JSON về (tệp `f.txt` rơi vào thư mục việc — đổi tên, dùng làm bằng chứng).
- **Memory/skill cài trong Cowork nằm ở máy ảo tạm** — mất khi hết phiên; bản bền là `bo-nho/` trong dự án + memory claude.ai của project + skill tài khoản (propose_skills).
- **`kiem` bắt `tygia` kể cả khi đã bỏ số VND bằng `#bo-qua-so`** — không có mạng thì chép `ty-gia.json` cùng ngày từ việc khác, ghi chú nguồn.
- **Bản /en/ cũ có thể vẫn là chữ Việt** (vd /en/visa-dinh-cu-my-eb5/) → không có gì để giữ nhất quán; slug cũ vẫn cần 301.
- **Số "5" trong "EB-5"**: bỏ chữ EB-5 ở bản Anh sẽ bị bắt "SỐ LỆCH" — giữ chữ EB-5 khi nguồn có.
- **Từ khoá chính phải nằm trong đoạn văn đầu, không chỉ H1** — bộ kiểm SEO không tính heading.
- **B6 tìm được lỗi luật thật của nguồn** (grandfathering, CSPA, rural priority) bằng WebSearch → luôn cho B6 dùng WebSearch/WebFetch nguồn chính thức.
- **Dịch lại cùng một trang ở định dạng khác (HTML → JSON ACF):** `moi` tệp JSON → `dien <việc> tệp-rỗng --tm100` lấp gần hết từ bộ nhớ dịch (lần EB-5: 246/260), chỉ còn tiêu đề trang, H1 có thẻ, nhãn liên kết. Chép `ban-giao/seo.json` và `ty-gia.json` của việc cũ sang việc mới. **Lấp bằng TM làm mất cờ `#bo-qua-so`/`#bo`** → cửa 0 đỏ ở đoạn có tiền VND, phải `dien` lại đúng đoạn đó kèm cờ.
- **Giao B5/B6 khi phần lớn đoạn lấy từ TM:** nói rõ đoạn nào dịch mới, đưa đường dẫn `soat-ban-xu.md` của việc cũ và dặn đừng lặp góp ý đã áp; B5 thêm việc quét cả bài tìm đoạn TM lấp sai vai trò trường và thẻ giữ chỗ lệch.
- **Không nhận đề xuất của agent soát khi nó sửa dữ kiện của nguồn** (vd đổi "Form I-526" thành "I-526E") — giữ đúng nguồn, đẩy vào mục cần CEO xác nhận.
- **Tệp JSON:** `ghep` thêm khối `seo` (meta title/description/slug) vào tệp xuất; `post_slug` giữ slug Việt vì team import vào trang tiếng Anh đã có. Cảnh báo `JSON:` liệt kê link và ID bài còn trỏ bản Việt → đưa vào ghi chú bàn giao, đừng tự đổi.
- **`--trung` gán nhầm giữa hai đoạn cùng chữ Việt khác vai trò** (s085 H2 và s086 H3 cùng "Có thể bạn quan tâm" → H2 nhận bản của H3). Sau khi lấp, luôn so cột `en` từng đoạn với việc cũ bằng python (`csv.DictReader`), không tin số "Điền N đoạn".
- **`dien` hai lần cùng đoạn có cờ `#bo`** → ghi chú bị nối đôi; sửa bằng cách đặt lại cột `ghi_chu`. Ghi lại TSV phải giữ **CRLF** (`open(..., newline='')` + `csv.writer`), nếu không diff báo đổi toàn tệp.
- **Bản xuất JSON trang tiếng Anh (có `post_id`, `lang: en`) thay bản xuất cũ không có `post_id`:** nội dung Việt giống hệt → không đoạn mới → không chạy lại B5/B6, chỉ chứng minh cột vi/en khớp bản đã soát và `bai-dich.en.md` giống từng byte. Tên tệp import do `ghep` đặt theo tên việc (`<slug>-2.en.json`).
- **Template ACF mới chưa có bộ chuyển** (`moi` báo "Chưa có bộ chuyển"): tạo `bo-chuyen/<tên>.json` theo mẫu; trường cờ `"1"/"0"` phải khai `bo` (chữ số khớp `\w` nên bị đưa vào dịch). Đã có: acf-product-2026, acf-projectnew-2026 (trang dự án EB-5).
- **Tệp JSON xuất từ trang tiếng Việt** (`lang: vi`, post_id bản Việt): vẫn dịch, nhưng bàn giao phải cảnh báo đỏ — không import vào post_id đó (sẽ đè trang Việt); team export lại từ bản WPML tiếng Anh rồi `moi` lại (bộ nhớ dịch lấp 100%).
- **Ngày dạng "tháng 10.2026"**: bộ kiểm báo SỐ LỆCH → cờ `#bo-qua-so`.
- **B5/B6 trong Cowork**: sub-agent chạy ở container, không thấy máy → stage `song-ngu.tsv`, style guide, thuật ngữ, brief; agent ghi `/tmp/.../soat-*.md` + `sua-*.txt`; luồng chính gom ra `gom-sua.txt` trên máy rồi `dien`.
- **Trang dự án EB-5**: tiêu đề "An toàn thẻ xanh" / "An toàn khả năng thu hồi vốn" → "Job creation to support your green card" / "Structural features designed to manage investment risk"; bảo lãnh luôn nói rõ là của chủ đầu tư cho khoản vay (không đọc thành hoàn vốn được bảo đảm); thống nhất "first-position lien". Số vốn nguồn hay vênh (khoản vay 40 vs 64 triệu) → ghi CEO.
- **Chuỗi lệnh `&&`**: một lệnh phụ lỗi làm cả chuỗi (vd ghi báo cáo) không chạy — kiểm tệp sau khi ghi.
- **Tệp JSON nhiều trang** (vd `dich-3-trang-*.json`, list 3 trang): chép nguyên văn một lần ra `viec/nhap/<ngày>-<tên>.json`, rồi `moi ... --trang <post_id>` cho từng trang; B5 và B6 mỗi loại một agent soát cả 3 việc, ghi `/tmp/soat/<việc>/`.
- **JSON xuất từ web staging** (`staging-...wpcomstaging.com`): link nội bộ trỏ miền staging bản Việt, bảng `lien-ket` chỉ có immgroup.com nên `ghep` không đổi và không cảnh báo → tự quét link trong `.en.json` và báo team.
- **Trang E-2 / L-1A / EB-1C nguồn hay sai:** AMIGOS Act (23/12/2022) buộc cư trú 3 năm ở nước hiệp ước nếu quốc tịch qua đầu tư; Grenada từ US$235.000 (quỹ) / US$270.000 (BĐS); Montenegro đóng CBI 31/12/2022; con E-2/L-2 không được đi làm; L-1A/EB-1C cần đã làm quản lý ở công ty nước ngoài 1 năm trong 3 năm; không có tuổi tối thiểu 18. Dịch đúng nguồn, ghi CEO.
- **Bảng thuật ngữ bắt "thẻ xanh", "lý lịch tư pháp", "chứng minh nguồn tiền" là `chot`**: câu có các chữ này phải chứa green card / police clearance certificate / source of funds (không dùng "permanent residence", "criminal record", "source-of-funds").
- **Đoạn văn thô nhiều dòng trong trường ACF** ("- 114 căn…\r\n- 48 căn…" hoặc hai chú thích "*…\r\n*…" nằm giữa hai <ul>): `moi` gộp thành 1 đoạn, `ghep` mất xuống dòng → sau `ghep` so số `\r\n` với nguồn và vá bằng python (replace đếm đúng 1 lần), ghi báo cáo; chờ sửa dich.py.
- **Trang dự án có khoản vay C-PACE** mà nguồn gọi vốn EB-5 là "senior loan / thế chấp hạng 1": dịch đúng nguồn, báo CEO — C-PACE ở Texas thường đứng trước khoản vay thế chấp. Cộng lại cấu trúc vốn và tỷ lệ việc làm ("cao hơn 30%") để bắt lệch làm tròn.
- **Thư mục việc cũ bị xoá nhưng bộ nhớ dịch còn** → `dien --tm100 --trung` lấp lại, dựng seo.json theo `seo/tu-khoa-thi-truong.md`, không chạy lại B5/B6.
- **`bo-nho-dich.jsonl` dính dấu xung đột git** (`<<<<<<< HEAD`, `=======`, `>>>>>>>` bị commit vào tệp):
  MỌI lệnh `dich.py` chết ngay ở `doc_tm()` với `JSONDecodeError: Expecting value: line 1 column 1`. Đừng nghi
  tệp nguồn — quét tệp TM tìm dấu xung đột, **giữ cả hai nhánh** (đều là bản ghi TM thật), xoá 6 dòng dấu, rồi
  `nap` việc kế tiếp sẽ tự khử trùng và xuất lại TMX. Ireland 21/09/2026: 1.744 → 1.738 dòng, không mất bản ghi nào.
- **TM của trang nước ANH EM còn nguy hiểm hơn TM của chương trình khác:** Ireland nhận gợi ý của Hy Lạp ở
  s192 ("…**Greece** Golden Visa investment?" TM 100%), s237 ("…spend in **Greece**?" TM 85%) và — nặng nhất —
  s218 "**Parents can be included** in the application" (TM 92%) trong khi nguồn Ireland nói bố mẹ **KHÔNG** được
  đi kèm. Cửa 0 không bắt được loại lỗi này. Trong lời giao sub-agent: liệt kê đích danh các đoạn có TM đáng ngờ
  và dặn "hễ gợi ý nhắc tên nước khác thì bỏ, dịch lại". **Đừng `dien --tm100` mù** cho trang châu Âu.
- **Cửa 0 bắt SỐ LỆCH khi tiếng Anh viết số bằng CHỮ:** "1 ngày/năm" → "**One** day per year", "Gia hạn lần **1**"
  → "**First** renewal", "Cả **2** phương án" → "**Both** options", "năm thứ **5**" → "the **fifth** year",
  "Chọn **1** trong **2**" → "one of two". Hai cách xử lý: (a) viết lại để giữ chữ số — "Just 1 day per year",
  "year 5", "1 of 2 ways", "Choose 1 of the 2 options"; (b) không tự nhiên được thì `#bo-qua-so` kèm lý do.
  Cách (a) tốt hơn vì style guide §5 vốn đòi dùng chữ số.
- **Kiểm thuật ngữ so CHUỖI NGUYÊN VĂN, không hiểu biến thể:** dòng `Immigrant Investor Programme (IIP)` bắt
  buộc bản Anh chứa đúng cụm có ngoặc — viết "the Ireland Immigrant Investor Programme" (thiếu `(IIP)`) là LỖI
  CHẶN, trong khi chỉ viết "IIP" lại qua (nhờ `bien_the_en`). Tương tự, **gạch nối phá khớp**:
  "source-of-funds" không khớp `source of funds`, "residency-by-investment" không khớp `residency by investment`.
  Sửa câu cho chứa nguyên cụm, hoặc khai biến thể vào CSV nếu biến thể đó đúng ở mọi trang (đừng khai chỉ để
  cho qua một bài).
- **Trang chương trình ĐÃ ĐÓNG (Ireland IIP đóng 15/02/2023):** thì của động từ là lỗi hệ thống hay gặp khi
  chia mẻ — mẻ này viết quá khứ ("What made the IIP attractive"), mẻ kia viết hiện tại ("The program **is**
  stable") làm trang đọc như vẫn mở. B6 bắt được; luồng chính phải rà lại toàn bài. Và 150 chữ đầu **phải**
  nói rõ chương trình đã đóng — gợi ý Google cho thấy câu người ta gõ nhiều nhất là
  "does ireland have a golden visa program" (24 lần / 6 thị trường).
- **Ghi chú biên tập nội bộ có thể nằm trong trường ACF và sẽ hiển thị cho khách** (Grenada 21/09/2026,
  `product_faq_item_section_note`: *"Áp dụng đồng bộ khoản +50.000 USD vào mọi nơi mô tả Phương án BĐS"*).
  Đừng dịch sát thành câu vô nghĩa với khách, cũng **đừng tự xoá nội dung**: chuyển thành câu đính chính có ích
  (*"Figures quoted as 'from US$270,000' refer to the equity investment only; the US$50,000 government contribution
  is payable on top"*) rồi nêu **đầu tiên** trong báo cáo. Loại ghi chú này thường **tố cáo một lỗi thật của nguồn**
  — ở đây là 3 chỗ ghi giá thiếu phí Chính phủ.
- **Trang CBI Caribbean là loại nhiều lời hứa tuyệt đối nhất** — phần lớn việc biên tập là rào lại, không phải dịch.
  Mẫu hay gặp và cách xử lý: "quốc tịch đã nhận không bị thu hồi" → *"the failure of a project is not a ground for
  withdrawing citizenship"* (vẫn thu hồi được nếu gian lận) · "**luật** bảo vệ, được yêu cầu hoàn vốn" → quyền hoàn
  vốn nằm ở **hợp đồng với chủ đầu tư**, không có trong quy định CBI → *"depends on the terms of your purchase
  agreement with the developer"* · "giữ quốc tịch **trọn đời**" → *"not conditional on continued ownership"* ·
  "**tối ưu** nghĩa vụ thuế" → nêu dữ kiện + *"a second citizenship does not by itself change where you are tax
  resident… independent tax advisor"* · "**chỉ** bị từ chối nếu…" → *"the most common reason for refusal is…"* ·
  "mức độ **an toàn** của khoản đầu tư" → *"how the investment is structured"* · "**rộng nhất/nhanh gấp đôi**" →
  bỏ so sánh không nguồn, hoặc thay bằng dữ kiện mạnh hơn mà đúng (*"the only route to the E-2 in the Caribbean"*).
- **E-2 qua quốc tịch đầu tư: chuẩn pháp lý là `domicile`, KHÔNG phải `residence`** (B6 bắt, mức NẶNG).
  Nguồn Việt viết "cư trú 3 năm" → bản Anh phải là *"3 continuous years of domicile"* kèm định nghĩa
  *"actual residence with the intention of remaining, a stricter test than holding the passport"*. Đây là điểm bán
  chính của trang Grenada nên dịch sai là rủi ro tư vấn. Hiệp ước E-2 Mỹ–Grenada hiệu lực từ 1989, Grenada là nước
  Caribbean **duy nhất** có hiệp ước này.
- **Nội dung Covid-19 còn sót trên trang** (Grenada có hẳn một câu hỏi thường gặp): dịch đúng nguồn nhưng đề nghị
  CEO **xoá khỏi trang**; cùng loại với mốc so sánh cũ ("tăng 20,45% so với 2017") và số liệu không ghi năm.
- **Windows (`G:\WORD\Github\web-imm-translation`):** lệnh là `python` (không phải `python3`) và **phải**
  `$env:PYTHONIOENCODING="utf-8"` trước mỗi lệnh, nếu không mọi lệnh in chữ Việt đều chết cp1252.
  `dong-bo-bo-nho.sh` trỏ đường dẫn macOS nên không chạy — chép tay sang `bo-nho/claude-memory/` và `bo-nho/skill/`.
  `unittest` có **3 lỗi sẵn của môi trường** (2 lỗi cp1252 trong `tests/test_dich.py`, 1 lỗi thiếu `bs4`), 42/45 xanh —
  không phải lỗi bộ công cụ, đừng đi sửa nhầm.
- **Trang châu Âu — cách giảm cờ `#bo-qua-tn`:** thêm dòng riêng `thường trú nhân <nước>` → `<Nước> Golden Visa`
  (`goi-y`) vào `thuat-ngu.csv`; bộ kiểm khớp cụm dài hơn nên chỉ còn cảnh báo ở nhãn liên kết sang các nước
  chưa có dòng riêng (Hy Lạp: 13 cờ → 8). Trong **câu hỏi đáp so sánh khái niệm** ("Golden Visa có khác thường
  trú nhân không?") thì ĐƯỢC dùng "permanent residence" — đó là khái niệm, không phải tên sản phẩm.
- **Lỗi hứa hẹn kiểu mới B6 bắt được ở trang Golden Visa:** "is renewed every 5 years" đọc như **gia hạn tự
  động** → "renewable in 5-year periods for as long as you continue to own the property". Và "freedom of
  movement" là thuật ngữ luật EU chỉ quyền sống/làm việc → quyền đi lại 90/180 phải viết "visa-free travel in
  the Schengen Area".
- **B6 làm mềm quá tay có thể làm SAI nghĩa nguồn:** s114 "nguồn tiền không hợp pháp dẫn đến từ chối" bị B6 đổi
  thành "cannot be shown to be lawful… can lead to refusal" (đổi bản chất rủi ro). B5 bắt đúng. Khi hai agent
  đá nhau về độ mạnh: **giữ độ lớn của nguồn, chỉ bỏ tuyệt đối hoá**.
- **Cờ `#bo-qua-so` còn dùng cho số đứng đầu câu viết bằng chữ** ("3 thế hệ" → "Three generations", style guide
  mục 5) — bộ kiểm đếm chữ số nên sẽ bắt.
- **Agent soát trả dấu nháy cong** (`“White Paper,”`) → luồng chính chuẩn hoá về nháy thẳng trước khi `dien`.
- **`dien` chỉ NỐI THÊM ghi_chu khi dòng điền có cờ, và tự bỏ trùng** → sửa lại một đoạn đã có cờ thì viết
  `[sXXX] text` không kèm cờ, cờ cũ vẫn còn. Chỉ kèm cờ khi muốn thêm cờ MỚI.
- **Tệp JSON xuất từ trang tiếng Anh** (`lang: "en"`, có `post_id`) là luồng đúng: nhập lại vào **đúng trang
  post_id đó**. Nhớ kiểm parity trường: tập đường dẫn của `<slug>.en.json` phải khớp hệt `nguon.json`, chỉ
  thừa `/seo/*`.
- **Trang chương trình dạng ACF product-2026 luôn có 2 cảnh báo cấu trúc** (H1→H3 ở hero, H2→H4 ở hỏi đáp) —
  do template quy định, không sửa được từ nội dung; ghi lý do vào báo cáo chứ đừng đổi cấp heading.
- **Template HTML thuần trong theme (không ACF) — KHÔNG đưa cả tệp cho agent dịch, và KHÔNG dùng nhánh
  `.html` của `dich.py`** (`tach_html` đập phẳng DOM, `src` rỗng → không ráp ngược vào template được).
  Cách đúng (việc overview-usa-v2, 21/09/2026): `cong-cu/rut-layout.py rut` rút từng đoạn chữ kèm **vị trí
  byte** trong tệp gốc → xuất JSON dạng ACF-giả (`bo-chuyen/theme-layout-2026.json`, tên trường `sXXX_<loại>`)
  để chạy trọn 11 bước không phải sửa `dich.py` → `rut-layout.py nhet` ghi bản dịch về **đúng byte cũ**.
  Máy chạm markup, người chạm chữ. Bàn giao: `bang-song-ngu.md` + `tmp-info.en.php` + `ban-dich-de-duyet.docx`
  (CEO chốt: docx để duyệt, JSON chỉ khi upload ACF).
- **Ba cửa kiểm bắt buộc cho việc ráp lại template:** (1) nhét chính bản tiếng Việt vào → tệp ra phải giống
  tệp gốc **từng byte**; (2) đếm thẻ HTML bản Anh phải bằng bản gốc (chỉ khác `data-section` và href đã đổi);
  (3) đo thật trên trình duyệt ở 375 · 577 · 700 · 768 · 1440px, so số ô xuống dòng + số phần tử tràn ngang
  **với bản tiếng Việt** (bằng bản Việt là đạt, không cần bằng 0).
- **Ngân sách ký tự của từng ô CSS phải nằm trong brief và trong lời giao cho B5/B6**, nếu không TM sẽ đẩy câu
  dài làm vỡ ô (TM gợi `Investment amount` 17 ký tự cho ô `.stat-row-label` chỉ vừa 12). CSS thường đã
  `text-transform: uppercase` → viết thường trong HTML.
- **Bẫy của bộ rút chữ:** chạy cắt thẻ lẻ ở hai đầu đoạn chỉ được cắt khi thẻ **nằm sát mép**; so với "thẻ đầu
  tiên/cuối cùng" sẽ nuốt mất đoạn chữ đứng sau `</svg>` (mất 3 đoạn: nhãn badge và 2 ô `pill-yes` "Có").
  Luôn đối chiếu `difflib` giữa hai lần rút để biết đoạn nào mới.
- **Trang trục (hub) chọn từ khoá khác trang chương trình:** `u.s. investor visa` phủ 6/6 thị trường và gộp
  được cả đường thẻ xanh (EB-5, EB-1C) lẫn đường visa (L-1A, E-2); `eb-5 visa` chỉ hợp trang chương trình.
- **Dữ kiện nguồn Việt của trang Mỹ hay lỗi thời:** "giữ vốn tối thiểu 5 năm" là mốc **tiền-RIA** (RIA 2022 +
  USCIS Policy Manual Vol. 6 Part G 11/10/2024 chỉ còn **2 năm**); "15 ngày" của L-1A là **premium processing
  15 ngày làm việc** có phí I-907; "không bị đánh thuế thu nhập toàn cầu" (E-2) sai vì substantial presence
  test; "cư trú 3 năm" (AMIGOS Act) chỉ áp cho quốc tịch **có được bằng đầu tư**. Giữ đúng nguồn, đưa lên mục
  "CEO quyết" — nhưng nói rõ bản tiếng Việt đang chạy cũng sai.
