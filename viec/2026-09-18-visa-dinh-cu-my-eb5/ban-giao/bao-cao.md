# Báo cáo — Visa định cư Mỹ EB-5, bản JSON cho ACF (18/09/2026) · CHƯA QUA SOI ĐỘC LẬP

## Nguồn và quy mô
- Nguồn: tệp CEO gửi `1789701086159_visa-dinh-cu-my-eb5.json` (ACF Page Importer, template Product 2026), lưu ở `viec/nhap/2026-09-18-visa-dinh-cu-my-eb5.json`.
- 260 đoạn · 3.494 chữ nguồn · **246 đoạn khớp 100% bộ nhớ dịch** từ bản HTML đã duyệt 17/09/2026 → chỉ dịch mới 16 đoạn (tiêu đề trang, H1, mốc I-526E, chú thích TEA, 11 nhãn liên kết, dòng mức đầu tư).
- Tệp import: `ban-giao/visa-dinh-cu-my-eb5.en.json` (128 KB). Cấu trúc trùng tệp gốc, chỉ thêm khối `seo`. Giữ nguyên icon, ảnh, video, 3 SVG và 8 khối style trong `product_important_content`.

## Từ khoá và SEO
- Giữ nguyên bộ của bản 17/09: chính "eb-5 visa"; phụ eb-5 visa requirements · eb-5 visa program · eb-5 minimum investment · eb-5 visa process · eb-5 investor visa. Meta title/description và slug `eb-5-visa` nằm trong khối `seo` của tệp JSON.
- `post_slug` trong tệp vẫn là slug Việt vì team import vào trang tiếng Anh đã có; slug mới và chuyển hướng 301 từ `/en/visa-dinh-cu-my-eb5/` do team đặt khi import.

## 16 đoạn dịch mới
- s001 `post_title` → "U.S. EB-5 Visa" (B5 đề xuất "U.S. EB-5 Immigrant Visa", B6 đề xuất "U.S. EB-5 Visa" — chọn bản B6 cho đồng bộ với nhãn liên kết trong trang).
- s002 H1 → "{1}EB-5{/1} Visa: A Path to a U.S. Green Card for Your Whole Family" (thêm "A Path to" để không đọc như cam kết kết quả).
- s011 → "Grandfathering deadline for Form I-526E filings: September 30, 2026" (giữ đủ thẻ `{1}`, `{br}`, `{2}`).
- s005 giữ cờ `#bo-qua-so`: bỏ "khoảng 21 tỷ đồng"; không có phép quy đổi tiền nào trong bài. `ty-gia.json` chép từ việc 17/09 (open.er-api.com) vì mạng dòng lệnh phiên Cowork vẫn bị chặn (403 blocked-by-allowlist).
- s053 bỏ chú thích giải nghĩa chữ TEA (trường `product_conditions_item_footnote` sẽ import rỗng) — tên đầy đủ đã có ở gạch đầu dòng ngay trên.
- s088–s100: 11 nhãn liên kết. "Những người Việt thành công trên đất Mỹ" → "Immigrant success stories in the U.S." (viết chung, bỏ ngữ cảnh Việt).

## Góp ý B5/B6
- B5 (Sonnet, soát toàn bộ 260 đoạn): 0 nặng · 0 vừa · 1 nhẹ. Xác nhận thẻ giữ chỗ khớp 100% và không có đoạn nào bị bộ nhớ dịch lấp sai vai trò trường.
- B6 (Opus): 4 nặng · 11 vừa · 13 nhẹ, đề xuất sửa 23 đoạn. **Nhận 20**: tiêu đề trang, H1, "grandfathering deadline", "Preserve the current criteria", tách H2/H3 trùng chữ ở khối "Có thể bạn quan tâm", chuẩn hoá bộ nhãn liên kết, "credited with"/"reasonable economic methodologies"/"Form I-829"/"USCIS Immigrant Fee", "a rural or other set-aside project", bỏ dấu chấm thừa ở 2 gạch đầu dòng.
- **Bác 3** (s130–s132): B6 muốn đổi "Form I-526" thành "Form I-526E". Đây là dữ kiện của nguồn, không phải lỗi dịch → giữ đúng nguồn, đưa vào mục cần CEO xác nhận (luật dự án: không tự sửa dữ kiện).
- Luồng chính sửa thêm s190: trả lại cụm "under EB-5 rules" để không mất chữ EB-5 thứ hai của nguồn.

## Cần CEO xác nhận — mới hoặc đã đổi tình hình tính đến 18/09/2026
1. **Mốc 30/09/2026 (còn 12 ngày) không phải mốc giữ mức vốn US$800,000.** Bảo lưu hồ sơ của RIA bảo vệ hồ sơ nộp đến hết 30/09/2026 khi chương trình Trung tâm vùng hết hạn; mức vốn theo luật tự điều chỉnh theo lạm phát **từ 01/01/2027**, nên mốc thật của con số 800.000 USD là 31/12/2026. Trang nêu con số này ở 7 chỗ, không chỗ nào có mốc ngày.
2. **Cần chốt hôm nay ai viết bản thay khối "Key date" và ngày đổi** (khuyến nghị dựng sẵn, đổi 01/10/2026).
3. **Bản tin Visa tháng 6/2026 đã cũ 3 kỳ.** Kỳ tháng 9/2026: ba nhóm set-aside vẫn current cho mọi quốc gia; nhóm không ưu tiên (unreserved) **Unavailable với Ấn Độ** hết năm tài khóa 2026, Trung Quốc ở mốc 01/12/2016. Câu "tùy nước sinh" hiện nói quá nhẹ với chính nhóm khách bài nhắm tới. Muốn nêu đích danh Ấn Độ/Trung Quốc thì cần CEO duyệt vì là dữ kiện thêm.
4. **US$800,000 áp cho cả dự án hạ tầng**, không chỉ TEA — trang tự mâu thuẫn (FAQ có nhắc "infrastructure projects").
5. **"Tuổi con được khóa khi nộp I-526" (s130–s132)** vẫn sai luật CSPA và vẫn ghi "I-526" thay vì "I-526E" — chuyển tiếp từ 17/09, chưa xử lý.
6. Dự thảo quy định tháng 7/2026 thêm bậc US$1,4 triệu cho "high employment area" — chưa ban hành, chưa đưa lên trang.
7. Trang chưa có câu miễn trừ riêng về khả năng mất một phần hoặc toàn bộ vốn.
- Chuyển tiếp chưa xử lý từ 17/09: "Từ 18 tuổi"; thứ tự bước rút vốn trước khi có thẻ xanh vĩnh viễn; ngày bản ghi nhớ USCIS 22/05 (bản ký 21/05/2026); mâu thuẫn nội bộ "3 tuần–1 tháng" với "tới 90 ngày" và hạn visa 6 tháng tính từ ngày khám hay ngày cấp; "hơn 180 quốc gia".
- Hết hiệu lực: yêu cầu xác nhận Ecoplastic/Horseshoe Bay là dự án rural — bản xuất ACF này không còn 3 thẻ dự án (mục "Các dự án EB-5" chỉ còn tiêu đề và nút "Xem tất cả dự án"; team dựng trang xác nhận thẻ được render động).

## Cửa 0 và cảnh báo
- Lần đầu ĐỎ 2 (thiếu `tygia`, thiếu `seo.json`); sau khi gom B5/B6 ĐỎ 1 (mất chữ EB-5 ở s190). Kết quả cuối: **XANH · 0 lỗi · 27 cảnh báo**.
- Lý do giữ cảnh báo: "định cư" dịch là immigrant visa/immigration đúng ngữ cảnh · số 5 trong tên "EB-5" · s178 dài vì thêm tên chính thức Form I-956F · H1 nhảy xuống H3 theo bố cục template · s053 bỏ có chủ ý · s005 bỏ số VND.
- Cảnh báo riêng của bản JSON: **13 liên kết vẫn trỏ trang tiếng Việt** (chưa có bản /en/ trong `lien-ket/lien-ket-vi-en.tsv`) và **3 ID bài dự án (97875, 97934, 99848) vẫn trỏ bài tiếng Việt** — team quyết khi import.
- Cấu trúc cần team dựng trang xử lý: trong FAQ "IMM hỗ trợ nhà đầu tư EB-5 như thế nào?", 3 nhóm rủi ro và 4 việc IMM làm nằm chung một danh sách nên dòng "How IMM Group helps:" hiện như gạch đầu dòng thứ tư.
