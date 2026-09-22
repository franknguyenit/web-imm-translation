# Báo cáo — dịch template overview/usa/v2 (tmp-info.php) sang tiếng Anh

**Nguồn:** `wp-content/themes/immgroup/resources/templates/overview/usa/v2/tmp-info.php` — HTML thuần trong theme,
không phải trang ACF. 279 đoạn chữ · 2.152 chữ tiếng Việt · 12 mục (section).

## Cách làm (khác các việc trước)
Trang này không xuất được JSON ACF, mà đưa cả tệp HTML cho agent dịch thì agent phải sửa markup → dễ vỡ giao diện.
Nên tôi tách riêng: **máy chạm markup, người chạm chữ**.
1. `cong-cu/rut-layout.py rut` rút 279 đoạn chữ kèm **vị trí byte** trong tệp gốc.
2. Dịch qua đúng quy trình 11 bước (bộ nhớ dịch, bảng thuật ngữ, cửa 0, B5, B6).
3. `rut-layout.py nhet` ghi bản dịch trở lại **đúng vị trí byte cũ**.
**Bằng chứng an toàn:** nhét lại chính bản tiếng Việt → tệp ra giống tệp gốc **từng byte**. Bản tiếng Anh có
**1.287 thẻ HTML, y hệt bản gốc**; chỉ 10 thẻ khác, đều là cố ý (8 nhãn `data-section` + 2 liên kết đổi sang `/en/`).

## Kiểm giao diện thật (trình duyệt, đo ở 375 · 577 · 700 · 768 · 1440 px)
| | Bản Việt | Bản Anh |
|---|---|---|
| Ô hẹp xuống 2 dòng ở **375px** | **15** (11 `stat-row-label`, 4 `stat-row-value`) | **0** |
| Ô hẹp xuống 2 dòng ở **577px** | 2 (`gi-value`) | 5 (3 `gi-label` + 2 `gi-value`) |
| Ô hẹp xuống 2 dòng ở **700 / 768 / 1440px** | 0 | 0 |
| Phần tử tràn ngang | 7 (chữ số trang trí `number-bg`, cố ý) | 7 — y hệt |
| Chiều rộng tài liệu | 377 / 579 / 770 / 1442 | 377 / 579 / 770 / 1442 — y hệt |

**Không có chỗ nào vỡ.** Ở mobile bản Anh còn gọn hơn bản Việt (15 ô xuống dòng → 0).
Điểm duy nhất bản Anh nhiều hơn: dải hẹp **577–~690px** (máy tính bảng dựng đứng), 3 nhãn
`gi-label` ("Amount locked in", "Criteria preserved", "Protected status") xuống 2 dòng.
**Cả ba cùng xuống dòng nên ba thẻ vẫn thẳng hàng**, chỉ cao thêm một dòng — không lệch, không tràn.
Muốn tuyệt đối một dòng thì rút còn "Amount kept" / "Criteria kept" / "Protected", nhưng sẽ mất nghĩa.

## Từ khoá
- **Chính:** `u.s. investor visa` — gợi ý Google phủ 6/6 thị trường (requirements 18 lần, cost 12, to green card 12).
- **Phụ:** green card by investment · u.s. investment immigration · eb-5 visa · eb-1c green card · l-1a visa · e-2 visa.
- ⚠ Xếp hạng theo **độ phủ gợi ý Google, chưa có số lượt tìm** (cần Ahrefs/Semrush — tiêu tiền, cần CEO duyệt).

## Đoạn đã bỏ hoặc viết chung vì ngữ cảnh khách Việt
- `(~19,2 tỷ)` dưới ô 800.000 USD → **bỏ hẳn** (ô để trống): số VND chỉ nhắc lại số USD, vô nghĩa với khách quốc tế.
  CEO muốn ô có chữ thì điền "minimum" — nhưng đó là thông tin nguồn không có, nên tôi không tự thêm.
- `800.000 USD (~19,2 tỷ)` trong bảng so sánh → `US$800,000`.
- "công ty mẹ Việt Nam" (s112, s114, s117) → "the parent company abroad".
- "2.500+ visa được cấp cho các gia đình Việt Nam" → "2,500+ visas granted to client families".
- Giữ nguyên dữ kiện công ty có chữ Việt Nam (21+ năm tại Việt Nam từ 01/2005, Quỹ Be Better, nhà sáng lập
  Tran Van Tinh) — style guide mục 4 cho phép.

## Quy đổi tiền
Không có phép quy đổi nào: mọi số tiền trong nguồn đã là USD. Số VND duy nhất là `(~19,2 tỷ)` — đã bỏ (xem trên).

## Chỗ đã làm mềm vì tuân thủ
| Mã | Nguồn | Bản Anh | Lý do |
|---|---|---|---|
| s017 | "Miễn rủi ro" | "Protected status" | Vốn EB-5 bắt buộc *at risk*; không được gắn nhãn miễn rủi ro cạnh US$800,000. Ý thật là miễn rủi ro **pháp lý** khi luật đổi |
| s028 | "thẻ xanh Mỹ **vĩnh viễn** trực tiếp" | "lead directly to a U.S. green card" | EB-5 cấp thẻ xanh **có điều kiện 2 năm** trước, phải nộp I-829 gỡ điều kiện |
| s146, s155, s191 | "Không bị đánh thuế thu nhập toàn cầu" | "phụ thuộc thời gian bạn ở Mỹ — hỏi cố vấn thuế độc lập" | Giữ E-2 mà đủ ngày theo *substantial presence test* thì **thành U.S. tax resident**. Nói như nguồn là sai luật thuế Mỹ |
| s221 | "tỷ lệ chấp thuận 100%" | "every project approved to date" | Style guide cấm "100% approval" |
| s051, s077 | "đầy đủ phúc lợi… như công dân Mỹ" | "most public benefits" | Thường trú nhân bị hạn chế theo PRWORA (5-year bar với nhiều phúc lợi liên bang) |
| s092, s120 | "15 ngày" | "15 **business** days with premium processing" | 15 ngày làm việc là *premium processing* (Form I-907, có phí riêng), không phải tốc độ mặc định |
| s188 | "Tối thiểu 100.000–150.000 USD" | "Typically US$100,000–150,000" | Luật E-2 **không có ngưỡng vốn luật định**, chuẩn là "substantial investment" |
| s151, s158 | "cư trú 3 năm" áp cho mọi đương đơn E-2 | "nếu quốc tịch có **do đầu tư**" | AMIGOS Act chỉ áp điều kiện 3 năm cho quốc tịch có được bằng đầu tư |
| s211 | "đa dạng bậc nhất" | "one of the broadest" | Style guide mục 1 cấm "số 1 / hàng đầu" |

## ⚠ Nguồn có vẻ sai hoặc lỗi thời — CEO quyết, tôi KHÔNG tự sửa
1. **s047 "tối thiểu 5 năm" (thời gian giữ vốn EB-5).** Agent soát chuyên môn dẫn RIA 2022 (INA 203(b)(5)) và
   USCIS Policy Manual Vol. 6 Part G (hướng dẫn 11/10/2024): *sustainment period* chỉ còn **2 năm** kể từ ngày
   góp vốn; "5 năm" là mốc **tiền-RIA**. Tôi giữ đúng nguồn ("for at least 5 years") theo luật dự án
   (không tự cập nhật số liệu luật). **Đây là dữ kiện sai trên cả bản tiếng Việt đang chạy** — nên sửa cả hai bản.
2. **s212 "Đơn vị Việt Nam đầu tiên…" và s224 "Công ty Việt Nam đầu tiên và duy nhất…"** — khẳng định
   first/only. Tôi giữ nguyên độ lớn của nguồn (thêm "in Vietnam"), nhưng cần bằng chứng dẫn nguồn được nếu bị hỏi.
3. **s220/s253 "Thành viên chính thức IIUSA"** — IIUSA phân hạng hội viên (Regional Center member, Associate
   member…), không có hạng tên "full member". Xác nhận hạng đúng trước khi đăng.
4. **s236 "tối thiểu 51% lợi nhuận"** vào Quỹ Be Better — trang About bản EN đang chạy ghi **50%**. Hai con số
   lệch nhau, cần thống nhất.
5. **s206 lời hứa hoàn phí** — nên cho pháp chế đọc trước khi đăng bản tiếng Anh.

## Liên kết
- Đổi sang bản `/en/` được **2** liên kết (trang EB-5).
- **11 liên kết còn trỏ trang tiếng Việt** vì chưa có bản `/en/`: `/dau-tu-dinh-cu-my/`,
  `/visa-dinh-cu-my-eb1c/`, `/visa-my-e2/`, `/visa-my-l1a/`, và 7 neo của `/hieu-ve-nuoc-my/#n0…#n6`.
  Team quyết: để tạm trỏ bản Việt, hay ẩn các chip chưa có trang EN.

## SEO
`ban-giao/seo.json` — meta title 52 ký tự, meta description 135, slug `us-investor-visa-green-card-programs`.
Chưa rà được slug cũ cần 301 vì trang này chưa có bản tiếng Anh (không có thẻ hreflang để đối chiếu).

## Cửa kiểm
- **Cửa 0 (máy):** XANH · 0 lỗi chặn · 26 cảnh báo (đã đọc từng dòng: đều là biến thể thuật ngữ được phép,
  dữ kiện công ty có chữ "Vietnam", và các cờ `#bo` / `#bo-qua-so` đã ghi lý do).
- **Cửa giao diện (trình duyệt):** XANH — xem bảng trên.
- Nhãn: **chưa qua soi độc lập**.

## Hai agent soát độc lập (B5 song ngữ · B6 bản xứ + chuyên môn)
Chạy song song, không thấy báo cáo của nhau. **B6:** 6 chặn · 22 nên sửa · 10 góp ý. **B5:** 1 chặn · 3 nên sửa · 2 góp ý.
Tổng cộng **49 góp ý đã nhận và áp**, 4 đã bác:

| Bác | Lý do |
|---|---|
| B6 đòi đổi "5 năm" giữ vốn EB-5 thành "2 năm" | Luật dự án: không tự cập nhật số liệu luật. Giữ đúng nguồn + đưa lên mục "CEO quyết" ở trên |
| B6 đòi hạ "Đơn vị Việt Nam **đầu tiên**…" (s212) thành "One of the first…" | Giữ độ lớn của nguồn; đây là dữ kiện công ty, không phải tuyệt đối hoá kiểu "tốt nhất". Cần bằng chứng nếu bị hỏi |
| B6 đòi bỏ hẳn "**đầu tiên và duy nhất**" (s224) | Như trên |
| B6 đòi rút "Countries licensing us directly" thành "Government licenses" vì sợ vỡ ô | Đo thật: ô đó là `.l` trong `stat-strip`, **bản Việt cũng xuống 2 dòng y hệt** → không phải lỗi |

B5 và B6 cùng bắt s017 "Miễn rủi ro" và s016 quá dài — hai agent độc lập trùng kết luận, đã sửa cả hai.

## Bàn giao
| Tệp | Dùng để làm gì |
|---|---|
| `ban-giao/tmp-info.en.php` | Template HTML tiếng Anh — cùng cấu trúc, 1.287 thẻ y hệt bản gốc |
| `ban-giao/bang-song-ngu.md` | Bảng song ngữ 279 dòng (mã · mục · ô giao diện · Việt · Anh) |
| `ban-giao/ban-dich-de-duyet.docx` | Bản duyệt cho người đọc, có cột "Duyệt / sửa lại" |
| `ban-giao/seo.json` | meta title / description / slug / từ khoá |
| `ban-giao/bao-cao.md` | Tệp này |

**Sửa lại sau khi duyệt:** sửa cột `en` theo mã đoạn → `dich.py dien` → `kiem` → chạy lại
`rut-layout.py nhet` là ra bản HTML mới. Không bao giờ sửa tay `tmp-info.en.php`.
