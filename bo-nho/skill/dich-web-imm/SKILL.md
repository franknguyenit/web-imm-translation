---
name: dich-web-imm
description: Dịch nội dung immgroup.com Việt→Anh cho khách quốc tế (đầu tư định cư, quốc tịch, wealth management) — quy trình 11 bước có bộ nhớ dịch, thuật ngữ, SEO, hai agent soát và cửa kiểm máy. NẠP KHI CEO đưa link immgroup.com, tệp, hoặc dán nội dung tiếng Việt cần dịch sang tiếng Anh cho web; hoặc khi làm việc dịch này ở Cowork/nơi khác ngoài thư mục dự án.
---
# Dịch web IMM Group Việt → Anh

**Nguồn luật đầy đủ:** `CLAUDE.md` + `quy-trinh/style-guide.md` ở thư mục dự án (máy Mac hiện tại: `/Users/kiennh23/Claude/Projects/Web IMM Translation`; máy cũ: `/Volumes/WORK-DATA/web-imm-translation`). Đang ở thư mục đó thì CLAUDE.md đã tự nạp; skill này dùng khi ở nơi khác và để giữ bài học.

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
- **Cowork (máy ảo) chặn mạng dòng lệnh** tới immgroup.com, Google gợi ý, open.er-api.com (lỗi 403 blocked-by-allowlist): lấy trang bằng Browser pane (`request_access` scope site) + `javascript_tool` gỡ HTML vùng `#content` (bỏ script/svg/thuộc tính, bỏ chữ tên icon Material như `play_arrow`, số thứ tự trang trí) → ghi `viec/nhap/<ngày>-<slug>.html` kèm thẻ meta/canonical/hreflang → `moi` tệp đó. Kiểm hreflang các trang liên kết bằng `fetch()` cùng miền trong trang đang mở. Từ khoá: WebSearch; gợi ý Google chỉ lấy được khi trình duyệt tải JSON về (tệp `f.txt` rơi vào thư mục việc — đổi tên, dùng làm bằng chứng).
- **Memory/skill cài trong Cowork nằm ở máy ảo tạm** — mất khi hết phiên; bản bền là `bo-nho/` trong dự án + memory claude.ai của project + skill tài khoản (propose_skills).
- **`kiem` bắt `tygia` kể cả khi đã bỏ số VND bằng `#bo-qua-so`** — không có mạng thì chép `ty-gia.json` cùng ngày từ việc khác, ghi chú nguồn.
- **Bản /en/ cũ có thể vẫn là chữ Việt** (vd /en/visa-dinh-cu-my-eb5/) → không có gì để giữ nhất quán; slug cũ vẫn cần 301.
- **Số "5" trong "EB-5"**: bỏ chữ EB-5 ở bản Anh sẽ bị bắt "SỐ LỆCH" — giữ chữ EB-5 khi nguồn có.
- **Từ khoá chính phải nằm trong đoạn văn đầu, không chỉ H1** — bộ kiểm SEO không tính heading.
- **B6 tìm được lỗi luật thật của nguồn** (grandfathering, CSPA, rural priority) bằng WebSearch → luôn cho B6 dùng WebSearch/WebFetch nguồn chính thức.
