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
6b. `python3 cong-cu/dich.py ganlink <việc> --link <url trang gốc>` — ghi link GitHub của `bai-dich.vi.md` và
   `.en.md` vào `lien-ket/ban-dich-vi-en.tsv` (nguồn sự thật). Dịch lại cùng trang thì bỏ `--link`, máy tự nhớ.
   Gửi team bảng Excel: `ganlink --xuat <tệp.xlsx>`. Link chỉ sống khi thư mục việc đã được push lên GitHub.
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
- **KHÔNG phải trang châu Âu nào cũng cấm "permanent residence"** (học 22/09/2026): Bulgaria, Cộng hòa Síp và Malta
  **thật sự cấp quyền thường trú** (Bulgaria cấp thẻ PR ngay không qua tạm trú; Síp giữ PR khi còn duy trì đầu tư;
  Malta có tên chính thức *Malta Permanent Residence Programme — MPRP*) ⇒ thân bài **phải** dùng "permanent residence".
  Chỉ tiêu đề trang · H1 · nhãn mục · nhãn liên kết mới dùng tên sản phẩm "<Nước> Golden Visa", và lý do là **SEO**
  chứ không phải dữ kiện — nên vẫn gắn cờ `#bo-qua-tn` cho đúng những đoạn đó. Kiểm "thẻ có thời hạn hay quy chế
  thường trú" TRƯỚC khi chọn chữ.
- **`thuat-ngu.csv` có thể bị nhân đôi do merge git** (22/09/2026: 298 dòng, 128 dòng trùng, có cả dòng header thứ hai
  ở giữa tệp) → `kiemtn` ĐỎ ngay từ B2. Dọn: giữ **lần xuất hiện cuối** theo khoá `vi`, nhưng **dòng loại `cam` có cột
  `vi` RỖNG** thì phải khử trùng theo cột `en`, nếu gộp theo khoá rỗng sẽ xoá mất 4/5 luật cấm.
- **Đừng thêm chỗ in đậm mà nguồn không có:** nguồn nhấn mạnh bằng CHỮ HOA ("vào MỘT hạng mục") mà bản Anh dịch thành
  `**one**` thì `kiem` báo "số chỗ in đậm lệch". Giữ ý nhấn bằng chữ: "in just one of the following".
- **Agent B6 viết lại câu hay làm rơi con số** ("after 5 years" → "after that", mất một mốc trong hai) → sau khi `dien`
  tệp gom, **luôn chạy lại `kiem`** rồi mới `ghep`; đừng tin bản sửa của agent là an toàn về số.
- **Bộ kiểm quy chữ sang số:** "hai nước", "lần 2", "1 lần trong mỗi 2 năm" đều bị đếm là chữ số ⇒ bản Anh viết
  "both countries", "a second time", "once every 2 years" sẽ thành LỖI CHẶN. Gắn `#bo-qua-so` kèm lý do, đừng bẻ câu
  tiếng Anh cho vừa bộ đếm.
- **Trang có khối "Có thể bạn quan tâm":** nhãn liên kết sang nước khác phải khớp **tên trang tiếng Anh mới** của nước đó,
  không dùng máy móc gợi ý bộ nhớ dịch cũ — và nếu các trang đã bàn giao trước còn nhãn cũ thì ghi vào ghi chú cho team
  để thống nhất một lượt khi đăng.
- **Nguồn Việt của trang châu Âu hay lỗi thời ở phần thuế:** thuế doanh nghiệp Síp 12,5% đã lên **15% từ 01/01/2026**
  (mức tối thiểu toàn cầu OECD). Dịch đúng nguồn + hạ câu tuyệt đối ("historically one of the lower rates in Europe")
  + đưa lên mục CEO quyết.
- **Bảng đối chiếu link cho team (học 22/09/2026):** CEO dùng `link-compare-vi-en.xlsx` (cột `link` = URL trang Việt,
  cột `vi`/`en` = link bản dịch trên GitHub). Đặt trong `lien-ket/` cạnh `lien-ket-vi-en.tsv`. Nguồn sự thật để diff
  trong git là `lien-ket/ban-dich-vi-en.tsv` do `ganlink` ghi kèm — xlsx là bản cho người đọc. Lưu ý: openpyxl ghi lại
  tệp sẽ bỏ `calcChain.xml`, `sharedStrings.xml`, `persons/person.xml` (vô hại) nhưng **có thể làm rơi biểu đồ, pivot,
  comment thread** nếu tệp có — kiểm danh sách phần trong zip trước/sau khi ghi nếu tệp của team phức tạp hơn.
- **Việc dịch từ nội dung dán (không có URL trang)** thì `ganlink` không khớp được — để trống và hỏi CEO URL, đừng đoán.
- **Nhãn liên kết = TÊN TRANG của trang đích** (CEO chốt 22/09/2026, đã đồng bộ lại Hy Lạp · Ireland · Cyprus · Malta):
  lấy đúng chuỗi ở dòng `tieu-de` (s001) của việc đã dịch trang đó — `Ireland Golden Visa`, `Greece Golden Visa`,
  `Cyprus Golden Visa`, `Malta Golden Visa`, `Bulgaria Golden Visa`, `Montenegro Citizenship by Investment`,
  `Grenada Citizenship by Investment`. Trang **chưa dịch** thì để dạng mô tả viết thường (`Latvia residency by
  investment`, `Hungary residency by investment`) và đổi khi dịch xong. **Đừng lấy gợi ý bộ nhớ dịch cũ làm nhãn** —
  TM giữ cách gọi của trang dịch trước, dễ thành ba kiểu song song trên ba trang.
  Lệnh soát nhanh: đọc cột `src` chứa `care_service_link_title` ở mọi `song-ngu.tsv` rồi so với `s001` của từng việc.
  Sửa nhãn xong: `kiem` (phải XANH) → `ghep` → `nap` → nhắc team **import lại tệp JSON** nếu đã import bản cũ.
- **Bảng Excel của team KHÔNG để trong repo** (CEO chốt 22/09/2026): tệp `.xlsx` là nhị phân, git không merge được —
  team sửa tay một bên, máy ghi đè một bên là mất trắng một bản. Nguồn sự thật là `lien-ket/ban-dich-vi-en.tsv`;
  `ganlink --xuat <tệp.xlsx>` dựng bản mới khi cần gửi, `--xlsx <tệp>` chỉ dùng khi CEO đưa đúng tệp muốn ghi thêm.
- **Tên nước/tính từ dễ gài bẫy (học 22/09/2026):** đừng dùng **"Dominican"** cho Dominica — ngành hiểu là
  Dominican Republic, nước khác; dùng "Dominica" làm định ngữ (the Dominica passport). Thổ Nhĩ Kỳ: thân bài dùng
  **Türkiye** (tên chính thức), tiêu đề và từ khoá giữ **Turkey** vì người tìm gõ vậy. Tên có dấu chấm (**St.** Kitts)
  làm meta title KHÔNG chứa nguyên cụm từ khoá → viết "St Kitts" trong meta title, "St. Kitts and Nevis" trong thân bài.
- **Chương trình đổi tên quỹ/cơ quan mà nguồn Việt chưa cập nhật:** St. Kitts đổi SGF → **SISC** (2023), Bồ Đào Nha đổi
  SEF → **AIMA** (2023). Luật dự án: **giữ tên nguồn**, KHÔNG tự sửa dữ kiện; nếu nguồn không nêu tên riêng thì dùng
  cách gọi chung ("the immigration authority") và đưa lên mục CEO quyết.
- **Bẫy E-2 lặp lại ở mọi trang có quốc tịch trung gian:** E-2 đi theo **QUỐC TỊCH** nước hiệp ước, không theo thẻ cư trú
  (trang D7 Bồ Đào Nha viết sai ở nguồn), và điều kiện cư trú 3 năm chỉ áp cho **quốc tịch có được bằng đầu tư** —
  viết "residence and ties", không viết phẳng "3 years of residence".
- **Bộ kiểm số còn bắt các dạng:** "lần 1"/"lần 2"/"2 lần" (dùng first/second/twice), "cả hai diện" (E-1 và E-2),
  tháng ghi bằng số "12-5"/"6-11" (viết tên tháng), "2/3 diện tích" (two-thirds), "6 sao" (không phải hạng chính thức).
  Tất cả đều gắn `#bo-qua-so` kèm lý do, đừng bẻ câu tiếng Anh cho vừa bộ đếm.
- **Bảng link: một URL = một bản dịch hiện hành.** `ganlink` nay **bỏ qua** việc cũ hơn khi URL đó đã có bản mới
  (so theo tên thư mục, mở đầu bằng ngày; hậu tố `-2` của việc dịch lại cũng tính là mới hơn) — dịch lại một trang thì
  chạy `ganlink` cho việc MỚI, việc cũ tự bị bỏ qua chứ không ghi đè ngược.
- **Bài dán từ chat vẫn có URL thật:** tìm bằng `curl` trang chuyên mục hoặc `post-sitemap*.xml` của immgroup.com rồi
  đối chiếu một câu đặc trưng của nguồn — hai việc EB-5 ngày 17/09 hoá ra là **cùng một bài** (một việc dịch trọn bài,
  một việc chỉ dịch đoạn trích) nên chỉ bản trọn bài được gắn link.
- **Nguồn đếm sai số mục là lỗi của nguồn, KHÔNG tự lấp** (học 22/09/2026): trang Bồ Đào Nha viết "có **3** lựa chọn"
  rồi chỉ liệt kê 2. B6 đề nghị đổi thành "several options" — **bác**: giữ đúng con số của nguồn, ghi vào báo cáo và
  ghi chú bàn giao để CEO bổ sung trước khi đăng. Bản Anh không được tự nghĩ ra lựa chọn thứ ba.
- **Bản sửa của agent hay làm rơi tên sản phẩm bắt buộc:** B6 viết lại s007 của Bồ Đào Nha làm mất cụm "Golden Visa"
  → cửa 0 báo LỖI THUẬT NGỮ. Sau mỗi lần `dien` tệp gom, luôn `kiem` lại trước khi `ghep`.
- **Ba trang châu Âu nữa đều KHÔNG phải thường trú:** Bồ Đào Nha (thẻ 2 năm → 3 năm/lần), Hungary (tối đa 10 năm),
  Latvia (**tạm trú**, chính nguồn nói vậy). Danh sách hiện tại: dùng "permanent residence" CHỈ với Bulgaria, Cộng hoà
  Síp và Malta; mọi nước châu Âu khác dùng Golden Visa / residence permit / temporary residence permit.
- **Đồng bộ nhãn là việc lặp:** mỗi khi dịch xong một nước mới, sửa nhãn nước đó ở MỌI trang châu Âu đã dịch
  (`grep care_service_link_title` trong các `song-ngu.tsv`), chạy lại `kiem` + `ghep` + `nap`, và nhắc team import lại.
- **Template HTML nằm trong ACF JSON** (`overview_2026`: cả trang trong MỘT trường `acf.html_template`):
  `rut-layout.py rut <acf.json> <slug>` đọc thẳng trường đó, `nhet` trả lại nguyên tệp JSON chỉ thay trường ấy
  (giữ `post_id`, `lang`, mọi trường khác). Khối `<?php … ?>` phải **che bằng ký tự lấp CÙNG ĐỘ DÀI** trước khi
  quét thẻ — dấu `>` bên trong PHP làm vỡ thẻ HTML bao ngoài (bẫy của template New Zealand).
- **`moi` chỉ tra bộ nhớ dịch MỘT LẦN** lúc tạo việc. Dịch nhiều trang cùng bộ thì sau mỗi `nap` phải **tính lại
  cột `tm`** bằng chính `goi_y_tm` của `dich.py` rồi mới `dien --tm100`; không làm thì `--tm100` lấp 0 đoạn.
- **Chữ ngoài tầm bộ rút:** `alt`, `aria-label`, `title`, `iframe.title`, chuỗi trong biến PHP — người đọc vẫn thấy
  nhưng không đưa vào `song-ngu.tsv` được (phá vị trí byte). Dùng `cong-cu/vet-chu-ngoai.py` + bảng khai báo
  `viec/<việc>/chu-ngoai-bo-rut.tsv` (vi⇥en), chạy SAU `nhet`. Không sửa tay tệp trong `ban-giao/`.
- **Cửa kiểm ráp template, chạy đủ 4 bước:** thẻ HTML bản Anh = bản gốc · tập trường ACF khớp hệt · `post_id` giữ
  nguyên · **không còn ký tự tiếng Việt "sống"** (bỏ qua `<!-- -->` và `/* */`, vì nguồn có sẵn khối đã tắt).
- **Trang TRỤC (hub) dùng cụm từ khoá GỘP**, không lấy tên một chương trình: `u.s. investor visa`,
  `caribbean citizenship by investment`, `new zealand investor visa`, `european golden visa`,
  `australia investment visa` (Úc là nước duy nhất "investment visa" > "investor visa"), `canada investor visa`.
  Gợi ý mạnh nhất của trang trục hay là **câu hỏi khái niệm** ("what is golden visa in europe") hoặc **câu hỏi
  nghi ngờ** ("is there an investor visa for canada") ⇒ 150 chữ đầu phải trả lời thẳng câu đó.
- **Dịch nhiều trang cùng bộ → lỗi B6 hay bắt nhất là NHẤT QUÁN**, không phải sai nghĩa: cùng một nhãn dịch hai
  kiểu trong một trang ("Hình thức đầu tư"), khoảng số lúc có lúc không dấu cách, tên riêng lúc `Curaçao` lúc
  `Curacao`. Sửa xong một trang thì **đồng bộ luôn sang các trang còn lại trong bộ**.
- **"Tôn chỉ" KHÔNG dịch là "promise"** (đọc như một cam kết) → `credo`. **RCIC** của Canada là *Regulated Canadian
  Immigration Consultant*, **không phải luật sư** — nguồn Việt của IMM đang gọi nhầm. **Quỹ "được phê duyệt"** của
  Úc gọi đúng là **complying investment/fund**.
- **Ô bảng khoe lợi nhuận** ("Lãi suất 8–10%/năm") là rủi ro tuân thủ: giữ đúng con số nguồn nhưng thêm đúng một
  lời phủ nhận bảo đảm — "a year (average, **not guaranteed**)". Đừng đổi thành "target"/"indicative": cả hai đều
  thêm dữ kiện nguồn không nói.
- **B5 và B6 đá nhau về H1 chứa từ khoá:** B5 hay đòi H1 bám sát nguồn. Giữ từ khoá — style guide mục 7 bắt buộc,
  bỏ đi là cửa 0 ĐỎ; ghi lý do bác vào báo cáo.
- **New Zealand: Resident Visa ≠ Permanent Resident Visa.** Nguồn Việt của IMM gọi Resident Visa là "Visa Thường
  trú"; dịch thành "permanent residence" là **nói quá quyền lợi khách** (Resident Visa còn bị giới hạn travel
  conditions). Căn cứ để quyết: tên tiếng Anh mà **chính nguồn** nêu ở bước quy trình.
- **Nguồn hedge thì bản dịch phải hedge:** "có thể **xét** nộp hồ sơ nhập quốc tịch" → "you can **consider
  applying** for citizenship", không phải "you can apply". Nói chắc về quyền nhập tịch là hứa một kết quả do cơ
  quan nhà nước quyết.
- **Gạch nối làm vỡ khớp bảng thuật ngữ:** "source-of-funds evidence" KHÔNG khớp dòng `chot` "source of funds" →
  cửa 0 ĐỎ. Agent soát hay đề xuất gạch nối; bác và giữ dạng không gạch nối.
- **H1 hai dòng có `{br}`:** muốn H1 chứa **nguyên cụm** từ khoá chính thì **xếp lại chữ giữa hai dòng**
  (vd "New Zealand{br}{1}Business Investor Visa{/1}"), đừng chèn thêm chữ — bộ kiểm ghép hai dòng lại rồi mới tìm cụm.
- **Chương trình cư trú-đầu tư nước nào cũng bị gọi là "golden visa"**, kể cả nước không dùng tên đó: gợi ý
  "new zealand golden visa" (cost, benefits, to citizenship, rules, for indians, cost in inr) mạnh hơn cả tên chính
  thức "Active Investor Plus Visa" ⇒ H1 dùng tên chính thức, meta description nhồi thêm "golden visa".
- **Trang dự án bất động sản (template-bds-imm, HTML thuần):** đi đường `rut-layout.py rut/nhet`, bàn giao
  `tmp-info.en.php` + `bang-song-ngu.md` + `ban-dich-de-duyet.docx`. **Tên icon Material Symbols bị bộ rút bắt như
  chữ** (`apartment`, `paid`, `pool`, `play_arrow`…), kể cả trong `{1}…{/1}` — dịch là **vỡ icon**; phải dặn bằng
  chữ trong lời giao cho B5 và B6.
- **Chữ ngoài tầm bộ rút ở trang BĐS rất nhiều**: `alt`, `aria-label`, `iframe title`, và **chuỗi trong
  JavaScript**. Dùng `cong-cu/vet-chu-ngoai.py` (đã nhận cả `.php/.html`) + bảng `chu-ngoai-bo-rut.tsv`; bảng tự
  sắp **chuỗi dài trước**, nếu không chuỗi ngắn nuốt mất chuỗi dài chứa nó.
- **Mức 250.000 EUR của Golden Visa Hy Lạp chỉ áp cho bất động sản CHUYỂN ĐỔI CÔNG NĂNG** — để con số đứng trần là
  làm người đọc tưởng đó là mức chung. Luôn buộc mức tiền vào loại tài sản.
- **Trang dự án thì H1 là TÊN DỰ ÁN**, không nhồi từ khoá; cụm từ khoá chính đặt ở dòng `p` đầu trang + meta.
  Cửa 0 sẽ cảnh báo "H1 không chứa từ khoá" — **cố ý**, ghi lý do vào báo cáo.
- **Hai trang dự án cùng nước phải tách từ khoá** (`greece golden visa property` vs `…real estate`) để không
  giành nhau cùng truy vấn.
- **Bộ kiểm từng đọc "170 m" thành 170 TRIỆU** (hệ số `m`). Đã sửa: hệ số một chữ cái (`m`, `k`) chỉ tính khi
  **dính liền** số (`US$5m`, `800k`); có dấu cách là đơn vị đo. Ca kiểm `test_m_dinh_lien_moi_la_trieu`.
- **"tích sản an toàn" / "vô giá" / "tối ưu cho thuê"** là khẳng định tài chính không dẫn nguồn. Giữ độ lớn của
  nguồn nhưng **bỏ đúng chữ tuyệt đối hoá**. Bản đã chốt cho mảng Síp (Elysia Blu, Seaview Heights, và 3 trang
  22/09): "**can be more than an income-producing asset and a store of value held in euros. Owning at <dự án> also
  opens a route to permanent residence in Cyprus for your whole family.**" ⚠ KHÔNG viết "held in **a foreign
  currency**" (góc nhìn người Việt: ngoại tệ ≠ VND — người đọc quốc tế hỏi "foreign đối với ai?") và KHÔNG viết
  "a route to **European** residence" (đá thẳng với đoạn tuân thủ cùng trang).
- **B5 có lúc đọc nhầm cột `tm` thành cột `en`** rồi báo lỗi nặng không có thật (tên dự án của trang khác).
  Kiểm lại giá trị thật trong `song-ngu.tsv` trước khi sửa.
- **Mảng Cộng Hòa Síp KHÁC mảng Hy Lạp:** Síp cấp **thường trú thật** ⇒ thân bài dùng `permanent residence`,
  cụm "Cyprus Golden Visa" chỉ nằm ở **meta title/description**. "Công dân EU" → **Cypriot (EU) citizenship**.
- **"Cam kết cho thuê" KHÔNG dịch là "rental guarantee"** → `rental commitment`. `kiem` không bắt được vì mẫu cấm
  chỉ chặn `guarantee` + (return|approval|…); lời hứa dòng tiền phải tự soi.
- **Nhiều trang dự án cùng nước ⇒ tách từ khoá chính cho từng trang** (property · permanent residency by
  investment · real estate investment). Hệ quả: có trang phải chấp nhận cảnh báo "từ khoá không có trong 150 chữ
  đầu" vì thân bài bị ràng buộc bởi bảng thuật ngữ — **ghi lý do vào báo cáo, đừng bẻ bản dịch**.
- **`vet-chu-ngoai.py`: chuỗi ngắn nuốt chuỗi dài.** " ảnh dự án" ăn vào "Phóng to ảnh dự án" → ra
  "Phóng to project images". Khai báo cả chuỗi dài, và **lọc lại bảng theo tệp thực tế** trước mỗi lần chạy
  (tool báo lỗi và không ghi gì nếu một dòng không khớp chỗ nào).
- **Dịch loạt nhiều trang cùng chủ đầu tư:** nạp bộ nhớ dịch sau mỗi trang thì trang sau tự lấp 50–70% đoạn
  (Síp: 26 → 94 đoạn khớp). Khối "chủ đầu tư", "lộ trình PR", "lợi thế PR" gần như giống hệt nhau.

## Bài học thêm từ mẻ 3 trang dự án Síp cuối (22/09/2026)

- **Lỗi nguy hiểm nhất của loạt trang cùng bộ: TM gợi 94%, mình thay tên dự án rồi tiện tay viết lại phần còn
  lại của câu.** Ba trang Park Residence / Centro Limassol / Aktea Residence 4 cùng trượt đúng một câu thành
  "a route to **European residence**" — sáu agent B5/B6 đều bắt, mức NẶNG. **Phần câu mà TM trả về đã qua hai
  cửa soát ở trang trước: chỉ thay tên dự án, đừng sửa gì khác.**
- **Template BĐS nhiễm tiếng Anh-Anh rất nặng** (CEO đã chốt tiếng Anh **Mỹ**): `letting support` → `rental
  support` · `timber` → `natural wood` · `video door entry` → `video intercom` · `EV charging point` →
  `EV charging station` · `intruder alarm` → `security alarm` · `upmarket` → `upscale` · `cafés` → `cafes`.
  **Ngoại lệ:** tên riêng chính thức giữ nguyên ("Strovolos Municipal Sports **Centre**").
- **"community" là từ nói quá quy mô.** "Không gian sống khép kín" của một toà 12–60 căn → `self-contained
  living`, không phải `self-contained residential community`.
- **Đừng tự đặt tên riêng mà nguồn không nêu.** Nguồn ghi "Lâu đài Cổ đại" → dịch `the historic castle`, KHÔNG
  dịch thành "Limassol Castle" dù đúng thực tế. Ngược lại, **tên riêng nguồn phiên âm sai thì sửa**: "Bệnh viện
  Nhi Makario" → **Makarios** Children's Hospital.
- **Marina ≠ berth:** "bến thuyền siêu du thuyền Limassol Marina" → `Limassol Marina, the landmark superyacht
  marina` (một "berth" chỉ là một chỗ đậu).
- **Nhất quán toàn loạt thắng góp ý lẻ của một agent.** B6 của MỘT trang đòi đổi `Prepare the file` →
  `Prepare your application`, `{X} project timeline` → `Project timeline for {X}`, dạng cụm danh từ → câu
  "You must…". Đã **bác hết** vì 8 trang cùng loạt đã bàn giao dùng bản cũ; ghi vào báo cáo như **ứng viên sửa
  đồng loạt**. Quy tắc: sửa lẻ một trang trong loạt là tạo lỗi mới.
- **Dấu `–` trang trí trong H2 của template** ("Căn hộ cao cấp tại – {Paphos}") **bỏ được** — nó là chữ, không
  phải thẻ; "Premium apartments in – {Paphos}" là tiếng Anh vỡ.
- **Chín trang dự án cùng một nước ⇒ chín cụm từ khoá.** Khi trục địa danh và trục "golden visa / residency by
  investment" đã cạn, lùi về **trục tình trạng hàng**: `new build apartments in cyprus` — vừa là điểm bán vừa là
  **điều kiện pháp lý** của diện PR Síp (chỉ nhận BĐS mua mới từ chủ đầu tư).
  ⚠ Loại hết gợi ý chứa **"north cyprus"**: vùng khác, không thuộc EU, không có diện PR này.
- **Sau mỗi lần `git merge` phải chạy `kiemtn` trước khi dịch.** Merge hai nhánh cùng append vào
  `thuat-ngu.csv` làm tệp **nhân đôi** (237 → 509 dòng, 200 khoá trùng, lọt thêm một dòng tiêu đề giữa thân tệp).
  Gộp lại: khoá trùng **giống hệt** thì giữ một; khoá trùng **khác nội dung** thì **chọn tay** (ưu tiên dòng của
  việc đã dịch thật, ưu tiên tên chính thức); dòng `cam` khoá rỗng phải lọc theo **cả dòng**.
- **`rut-layout.py` cần `--bo-chuyen theme-layout-2026`** — bộ chuyển này có `truong_goc` rỗng nên `moi` KHÔNG
  tự khớp được, sẽ báo "Chưa có bộ chuyển cho template này".
