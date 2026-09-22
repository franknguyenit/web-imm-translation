# Báo cáo dịch — Định cư Canada Đảo Hoàng Tử Edward (PEI)

**Nhãn: chưa qua soi độc lập.** Bản dịch đã qua cửa kiểm máy và hai agent soát nội bộ, chưa có người ngoài đọc lại.

## Nguồn

- Tệp `viec/nhap/2026-09-22-dinh-cu-canada-dao-hoang-tu-edward-pei.json` — xuất từ ACF Page Importer, md5
  `7a6c512b24083833027e999d3b297195`, khớp nguyên văn với tệp CEO gửi.
- **Cảnh báo quan trọng:** tệp xuất từ **trang tiếng Việt** (`"lang": "vi"`, `post_id: 25246`). Không được nhập
  tệp `.en.json` vào post_id này — sẽ đè lên trang tiếng Việt đang chạy.
- 175 đoạn · 2.214 chữ tiếng Việt · 29 đoạn có gợi ý từ bộ nhớ dịch.

## Từ khoá

- **Chính:** `prince edward island entrepreneur program`. Lý do: đa số trang đối thủ xếp hạng cho chủ đề này
  (elaarimmigration, canadapass, getincanada, internationalexperience, evergreenimmigration) đều đặt đúng cụm
  này ở title; "PEI" đứng một mình quá mơ hồ với người tìm ngoài Canada.
- **Phụ:** `pei pnp business impact category` (tên chính thức trên princeedwardisland.ca) · `pei work permit
  stream` · `canada entrepreneur immigration` · `pei business immigration requirements` ·
  `canada provincial nominee program entrepreneur` · `pei entrepreneur program cost`.
- ⚠ **Xếp hạng theo độ phủ tiêu đề đối thủ trên Google, chưa có số lượt tìm kiếm.** Lệnh `tukhoa` trả 0 gợi ý vì
  môi trường Cowork chặn mạng dòng lệnh tới Google. Muốn có số lượt tìm thật cần công cụ trả phí (Ahrefs/Semrush).

## Đoạn viết lại lớn

- **s002 (H1):** "ĐỊNH CƯ CANADA DIỆN DOANH NHÂN / ĐẢO HOÀNG TỬ EDWARD (PEI)" →
  "Canada Business Immigration / Prince Edward Island Entrepreneur Program". Bỏ "(PEI)" khỏi H1 để giữ nguyên
  cụm từ khoá chính; "(PEI)" được giới thiệu đủ ở đoạn ngay sau (s004).
- **s004:** thêm chủ ngữ là tên chương trình ("The Prince Edward Island Entrepreneur Program is a …") để từ khoá
  chính nằm trong 150 chữ đầu — không thêm dữ kiện nào.
- **s011:** "QUYỀN LỢI ĐỊNH CƯ PEI" → "Benefits of settling in Prince Edward Island" (bỏ viết hoa cả dòng).
- **s035:** "ĐIỀU KIỆN THAM GIA PEI" → "PEI Entrepreneur Program requirements" (đưa từ khoá phụ vào H2).
- **s156:** câu nguồn "Hai lựa chọn phổ biến (B.C và Ontario): có bằng IELTS…" vỡ logic khi dịch sát (nêu "hai
  lựa chọn" rồi chỉ liệt kê một điều kiện) → viết lại thành một câu hoàn chỉnh, giữ đủ dữ kiện.

## Đoạn đã bỏ vì ngữ cảnh khách Việt

- **s009 — BỎ HẲN:** "Cộng đồng người Việt sẵn có: hơn 1.000 người Việt & ~50 doanh nghiệp người Việt tại PEI."
  Đây là điểm bán chỉ có ý nghĩa với khách Việt; giữ lại trên bản quốc tế vừa lạc lõng vừa thu hẹp đối tượng.
- **s007, s025, s041, s043 — bỏ số tiền VND trong ngoặc** (2,8 tỷ đồng / 11,2 tỷ đồng): chỉ là nhắc lại mức CAD
  đã nêu, không có thông tin mới cho người đọc quốc tế.

## Quy đổi tiền

| Đoạn | Số gốc | Quy đổi ghi trong bản Anh | Tỷ giá | Nguồn | Ngày |
|---|---|---|---|---|---|
| s007 | C$150,000 | approximately US$107,000 | 1 CAD = 0.7131 USD | open.er-api.com (ExchangeRate-API) | 22/09/2026 |
| s041 | C$600,000 | approximately US$428,000 | 1 CAD = 0.7131 USD | open.er-api.com (ExchangeRate-API) | 22/09/2026 |

- Mức vốn luật định **giữ nguyên đơn vị C$** theo style guide mục 5; US$ chỉ là tham chiếu ở lần nhắc đầu.
- Tệp `ty-gia.json` chép từ việc `2026-09-22-quoc-tich-dominica` **cùng ngày cùng nguồn**, vì Cowork chặn mạng
  dòng lệnh tới open.er-api.com (403 blocked-by-allowlist).

## Chỗ đã làm mềm vì tuân thủ

- **s104** "Vợ/chồng được quyền đi làm" → "Your spouse **may also be eligible to work**." Thực tế IRCC: vợ/chồng
  phải tự xin open work permit và phải đạt điều kiện, không tự động có quyền làm việc.
- **s142** "không phải đóng thuế" → "**generally** not subject to Canadian income tax" (bỏ khẳng định thuế tuyệt đối).
- **s094** "ý tưởng phù hợp nhất để **xin được** Work Permit" → "best positioned to **support** a work permit
  application" (bỏ hàm ý bảo đảm kết quả).
- **s018** "gia đình **được hưởng quyền** của thường trú nhân" → "gains the status of … **with access to** …"
  (PR còn phụ thuộc đề cử tỉnh bang và quyết định của IRCC).
- **s115** "**thường** có thời hạn **tối đa** 2 năm" → "usually run for **up to** 2 years" (bỏ mâu thuẫn logic).
- Giữ nguyên **s091** — đây là đoạn cảnh báo rủi ro tốt nhất của trang, nguồn đã viết đúng chuẩn.

## Nguồn có vẻ sai hoặc lỗi thời — ĐÃ DỊCH ĐÚNG NGUỒN, cần CEO xác nhận

1. **s166 — con trên 22 tuổi đi cùng nếu đang du học toàn thời gian.** Đây là quy định **trước 01/08/2014**, đã bị
   bãi bỏ. IRCC hiện hành: con từ 22 tuổi trở lên chỉ được tính là phụ thuộc khi **đồng thời** (a) phụ thuộc tài
   chính vào cha mẹ từ trước khi đủ 22 tuổi **và** (b) không tự nuôi sống được vì tình trạng thể chất hoặc tâm thần.
   Du học toàn thời gian **không** còn là ngoại lệ. Câu này có thể khiến khách lập kế hoạch sai cho con lớn.
   (Nguồn: canada.ca — "Who you can include as a dependent child".)
2. **s160 — "chương trình nhìn chung không giới hạn tuổi".** Mâu thuẫn trực tiếp với **s037** ngay trong cùng
   trang: PEI **có** giới hạn 21–59 tuổi. Khối FAQ này viết chung cho mọi tỉnh bang nhưng đặt trên trang PEI thì
   thành sai.
3. **s134 vs s135 — "cư trú đủ 5 năm" mâu thuẫn với "3 trong 5 năm".** Quy định hiện hành là 1.095 ngày hiện diện
   thực tế trong 5 năm trước ngày nộp. Đã dịch trung tính ("held over a 5-year qualifying period") để không khẳng
   định sai, nhưng dữ kiện gốc vẫn cần CEO sửa.
4. **s137, s138 — thiếu mốc tuổi:** yêu cầu CLB 4 và bài thi quốc tịch chỉ áp cho người **18–54 tuổi**; người trên
   54 được miễn. Đây là điểm bán có lợi cho khách lớn tuổi mà nguồn bỏ sót. Không tự thêm.
5. **s062 — lộ trình thiếu hai bước có thật:** sau 12 tháng vận hành phải hoàn thành **Performance Agreement** →
   nhận **nomination certificate** của tỉnh bang → rồi mới nộp IRCC xin PR. Không tự thêm.
6. **s032 — "không yêu cầu lợi nhuận hoặc tạo việc làm":** đúng về chữ, nhưng guide PEI có yêu cầu tối thiểu
   **C$75,000 chi phí vận hành hợp lệ**. Trang không nhắc → dễ hiểu là không có ràng buộc tài chính nào.
7. **s048–s062 — nguồn không nhắc phí nộp hồ sơ C$10,000** cho tỉnh bang (guide PEI ghi rõ). Khách hỏi chi phí mà
   trang không có.
8. **s151 — điều kiện Quebec:** các diện doanh nhân/đầu tư Quebec đã qua nhiều đợt tạm ngưng gần đây; nên xác minh
   còn hiệu lực trước khi đăng.
9. **s072 — "Bang Manioba" sai chính tả** trong nguồn → đã dịch là "Manitoba". Nên sửa cả bản tiếng Việt.

## Góp ý của B5/B6 đã BÁC và lý do

- **B5 đề nghị bỏ "personally" ở s004.** Bác: đoạn nguồn tuy không có chữ "trực tiếp", nhưng s095 trong cùng trang
  nói rõ nhà đầu tư phải tự vận hành. Bỏ "personally" khiến câu mở đầu đọc như đầu tư thụ động — rủi ro tuân thủ
  lớn hơn rủi ro thêm chữ.
- **B5 góp ý s021 "Why investors choose this program" mang giọng quảng cáo.** Bác: đây là bản dịch dùng lại từ bộ
  nhớ dịch (TM 100%), đang dùng thống nhất ở nhiều trang; đổi riêng trang này làm lệch cả site.
- **B6 đề nghị đổi CTA s063 "View all projects" → "View all programs".** Bác: nhãn CTA dùng chung toàn site (TM
  100%). Nếu CEO thấy hợp lý thì nên đổi đồng loạt ở mọi trang, không đổi lẻ.
- **B6 đề nghị gọi đúng tên "Parent and Grandparent Super Visa" ở s129**, bổ sung C$75,000 / C$10,000 / Performance
  Agreement / mốc tuổi 18–54. Bác ở bước dịch: đây là **thêm dữ kiện nguồn không có**. Đã chuyển sang mục trên để
  CEO quyết.
- **B6 đề nghị thêm dòng dẫn "Rules vary by province" ở đầu khối FAQ.** Bác: thêm nội dung mới. Nhưng ghi nhận vấn
  đề có thật — khối FAQ dẫn điều kiện của Ontario, B.C., Quebec khá dày trên một trang về PEI.
- **B6 đề nghị sửa s100** ("cả gia đình được làm việc"). Bác ở bước dịch vì sửa sẽ đụng dữ kiện nguồn; đã ghi vào
  mục cần CEO xác nhận cùng s104.

## Kết quả cửa 0

- `kiem`: **XANH · 0 lỗi chặn · 27 cảnh báo · 174/175 đoạn đã dịch** (đoạn 175 là s009 đã cố ý bỏ).
- Lỗi chặn đã sửa trong quá trình: 4 lượt (s140, s171 SỐ LỆCH · s147 thuật ngữ `chứng minh nguồn tiền` phải là
  "source of funds" · thiếu `seo.json`).
- Cảnh báo đã đọc và giữ nguyên có lý do:
  - **s087 "Three", s156 "Two"** — bộ kiểm báo "số không có ở nguồn". Đây là số **đứng đầu câu**, style guide mục 5
    cho phép viết chữ. Cảnh báo giả.
  - **s025, s043 VND không thấy** — cố ý bỏ, đã gắn cờ `#bo-qua-so`.
  - **CẤU TRÚC heading nhảy H1→H3 và H2→H4** — do template ACF của trang sản phẩm (hero dùng h3, FAQ dùng h4),
    không sửa được ở khâu dịch.
  - **Các cảnh báo THUẬT NGỮ còn lại** đều là gợi ý (`goi-y`), không phải luật `chot`; cách viết đã chọn là cách
    người trong ngành Canada nói (province, provincial nominee programs, permanent residence, letter of support).
- Số lỗi B5/B6 bắt: **B5** 0 chặn · 1 nên sửa · 4 góp ý. **B6** 8 chặn (1 ngôn ngữ, 4 dữ kiện chờ CEO, 3 tuân thủ)
  · 27 nên sửa · 12 góp ý. Đã áp 44 đoạn sửa.

## SEO

- `meta_title` 53 ký tự · `meta_description` 147 ký tự · `slug` 41 ký tự — đều trong chuẩn.
- **Slug cũ cần chuyển hướng 301: không có.** Trang chưa từng có bản tiếng Anh (tệp xuất không có thẻ hreflang).
- `schema_faq: true` — trang có 12 câu hỏi thường gặp.

## Liên kết

- **17 liên kết nội bộ trong tệp `.en.json` vẫn trỏ trang tiếng Việt trên miền staging**
  (`staging-41de-immgroupcom.wpcomstaging.com`): 1 CTA đăng ký tư vấn, 7 nhãn tỉnh bang Canada, 9 mục "Hiểu về
  Canada". Bảng `lien-ket/lien-ket-vi-en.tsv` chỉ có immgroup.com nên `ghep` không đổi và cũng không cảnh báo.
- Trong các trang Canada được dẫn, **chỉ Start-up Visa đã có bản /en/**
  (`https://immgroup.com/en/start-up-visa-canada-suv/`) — và trang đó không nằm trong danh sách liên kết của trang
  này. Team cần tự trỏ lại khi các trang tỉnh bang có bản tiếng Anh.
