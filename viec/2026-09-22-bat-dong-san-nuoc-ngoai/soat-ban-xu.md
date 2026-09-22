# B6 — Soát bản xứ + chuyên môn — Trang trục "Bất động sản quốc tế"

Bước 1 đọc riêng bản tiếng Anh; bước 2 đối chiếu `song-ngu.tsv` + 15 trang dự án đã bàn giao cùng ngày
và các trang chương trình (Síp, Grenada, Dominica, Thổ Nhĩ Kỳ, Hy Lạp).

**Tổng quan:** bản Anh sạch, giọng đúng kiểu ngân hàng tư nhân, không có puffery, thuật ngữ ngành
(`freehold`, `store of value`, `title deed`, `change-of-use`, `Türkiye`, không dùng `Dominican`) đúng bảng.
Nhãn thẻ dự án khớp nhau qua cả 15 thẻ. Lỗi nặng tập trung ở **khẳng định tài chính** và **phạm vi lời hứa
đi lại** — đúng chỗ trang trục dễ gộp hai chương trình khác nhau thành một lời hứa chung.

---

## NẶNG — phải sửa trước khi bàn giao

| Mã | Vấn đề | Lý do |
|---|---|---|
| **s013** | "Visa-free travel in the Schengen area with a European Golden Visa **or residence permit**" — vế "residence permit" không bị giới hạn, mà nửa cư trú của trang gồm **Cộng Hòa Síp**. | **Mâu thuẫn thẳng với trang Síp đã bàn giao** (`2026-09-22-thuong-tru-nhan-cong-hoa-sip-cyprus` s106/s108: "Cyprus is not in Schengen… investors still need a visa"). Thẻ PR Síp KHÔNG cho đi lại Schengen. Bỏ "or residence permit" là đủ; s055 và s088 đã buộc đúng vào Golden Visa nên không cần sửa. |
| **s334** | Cùng lỗi ở bảng so sánh: dòng "Travel in the Schengen area and wider Europe" nằm ở cột **Quyền cư trú** = Hy Lạp **+ Síp**. | Như trên. Buộc câu vào European Golden Visa. |
| **s028** | "Rental yields … **have typically run at** about 3–5% a year" — thì hiện tại hoàn thành = khẳng định **hiệu suất quá khứ** đã xảy ra, không dẫn nguồn, trên trang chào bán. | Style guide mục 3. Trang dự án Secret Bay (`s055`) cho số 3–6% nhưng có kèm "Projected returns are not guaranteed" — trang trục đang mạnh miệng hơn trang dự án. Đổi sang mô tả khoảng + câu điều kiện. |
| **s074** | "…gives **European residence** for 3 generations" — Golden Visa Hy Lạp cấp thẻ cư trú **Hy Lạp**, không cấp quyền cư trú toàn châu Âu. Động từ "gives" là hứa kết quả. | Nguồn đã sai ("Thường trú nhân châu Âu", đã gắn `#bo-qua-tn`); bản Anh sửa được "permanent" nhưng còn sót "European". Mức 250.000 EUR **đã buộc đúng vào change-of-use** — phần này đạt, chỉ chỉnh câu chữ cho tự nhiên ("for a qualifying change-of-use conversion"). |
| **s304 + s317** | "Grenada is the **only Caribbean country** with an E-2 treaty with the United States" — **sai dữ kiện**: Jamaica và Trinidad & Tobago cũng là nước hiệp ước E-2. Khẳng định đúng của ngành là "nước **có chương trình quốc tịch đầu tư**duy nhất ở Caribbean có hiệp ước E-2". | Rủi ro tuân thủ: quảng bá bằng một tuyên bố độc quyền không đúng. ⚠ **Câu này cũng nằm ở `2026-09-21-quoc-tich-grenada` s169 và `2026-09-22-grenada-intercontinental-resort`** — sửa thì phải sửa đồng loạt, hoặc CEO chốt giữ nguyên cả ba. Đề xuất sửa đã ghi ở `sua-ban-xu.txt`, nhưng **không tự áp một mình trang này**. |
| **s344** | "or a share in the project **with projected annual returns** (Dominica, Grenada)" — cụm bổ nghĩa cho tài sản, đọc thành "cổ phần này **có** lợi tức hằng năm". | Hai trang dự án tương ứng đều gài rào ("This is a projected return… actual results depend on…"). Ô bảng ngắn nên chèn "— not guaranteed —" là cách gọn nhất. |

---

## TRUNG BÌNH — nên sửa

| Mã | Vấn đề | Lý do |
|---|---|---|
| **s057, s066, s080, s095, s273** | Ô "Investment" viết **`from`** thường, trong khi 12 thẻ còn lại (s114…s309) viết **`From`** hoa. | Cùng một ô giao diện, 17 thẻ nằm cạnh nhau ⇒ lệch nhìn thấy ngay. Thống nhất **`From`**. (Chữ thường vốn kế thừa từ TM của trang dự án, nơi câu nằm trong văn cảnh khác.) |
| **s076, s091, s110, s125, s140, s155, s170, s185, s200, s215, s230, s245, s269, s287, s305** | Nhãn "**Units available**" (Còn suất). Đúng cho 12 thẻ căn hộ/biệt thự, nhưng **sai loại tài sản** ở 3 thẻ quốc tịch: Dominica và Grenada bán **cổ phần resort**, không bán "unit". | **Sửa đồng loạt 15 dòng** sang "Still available" — trung tính, dùng được cho cả căn hộ lẫn cổ phần. Không đổi lẻ vài dòng. |
| **s268, s286, s304, s330** | Động từ hứa kết quả: "citizenship and passports **follow** in 6–8 months" · "passports **follow**" · "**receive** a Grenadian passport" · "**receive** a passport and full citizenship". | Style guide mục 3 cấm hứa chắc kết quả. Thay bằng "are typically issued" / "to apply for" / "are granted" — giữ nguyên mọi con số, chỉ hạ mức cam kết. |
| **s108** | "from €300,000 **plus VAT**" trong khi nguồn ghi "(chưa gồm VAT)". | "plus VAT" đọc được thành "ngưỡng là 300.000 + VAT"; "**excluding VAT**" là cách ngành viết và khớp nguồn từng chữ. (Ghi chú: 10 thẻ Síp bên dưới lặp "from €300,000" **không** kèm VAT — nguồn vậy, để nguyên, ghi báo cáo.) |
| **s003** | "**Residency** real estate (Europe)" — cả trang dùng thống nhất *residence* (`residence route`, `residence rights`, `permanent residence`); riêng thanh điều hướng lệch sang *residency*. | Nhất quán trong trang + nhất quán với 12 trang cư trú đã bàn giao. |
| **s042, s043, s103** | Từ **Anh-Anh** trong bản tiếng Anh **Mỹ**: "holiday home" · "A place to **holiday**" · "suitable both to live in and **to let**". | CEO chốt 17/09: tiếng Anh Mỹ. Đổi: *vacation home* · *to vacation* · *to rent out*. |
| **s022** | "spreading risk, **on the usual principle of** portfolio diversification" — mùi dịch rõ. Thêm "**steady** income" = khẳng định hiệu suất. | Gộp thành "spreading risk through portfolio diversification"; "steady" → "regular" (nói tần suất, không nói mức sinh lời). |
| **s052** | "Buy a property **at the program's threshold**" — tiếng Anh không nói "mua ở ngưỡng"; nhà đầu tư mua tài sản **đạt** ngưỡng. | "a property that meets the program's investment threshold". |
| **s061** | "processing **is counted in months**" — dịch nguyên văn cấu trúc Việt. | Cách người bản xứ nói: "processing takes months rather than years". |
| **s323** | "helps **a family** pick the route that fits **its** long-term objective" — ngôi thứ ba lạnh, lệch giọng cả trang. | Style guide mục 1: xưng "you / your family". |
| **s106, s260** | "See all **Greek** properties" vs "See all **Cyprus** properties" — một bên tính từ, một bên danh từ, hai nút nằm song song. | Đưa về cùng khuôn: "See all properties in Greece / in Cyprus" (tránh luôn tranh cãi *Cypriot*). |

---

## NHẸ — văn phong

| Mã | Vấn đề | Đề xuất |
|---|---|---|
| **s007** | H1 **VIẾT HOA CẢ DÒNG**: "INTERNATIONAL REAL ESTATE". | Style guide mục 6 ("H1: Title Case, không viết hoa cả dòng") và **mọi trang trục đã bàn giao** đều Title Case (`Caribbean Citizenship by Investment`, `European Golden Visa and Citizenship`, `U.S. Investor Visas & Green Cards`). → "International Real Estate". |
| **s008** | "can also **open permanent residence**" — thiếu mắt xích. | "open **a path to** permanent residence". |
| **s031** | "Another home, and a fallback plan for the family, **abroad**." — "abroad" treo cuối, ba mệnh đề ba dấu phẩy. | "A second home abroad, and a fallback plan for the family." |
| **s037 / s040** | "Wider **scope** to travel…" và "More **scope** to set up a company…" — lặp danh từ hiếm hai thẻ liền nhau. | s037 → "More freedom to travel, study, work, and live abroad." |
| **s049** | "either of the two routes investors use most today" — hơi rối. | "either of the two routes most investors follow today". |
| **s070** | Ba lần "its own" trong một câu ("its own investment threshold, its own list of qualifying property, and its own residence rights"); "sets its own residence rights" không phải cách nói (nước **cấp** quyền cư trú, không "đặt" quyền). | Viết lại như trong `sua-ban-xu.txt`. |
| **s263** | Cũng ba lần "its own". | Gộp thành một "its own" cho ba danh từ. |
| **s262** | "leads **straight** to a second citizenship" — khẩu ngữ, hơi hô hào cho một H2. | "leads **directly** to" (đúng chữ "trực tiếp" của nguồn, giọng điềm hơn). |
| **s127** | "Beachside Villa seafront villas" — tên dự án đã có "Villa", nối thêm "villas" thành câu vấp. | "Beachside Villa — seafront villas". |
| **s342** | Hai chữ "or" liên tiếp: "a seafront villa, **or** a restoration **or** change-of-use project". | "…or a qualifying restoration or change-of-use property." |
| **s348** | Nhãn hàng bảng chỉ có một chữ "Suits" — cụt. | "Best suited to". |

---

## Đã soi, KHÔNG sửa — ghi báo cáo cho CEO

1. **s286 (US$200,000) vs s291 (US$212,000) — không phải lỗi.** Đã đối chiếu: `2026-09-22-quoc-tich-dominica`
   s093 xác nhận **ngưỡng luật định** diện BĐS là US$200,000; US$212,000 là **giá suất cụ thể của Secret Bay**
   (`2026-09-22-dominica-secret-bay` s005/s044). Hai số cùng đúng, nhưng đứng cách nhau 5 dòng trên một trang thì
   người đọc sẽ hỏi. Giữ nguyên cả hai (cấm tự sửa số); **đề nghị CEO cho phép thêm một chữ làm rõ ở bản Việt**.
   Grenada không có vấn đề này: US$270,000 khớp cả trang chương trình lẫn trang dự án.
2. **s281 "the Turkey Citizenship by Investment program" bên cạnh chip "Türkiye" (s264, s270, s344, s347) —
   cố ý, giữ nguyên.** Đã kiểm: trang sản phẩm `2026-09-22-quoc-tich-tho-nhi-ky-turkey` đặt tên chương trình là
   **"Turkey Citizenship by Investment"** ở cả `post_title` lẫn H1. Đổi thành "Türkiye" ở đây sẽ **lệch với trang
   đích mà nút s284 trỏ tới**. Quy tắc đang áp đúng: thân bài = Türkiye, **tên chương trình = giữ nguyên bản**.
3. **Nhãn "Size / scale" có 2 ô không phải kích thước:** s086 = "Golden Visa apartments", s297 = "A share in a
   6-star resort" (trùng y hệt ô "Property type" s292). Lỗi của **nguồn**, dịch đúng nguồn. CEO sửa bản Việt.
4. **Số đếm trên chip nước khớp:** Hy Lạp 2/2 · Síp 10/10 · Thổ Nhĩ Kỳ 1/1 · Dominica 1/1 · Grenada 1/1. Đã đếm thẻ.
5. **"5-star" (s172) vs "Five-star" (s182) — đúng luật, không sửa.** Style guide mục 5: dùng chữ số trừ khi đứng
   đầu câu; s182 mở đầu câu nên phải viết chữ.
6. **Nửa quốc tịch không hứa miễn thị thực Schengen**, nửa cư trú không hứa hộ chiếu — sau khi sửa s013/s334 thì
   ranh giới hai hướng sạch trên toàn trang.
7. **Từ khoá chính `citizenship by real estate investment` không có trong H1 (s007)** — nằm ngoài phạm vi B6,
   nhưng nhắc B7 cân nhắc khi chốt SEO.
