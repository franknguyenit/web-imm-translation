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
- **Trang dự án xuất cả hai bộ trường ACF** (bộ mới hero/pro_parent_rp/CTA + bộ cũ title_main/section_text_auto_*/cauhoiQA/form_dang_ky, vd Ecoplastic 20/09/2026): dịch cả hai; bộ chuyển acf-projectnew-2026 đã có đủ. Tệp nhiều trang có trang **mọi trường rỗng** (bản EN chưa nhân bản nội dung) → báo team xuất lại, không dịch.
- **Không nối `kiem ... | head && ghep`**: head luôn trả 0 nên ghep vẫn chạy khi cửa 0 ĐỎ — chạy kiem, đọc kết quả, rồi mới ghep.
- **Làm mềm tiêu đề bỏ chữ EB-5** ("AN TOÀN VỐN ĐẦU TƯ EB-5") bị bắt SỐ LỆCH + THUẬT NGỮ → giữ "EB-5" trong tiêu đề viết lại. "Cấp 1 (Tier-1)" nguồn lặp số → `#bo-qua-so`.
- **Trang dự án hay tự mâu thuẫn số** (doanh thu công ty mẹ, số năm hợp tác "hơn/gần 40 năm", việc làm 2.229/2.230, mốc ràng buộc tiền mặt giữa khối tóm tắt và khối chi tiết) → dịch đúng từng chỗ, liệt kê CEO; bác góp ý agent đòi "thống nhất" số.
- **"Độc quyền IMM Group"** trên bản Anh ngụ ý độc quyền toàn cầu → viết "offered exclusively through IMM Group in Vietnam" khi nguồn có câu "độc quyền tại Việt Nam".
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
