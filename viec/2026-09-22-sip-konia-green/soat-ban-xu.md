# B6 — Soát bản xứ + chuyên môn · Konia Green (2026-09-22)

Đọc bản tiếng Anh độc lập trước (bước 1), sau đó đối chiếu `song-ngu.tsv` (bước 2).
Đã bỏ qua: tên icon Material Symbols (`park`, `landscape`, `architecture`, `pool`, `euro_symbol`,
`home_work`, `verified_user`, `apartment`, `diamond`, `balance`, `location_on`, `construction`,
`play_arrow`, `open_in_full`, `check_circle`) và các đoạn đã gắn `#bo-qua-so`.

## Nhận xét chung

Bản Anh đọc trôi, ít "mùi dịch", giọng đúng kiểu cố vấn private-wealth theo style guide: đã tự bỏ
lối hô hào của nguồn ("đẳng cấp", "hoàn hảo", "thấp nhất châu Âu" → "one of the lowest"), dùng
"you / your family", thuật ngữ BĐS đúng nghề (*detached villas*, *townhouses*, *low-rise*,
*finishes*, *land bank*, *renderings*, *units available*). Heading đúng quy ước (H1 Title Case,
H2–H6 sentence case). Thẻ `{1}…{/1}`, `{2}…{/2}`, `{br}` khớp đủ từng dòng, không thừa không thiếu.
Nháy và dấu câu đều là ASCII thẳng; chỉ có 3 em dash ở s003/s024/s072, dùng đúng.

**Lằn ranh PR ≠ quốc tịch ≠ quyền toàn EU: GIỮ ĐÚNG.** s106–s107 chỉ nói quyền trong phạm vi Síp;
s120–s126 tách rõ ba nấc PR → điều kiện cư trú/ngôn ngữ → quốc tịch Síp (EU); s126 chỉ nói miễn thị
thực, không nói PR cho quyền sống/làm việc khắp EU. Không có câu nào gộp nhầm ba tầng này.

## Lỗi và đề xuất sửa (chi tiết ở `sua-ban-xu.txt`)

| Mã | Mức | Vấn đề |
|---|---|---|
| s103 | **nặng** | "Owning an **apartment** at Konia Green" — dự án **không có căn hộ nào** (34 biệt thự đơn lập + 26 nhà phố, xem s006/s040/s042). Nguồn Việt viết "căn hộ" — gần như chắc là chép nhầm từ trang dự án chung cư cùng loạt. Dịch đúng nguồn nhưng để nguyên là trang tự mâu thuẫn. Đề xuất đổi thành "a property", khớp luôn với s093 vốn đã dùng "a property". Xem thêm mục "Cần CEO" #5. |
| s034 | **nặng** | Hứa mốc thời gian do cơ quan nhà nước quyết — xem "Cần CEO" #4; đã đề xuất câu làm mềm theo style guide mục 3. |
| s001 | vừa | Nguồn: "**Thường trú nhân** Cộng Hòa Síp | Dự án biệt thự nhà phố". Bản Anh đổi thành "Cyprus **real estate**" — mất hẳn ý thường trú ở dòng eyebrow, trong khi cả trang bán đúng cái đó. Trả lại "Cyprus permanent residence". |
| s024 | vừa | "close to the **center** of Paphos — 5 minutes from the **center**" — lặp "center" hai lần trong một câu, đọc rất "mùi dịch". |
| s052 | vừa | Giá trị thông số "Phong cách: Địa Trung Hải" dịch thành "**The** Mediterranean" = tên vùng biển, không phải tên phong cách. Phải là "Mediterranean". |
| s055 | vừa | "**A** central green park" — các ô thông số cùng hàng (s058, s061, s064) đều không mạo từ. Bỏ "A" cho đều. |
| s101 | vừa | "the latest **information**…" ngay sau "The **information** on this website" — lặp, bỏ được mà không mất ý. |
| s107 | vừa | "do business **freely**" — "freely" là chữ bản Anh tự thêm; PR diện đầu tư Síp có giới hạn về làm việc hưởng lương, nói "freely" là mở rộng quyền so với nguồn. Dùng "run a business" (đúng gợi ý TM 94%). |
| s003 | nhẹ | "in the **old capital**, Paphos" — người bản xứ không dùng "old capital" cho thành phố; và trật tự đồng vị làm Paphos thành phần phụ. Viết "in Paphos, the ancient capital of Cyprus". |
| s025, s026 | nhẹ | "Paphos **a**irport" — tên riêng, viết hoa "Airport". |
| s032 | nhẹ | "Paphos, Cyprus, a UNESCO World Heritage city" — ba cụm cách nhau bằng dấu phẩy, đọc rối. |
| s033 | nhẹ | Nguồn "tinh tế, **sang trọng và đẳng cấp**" → "refined, **understated**". "Understated" (kín đáo, giản dị) gần như ngược ý nguồn; bỏ hype là đúng nhưng đừng đổi sang ý trái. Dùng "refined, high-end". |
| s049 | nhẹ | H2 "Sống **sang** – sống xanh" chỉ còn "Green living", rơi mất vế "sống sang" trong khi khối này nói cả tiện ích cao cấp. |
| s070 | nhẹ | "A **sound choice** for the whole family" — "sound choice" nghe như nhận định đầu tư (đúng cái s133 tuyên bố miễn trừ), lại khô so với ngữ cảnh mô tả nhà ở. |
| s113 | nhẹ | "in many **home markets**" — "market" là chữ của người bán; người đọc là gia đình, dùng "home countries". |

## Không sửa (cố ý giữ, nêu lý do)

- **s084 "60% seafront land bank"** — đọc hơi tối nghĩa nếu tách khỏi s085; nhưng đây là TM 100%
  đang dùng y hệt ở Pafilia Plaza / Coral Vista / Beachside Villa / Elysia Blu. Sửa một trang sẽ
  làm lệch cả loạt. Đề nghị nếu đổi thì đổi đồng loạt trong một việc riêng.
- **s069 "Finishes"** — nhãn một chữ, đúng cách ngành BĐS quốc tế ghi trong bảng đặc điểm.
- **s015 "Permanent residence benefits" vs s102 "Advantages of Cyprus permanent residence"** — một
  cái là nhãn điều hướng ngắn, một cái là H2; lệch chữ này bình thường trên web.
- **s100** đã có `#bo-qua-so`, không báo lại.

## Cần CEO xác nhận (dữ kiện — KHÔNG tự sửa, đang dịch đúng nguồn)

**1. s119 — "no tax on worldwide income" · RỦI RO CAO NHẤT CẢ LOẠT TRANG SÍP.**
Nguồn Việt: "không đánh thuế toàn cầu". Câu tiếng Anh đang khẳng định Síp **không đánh thuế thu
nhập toàn cầu** — điều này không đúng với người là **cư trú thuế** tại Síp: họ chịu thuế thu nhập
trên thu nhập toàn cầu, phần được ưu đãi mạnh là diện **non-domiciled** (miễn Special Defence
Contribution cho cổ tức và lãi tiền gửi, và không có thuế thừa kế). Ngoài ra, giữ thẻ PR **không
tự động** biến nhà đầu tư thành cư trú thuế Síp — hai tư cách khác nhau. Để nguyên câu này trên
trang công ty là rủi ro tuân thủ thật (quảng cáo thuế sai), và nó là **câu duy nhất kiểu này trong
toàn bộ repo** — 4 trang Síp còn lại không trang nào nói vậy.
*Nếu CEO muốn giữ ý, đề xuất viết có điều kiện:*
`Favorable tax treatment: under the non-domiciled regime, dividend and interest income can be exempt from Cyprus tax, and there is no inheritance tax. Tax residence and domicile are assessed individually — please consult an independent tax advisor.`

**2. s112 — y tế "free of charge for citizens and permanent residents".**
Nguồn: "hoàn toàn miễn phí". Hệ GeSY (General Healthcare System) vận hành bằng **đóng góp trên thu
nhập** và có **đồng chi trả** theo lượt khám/thuốc; quyền tham gia còn tuỳ tư cách cư trú, không
mặc nhiên cho mọi thường trú nhân diện đầu tư. Đáng chú ý: **trang Elysia Blu cùng loạt đã viết
đúng hơn** — "A healthcare system to European standards, subject to the conditions of the General
Healthcare System (GESY)". Hai trang cùng lên web sẽ đá nhau.
*Đề xuất nếu CEO đồng ý:* `A modern healthcare system to European standards, with access subject to the conditions of the General Healthcare System (GESY).`

**3. s118 — "one of the lowest corporate tax rates in Europe, at 12.5%".**
Bản Anh đã làm mềm "thấp nhất" → "one of the lowest" (tốt). Vấn đề còn lại là **con số**: nguồn của
IMM đang nói ba kiểu — Konia Green + Pafilia Plaza + Coral Vista + Beachside Villa: **12,5%** (có
trang ghi "đối chiếu ngày 18/08/2026"); **Elysia Blu: 15% từ năm 2026**. Síp đã thông qua cải cách
nâng thuế doanh nghiệp lên 15%, nên 12,5% nhiều khả năng là số cũ. Cần CEO chốt **một con số + một
mốc ngày** rồi sửa đồng loạt cả 5 trang.

**4. s034 — "permanent residence in Cyprus in about 12 months".**
Thời gian xét duyệt do cơ quan nhập cư Síp quyết, không phải cam kết bán được. Đây là lời hứa kết
quả/thời gian theo style guide mục 3. Đã đề xuất câu làm mềm trong `sua-ban-xu.txt`
("typically in about 12 months"); nếu CEO muốn chặt hơn nữa thì thêm "subject to government
processing times". Cần CEO xác nhận mốc 12 tháng lấy từ đâu.

**5. s103 — nguồn Việt viết "căn hộ" cho một dự án chỉ có biệt thự và nhà phố.** Nhiều khả năng lỗi
chép từ trang khác. Đã đề xuất sửa bản Anh thành "a property" cho khỏi tự mâu thuẫn, nhưng **bản
tiếng Việt trên web cũng nên sửa** — nhờ CEO báo team nội dung.

**6. s124 — "8 years of physical residence within an 11-year period" để nhập tịch.** Dịch đúng
nguồn và khớp TM với các trang Síp khác, nhưng mốc luật nhập tịch Síp cho người ngoài EU thường
được công bố là 7 năm trong 10 năm (có diện rút ngắn theo cải cách 2023). Nguồn có thể lỗi thời —
CEO đối chiếu lại một lần cho cả loạt.

**7. s079 — "the tallest seafront building in Europe" (dự án ONE).** Là câu quảng bá tuyệt đối của
chủ đầu tư Pafilia. Đã nói rõ đây là dự án của Pafilia nên chấp nhận được, nhưng nếu muốn an toàn
thì đổi thành "marketed as the tallest seafront residential tower in Europe". Đang giữ nguyên vì
là TM 100% dùng chung cả loạt trang Pafilia.
