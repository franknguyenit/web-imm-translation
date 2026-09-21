# Soát bản xứ + chuyên môn (B6) — visa-my-e2

Nhìn chung: dịch sát, giọng ổn, không có lời hứa cấm. Vấn đề chính: vài câu có rủi ro tuân thủ hoặc sai bản chất pháp lý do cách diễn đạt (s005, s021, s106), dấu gạch nối còn theo lối Việt ( – có cách), và một ô có dấu nháy thẳng bị bọc kiểu CSV (s082).

| Mã | Vấn đề | Mức |
|---|---|---|
| s082 | Ô `en` đang lưu dạng CSV-quoted (`"The law requires a ""substantial""…"`). Nếu bộ ghép không bỏ lớp nháy thì bản giao sẽ lộ dấu nháy kép. Đổi sang nháy cong “substantial” để khỏi phải bọc nháy. Cần kiểm lại bản ghép. | nặng |
| s005 | Câu "citizens of countries that have a treaty … (common routes: Grenada, Türkiye, Montenegro)" làm người đọc tưởng chỉ ba nước này có hiệp ước, hoặc hiểu "routes" là tuyến đi. Viết rõ: nhà đầu tư từ nước không có hiệp ước thường đi qua quốc tịch Grenada, Türkiye hoặc Montenegro. | vừa |
| s021 / s072 | "Processed on a priority basis": E-2 không có cơ chế "ưu tiên" theo luật nên câu này dễ bị hiểu là cam kết. Làm mềm thành "often processed relatively quickly". | vừa |
| s106 | "The E-2 visa is a right under treaties": visa không phải là "quyền", viên chức lãnh sự có toàn quyền từ chối. Đổi thành "made available under treaties". | vừa |
| s006 | Nhãn "**Scope:**" chưa tự nhiên. Đề xuất "**Who it covers:**". (Nội dung "con được làm việc" sai luật, xem mục CEO.) | vừa |
| s154 | Ví dụ bị đảo logic: "a nail salon … needs US$30,000 a month to cover the family's living costs". Viết lại: gia đình cần 30,000/tháng thì tiệm phải có thu nhập vượt mức đó. | vừa |
| s077 | "…and additional costs" treo ở cuối chuỗi liệt kê, đọc lủng củng. | nhẹ |
| s007 / s073 / s105 / s116 / s119 / s139 | Gạch nối dạng "text – text" là lối Việt/Anh. US style dùng em dash không cách (—). | nhẹ |
| s022 | "Source of funds" dùng làm tính từ ghép thì cần gạch nối: "source-of-funds documentation". | nhẹ |
| s018 | "Flexibly balance …" nghe như dịch từng chữ. | nhẹ |
| s035 | "meets health requirements with a clean police clearance certificate": ghép hai điều kiện bằng "with" chưa tự nhiên. | nhẹ |
| s036 | "Of an age suited to managing…" cứng, cần viết lại. | nhẹ |
| s045 | Tiêu đề bước dùng danh từ, trong khi các bước khác dùng động từ mệnh lệnh. Đề xuất "Complete the ownership transfer". | nhẹ |
| s083 | "recommend investing from US$200,000" → "recommend an investment of at least US$200,000". | nhẹ |
| s090 | "a substantial company in your home country": "substantial" trùng với thuật ngữ luật E-2 ở s082 nên dễ gây nhầm. Dùng "a large established company". | nhẹ |
| s102 | "(the sale of real estate or a home, or income)" chưa gọn. | nhẹ |
| s112 | "settle into housing" chưa tự nhiên. Dùng "find housing". | nhẹ |
| s121 | Câu hỏi "What ages can children be to be included?" sai ngữ pháp tự nhiên. | nhẹ |
| s148 | "such as Vietnam": người đọc cần chủ thể là công dân, nên viết "such as Vietnamese citizens". | nhẹ |
| s051 | CTA "View all projects" (TM 100%) không khớp trang E-2. Giữ theo nguồn, team cân nhắc. Không đưa vào tệp sửa. | nhẹ |
| s015 / s016 | Brief đã làm mềm đúng. Lưu ý thêm: người giữ E-2 sống ở Mỹ gần như chắc chắn thành cư trú thuế (substantial presence test), nên giữ đoạn dưới dạng điều kiện như hiện tại, không đẩy thành lợi ích. Không sửa. | nhẹ |

## Nguồn sai/lỗi thời — cần CEO (đã dịch đúng nguồn, không sửa trong bản dịch)

1. **AMIGOS Act (ký ngày 23/12/2022 trong NDAA FY2023) mâu thuẫn trực tiếp s143 và s144.** Người có quốc tịch qua đầu tư phải **cư trú (domicile) ít nhất 3 năm** ở nước hiệp ước trước khi nộp E-1/E-2. s143 ("không yêu cầu cư trú Grenada") sai. s144 nói về "thời gian sở hữu quốc tịch" cũng không đúng bản chất (luật đòi thời gian cư trú). s032–s033 thì đúng. Nguồn: https://pt.usembassy.gov/implementation-of-the-amigos-act/ ; 9 FAM 402.9-4(B) https://fam.state.gov/fam/09FAM/09FAM040209.html
2. **s006 / s012**: con đi theo E-2 **không được đi làm**. Chỉ vợ/chồng E-2 được phép làm việc theo diện (từ 2022). https://www.uscis.gov/working-in-the-united-states/temporary-workers/e-2-treaty-investors
3. **s077 / s135 Grenada 220.000 USD**: hiện từ **US$235.000** (quỹ NTF) / **US$270.000** (bất động sản). https://cbi.gov.gd ; tham khảo https://www.henleyglobal.com/citizenship-investment/grenada
4. **Montenegro (s005, s031, s033, s038, s042, s134)**: chương trình quốc tịch đầu tư đã **đóng từ 31/12/2022**, nên không còn là "lộ trình" mới.
5. **s089 EB-5 "1,1 triệu USD"**: theo RIA 2022 là **US$1,050,000** (TEA: US$800,000). https://www.uscis.gov/working-in-the-united-states/permanent-workers/eb-5-immigrant-investor-program
6. **s135 miễn visa Anh/EU/Schengen**: EU đã siết cơ chế đình chỉ miễn visa với các nước bán quốc tịch. Cần kiểm lại trước khi đăng.
7. **s107 (quản lý giao hoàn toàn cho bên thứ ba)** và **s112 (cải tạo bất động sản cho thuê)** có rủi ro mâu thuẫn với điều kiện E-2: nhà đầu tư phải "develop and direct" (s129), và đầu tư thụ động, kể cả bất động sản cho thuê, không đủ điều kiện (s116). Đề nghị CEO/luật sư xem lại câu chữ ở nguồn. https://travel.state.gov/content/travel/en/us-visas/employment/treaty-trader-investor-visa-e.html
8. **s148**: thời hạn visa B1/B2 cho công dân Việt Nam đã thay đổi theo bảng đối ứng (reciprocity) năm 2025. Cần kiểm lại "tối đa 1 năm". **s152**: nguồn trộn thời hạn visa (Grenada 60 tháng) với thời hạn lưu trú mỗi lần nhập cảnh (2 năm, gia hạn 2 năm/lần). https://travel.state.gov/content/travel/en/us-visas/Visa-Reciprocity-and-Civil-Documents-by-Country.html
9. **s124**: luật ghi con **chưa kết hôn** dưới 21 tuổi.
