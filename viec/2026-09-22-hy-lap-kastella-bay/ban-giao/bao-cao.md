# Báo cáo — Dự án Kastella Bay (Piraeus, Hy Lạp)

- **Nguồn:** tệp HTML thuần của theme — `template-bds-imm/du-an/hy-lap__kastella-bay/dist/hy-lap__kastella-bay.html`
  (**không phải ACF**). Trang web tương ứng:
  `/quoc-tich-va-thuong-tru-nhan-chau-au/thuong-tru-nhan-hy-lap/dau-tu-lay-thuong-tru-nhan-hy-lap-du-an-can-ho-cao-cap-kastella-bay/`
- **Số đoạn:** 141 đoạn chữ (138 vào bảng song ngữ) / 1.124 chữ nguồn.
- **Cửa 0:** XANH · 0 lỗi chặn · 17 cảnh báo. **Nhãn: chưa qua soi độc lập.**

## Cách ráp lại và 3 cửa kiểm đã chạy
1. `rut-layout.py rut` rút chữ kèm **vị trí byte** → `nhet` ghi bản dịch về đúng byte cũ. Máy chạm markup, người chạm chữ.
2. **Nhét lại chính bản tiếng Việt → tệp ra giống tệp gốc TỪNG BYTE ✓**
3. **Số thẻ HTML bản Anh = bản gốc, không lệch thẻ nào ✓** · **không còn ký tự tiếng Việt sống ✓**
   (bỏ qua phần đã chú thích `<!-- -->` và `/* */`).
4. Chưa đo trên trình duyệt ở 375 · 577 · 700 · 768 · 1440px — **team nên đo trước khi đăng**, vì tiếng Anh dài hơn
   tiếng Việt ở một số ô thẻ.

## Tệp bàn giao
| Tệp | Dùng để |
|---|---|
| **`tmp-info.en.php`** | **bản HTML tiếng Anh hoàn chỉnh để dán lên trang** — đây là tệp chính |
| `ban-dich-de-duyet.docx` | bản duyệt nội dung cho CEO/team |
| `bang-song-ngu.md` | bảng đối chiếu từng đoạn Việt–Anh, có cả ngữ cảnh |
| `bai-dich.en.md` / `.en.html` / `.vi.md` | bản chữ trần để đọc và so |
| `seo.json` | meta title/description, slug, từ khoá |
| `hy-lap-kastella-bay.en.json` | bản ACF-giả nội bộ (chỉ để dựng lại), **team không import tệp này** |

## Từ khoá
- **Chính:** `greece golden visa property`.
- **Phụ:** `greece golden visa properties for sale` · `greece golden visa 250 000` ·
  `buy property in greece for residency` · `greece golden visa property investment` ·
  `greece golden visa requirements` · `greece golden visa real estate requirements`.
- **H1 giữ nguyên tên dự án "Kastella Bay"** — trang dự án thì H1 phải là tên dự án; cụm từ khoá chính nằm ở dòng
  `p` đầu trang và trong meta title/description. Cửa 0 cảnh báo "H1 không chứa từ khoá" — **cố ý**.
- Người tìm hay gõ "properties for sale that **meet €400k**" ⇒ mức **250.000 EUR** là điểm khác biệt, đã đưa vào
  meta description.
- ⚠ Xếp hạng theo độ phủ gợi ý Google, **chưa có số lượt tìm**.

## Bẫy riêng của template bất động sản
- **Rất nhiều đoạn không phải chữ mà là TÊN ICON Material Symbols** (`apartment`, `directions_car`, `train`,
  `paid`, `check_circle`, `workspace_premium`, `verified`, `public`, `domain`, `passport`, `travel_explore`,
  `location_off`, `badge`, `balance`, và tên nằm trong `{1}…{/1}`: `hotel`, `bed`, `architecture`, `water`,
  `restaurant`, `directions_boat`, `shopping_bag`, `subway`, `home`, `school`, `business_center`).
  **Dịch là vỡ icon** — đã giữ nguyên xi; cả B5 và B6 đã kiểm lại từng dòng.
- **47 chuỗi chữ nằm NGOÀI tầm bộ rút** (`alt`, `aria-label`, chuỗi trong JavaScript: "Xem thêm … ảnh dự án",
  "Media tiếp theo", "Đóng", "Mô phỏng dự án …") đã dịch bằng `cong-cu/vet-chu-ngoai.py` với bảng khai báo
  `viec/2026-09-22-hy-lap-kastella-bay/chu-ngoai-bo-rut.tsv` — không sửa tay tệp bàn giao.

## Quy đổi tiền
- **€250,000 giữ nguyên đơn vị** (mức luật định bằng EUR, style guide 5.2 — không quy đổi USD).
- s032 **bỏ quy đổi VND** "khoảng 7,6 tỷ đồng" (`#bo-qua-so`).

## Chỗ đã làm mềm vì tuân thủ
- **s032 · s103 (B6, mức NẶNG):** bản đầu để "€250,000 investment level" đứng trần, người đọc dễ hiểu đó là **mức
  chung** của Golden Visa Hy Lạp. Đã buộc mức tiền vào loại tài sản: "…the property category that carries the
  **reduced** €250,000 Greece Golden Visa investment level".
- **s098:** nguồn viết bất động sản là "tài sản sinh lời và tích sản **an toàn** bằng ngoại tệ", "đặc quyền
  thường trú châu Âu **vô giá**". Đã viết "**can be** more than an asset that produces income and holds value in a
  foreign currency" — giữ độ lớn của nguồn, **bỏ đúng chữ tuyệt đối hoá** ("an toàn", "vô giá").
- **s006 · s062:** "Còn suất" → "**Units available**" thay vì "Investor spots available" của bộ nhớ dịch —
  đây là thẻ bất động sản, không phải thẻ chương trình định cư.
- `#bo-qua-tn` ở s001, s099, s107, s132: nguồn viết "**thường trú nhân** Hy Lạp" nhưng thẻ Hy Lạp có thời hạn
  5 năm, gia hạn theo quyền sở hữu — tên tiếng Anh đã chốt cho mảng Hy Lạp là **Greece Golden Visa**.

## Góp ý của B5/B6 đã BÁC hoặc chọn phương án thứ ba
- **s098:** B5 muốn **giữ đủ** "tích sản an toàn" ("a stable, foreign-currency store of value" /
  "features designed to help preserve value"); B6 muốn **bỏ hẳn** vế "income-producing". **Bác cả hai** —
  B5 thêm một tính năng sản phẩm không có ở nguồn, B6 bỏ mất một ý của nguồn. Đã dùng phương án thứ ba ở trên.

## Nguồn có vẻ SAI hoặc cần CEO xác nhận — đã dịch đúng nguồn
1. **Hero nêu "250.000 EUR" trần trụi, không chú thích loại tài sản.** Với người đọc quốc tế đang so sánh, đây là
   chỗ dễ hiểu nhầm nhất cả trang. Nên thêm một dòng nhỏ "for change-of-use property".
2. **"Sở hữu vĩnh viễn 100% – toàn quyền … bán"** (s073) **xung đột** với điều kiện giữ thẻ ở s105
   ("gia hạn khi nhà đầu tư **duy trì quyền sở hữu**"). Bán thì mất thẻ — nên nói rõ.
3. **"Bảo hành 2 năm"** — cần xác nhận phạm vi bảo hành theo hợp đồng.
4. **"Cách trung tâm Athens khoảng 12-15 phút"** — B6 cho là lạc quan so với thực tế giao thông Piraeus–Athens.
5. **"Tiến độ dự án: Đang cập nhật…"** — trang đang chào bán mà mục tiến độ để trống.
6. **Tên dự án tiêu biểu "CDO’Q Lisbon"** dùng nháy cong — giữ nguyên theo nguồn, cần xác nhận đúng chính tả.

## Slug cũ cần 301
- Không có (trang chưa từng có bản `/en/`).

## Kết quả kiểm
- Cửa 0: **XANH**, 0 lỗi chặn, 17 cảnh báo đã giải trình.
- **B5: 3 điểm** (1 TRUNG BÌNH, 2 NHẸ — đã xử lý hết). **B6: 20 dòng sửa** (3 mức NẶNG) + 7 điểm đưa lên CEO.
- **Liên kết:** trang không có liên kết nội bộ nào trỏ bản tiếng Việt (0 cảnh báo `--doi-link`).
