# Soát song ngữ — InterContinental Grenada Resort

Kiểm hết 139 dòng `song-ngu.tsv`. Không có LỆCH THẺ (`{1}…{/1}`, `{2}…{/2}`, `{br}`) — đã dò máy, khớp 100%. Icon Material Symbols (beach_access, flight, hotel, insights, flag, handshake, badge, account_balance, trending_up, balance, paid, check_circle…) đều giữ nguyên xi, đúng luật brief.

## Lỗi tìm thấy

**VỪA — "phát triển" (developer) bị dịch thành "built/builds" (thi công), lặp 5 lần, đá với chính bản dịch (s050 dùng "Developed by")**
- `s031` "...danh mục bất động sản **cao cấp** của Range Developments **hợp tác với** IHG" → "another property in the Range Developments portfolio **built with** IHG": mất chữ "cao cấp"; "hợp tác với" (đối tác thương hiệu/quản lý khách sạn) bị đổi thành "built with" (nghe như IHG thi công) — sai bản chất quan hệ, IHG là tập đoàn quản lý/thương hiệu khách sạn, không xây dựng.
- `s061` — lặp y hệt lỗi của s031 (mất "cao cấp", "built with" thay "in partnership with").
- `s037` "**được phát triển bởi** Range Developments" → "**built by** Range Developments": không khớp glossary `chủ đầu tư → developer`, không khớp s050 "Developed by".
- `s072` "Range Developments **là nhà phát triển** bất động sản..." → "Range Developments **builds** real estate...": cùng lỗi.
- `s082` "...**phát triển theo định hướng** nghỉ dưỡng quốc tế..." → "...**is built for** international hospitality...": cùng lỗi.
→ Nhà phát triển bất động sản (developer, bán cổ phần) khác nhà thầu xây dựng (builder) — nói "built by/built with" ở trang bán cổ phần BĐS có thể gây hiểu lầm về vai trò pháp lý của Range Developments và IHG.

**VỪA — thuật ngữ lệch bảng: "dependants" thay vì "dependents"**
- `s101` "within the range of **dependants** the program allows" — `thuat-ngu.csv` đã chốt `người phụ thuộc → dependents` (tiếng Anh Mỹ, một chữ *e*); "dependants" là chính tả Anh-Anh, ngược style guide mục 5 (tiếng Anh Mỹ toàn trang).

**NHẸ — thứ tự viết tắt CBI ngược**
- `s037` dùng tắt "**CBI** projects" trước khi cụm đầy đủ "citizenship by investment program" xuất hiện lần đầu (mãi tới s082/s097/s104). `thuat-ngu.csv` ghi rõ: "lần đầu viết đủ kèm (CBI)". Gộp luôn vào bản sửa s037 bên dưới.

**NHẸ — thu hẹp nghĩa "ngoại tệ" → "US dollars" (tuỳ chọn, không bắt buộc sửa)**
- `s094` "tích sản bằng **ngoại tệ**" (ngoại tệ nói chung) → "a store of value **held in US dollars**" (chỉ định cụ thể). Có thể chấp nhận vì cả bài định giá bằng USD, nhưng đây là ý thêm so với nguồn (nguồn không ghi rõ đồng tiền). Không bắt buộc sửa, ghi để CEO/B6 cân nhắc.

## Đã kiểm, ĐÚNG — không phải lỗi (theo đúng lưu ý trong đề bài)
- `s114`: viết chung "from your country of residence" — đúng style guide mục 4, đúng chỉ đạo brief.
- `s104`: giữ "first and only company in Vietnam" — đúng chỉ đạo brief (CEO cần giấy phép chứng minh).
- `s124`: "about 4% a year over 5 years, or roughly US$54,000" — đúng: 4% × 5 năm × US$270,000 = US$54,000 là **tổng 5 năm**, bản Anh đã nói rõ "over 5 years", không gây hiểu lầm là lãi mỗi năm.

## Không thuộc phạm vi B5 (đã có trong brief.md, để CEO xử lý)
`s092` mốc cuối 2026, `s112` "140" vs trang khác ghi "147", `s079` vs `s090` tên thương hiệu Cabrits Resort (Kempinski vs InterContinental) lệch nhau trong chính nguồn Việt — không phải lỗi dịch, không sửa ở đây.
