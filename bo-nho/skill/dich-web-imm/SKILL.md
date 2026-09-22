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
