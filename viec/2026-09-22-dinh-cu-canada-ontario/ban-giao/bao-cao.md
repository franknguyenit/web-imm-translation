# Báo cáo dịch — Định cư Canada tỉnh bang Ontario (diện doanh nhân)

- **Nguồn:** tệp JSON xuất từ ACF của trang `/dau-tu-dinh-cu-canada/dinh-cu-canada-ontario/` (post_id 24338), CEO đính kèm vào chat ngày 22/09/2026. Bản chép vào `viec/nhap/` khớp md5 với tệp CEO gửi (`c157e4d9b2ada570c349ef762b09caa6`).
- **Khối lượng:** 101 đoạn · 1.215 chữ nguồn · 17 đoạn có gợi ý bộ nhớ dịch.
- **Bản giao:** `ban-giao/bai-dich.en.md` · `.en.html` · `dinh-cu-canada-ontario.en.json` (để import) · `seo.json` · và `bai-dich.vi.md` (chỉ để đối chiếu nội bộ, không gửi ra ngoài).

## 1. ⚠ HAI VIỆC CEO PHẢI XỬ LÝ TRƯỚC KHI ĐĂNG

**(a) Tệp nguồn là export của TRANG TIẾNG VIỆT, không phải trang tiếng Anh.** Trong `nguon.json` có `"lang": "vi"` và `post_id: 24338` — đó là ID của **bài tiếng Việt**. Nếu team import tệp `dinh-cu-canada-ontario.en.json` vào đúng post_id này thì **nội dung tiếng Anh sẽ ghi đè lên trang tiếng Việt đang chạy**. Luồng đúng theo quyết định CEO 18/09/2026: WPML nhân bản trang Việt → bật "Translate independently" → **Tools → Dịch trang ACF export JSON của trang tiếng Anh** (tệp đó mới có post_id của trang Anh) → mới import. Đề nghị team lấy đúng post_id trang tiếng Anh trước khi chạy Nhập.

**(b) Chương trình đã đóng — cần quyết có đăng trang này nữa hay không.** Nguồn tự ghi chương trình đã đóng (đoạn s008 và s086). Kiểm chứng độc lập: OINP **đóng chính thức Entrepreneur Stream ngày 04/11/2024**, sau khi **tạm ngưng nhận hồ sơ từ 04/12/2023** (CIC News, 11/2024). Trang IMM ghi "đóng từ tháng 2/2024" — **lệch cả hai mốc trên**. Theo luật dự án, bản dịch giữ đúng nguồn và không tự sửa số; CEO quyết một trong ba:
1. bỏ mốc "February 2024", chỉ giữ mốc chính thức 04/11/2024;
2. đổi câu thành "an earlier version of this page stated…";
3. giữ nguyên như hiện tại (bản dịch đang ở phương án này).

## 2. Quyết định dịch lớn nhất — dùng thời quá khứ cho cơ chế chương trình

Vì chương trình đã đóng, bản dịch dùng **thời quá khứ** cho điều kiện, quyền lợi và quy trình ("the stream was designed for…", "investors had to…"), và **thời hiện tại** cho: thông báo đã đóng, dữ kiện chung về Ontario/Canada, và quyền của thường trú nhân (con học đại học theo học phí bản xứ, được sống ở tỉnh bang khác sau khi có PR). Lý do: nguồn viết bằng thời hiện tại như chương trình đang mở, trong khi chính nguồn nói nó đã đóng — dịch sát thời hiện tại sẽ để nhà đầu tư quốc tế hiểu là còn nộp được, đó là rủi ro tuân thủ. Cả B5 và B6 đều xác nhận cách trộn thời này nhất quán và đọc tự nhiên. **CEO muốn bản dịch sát thời hiện tại thì nói, tôi đổi lại trong một lượt.**

## 3. Từ khoá

- **Chính:** `Ontario Entrepreneur Stream`. Đây là tên stream mà người bản xứ gõ; 8/10 kết quả đầu đặt đúng cụm này trong tiêu đề (canadavisa.com, canadim.com, moving2canada.com, nationwidevisas.com…), trong khi **không trang nào** đặt tiêu đề theo lối dịch sát tiếng Việt kiểu "Canada immigration Ontario province".
- **Phụ:** `OINP Entrepreneur Stream` · `Ontario Immigrant Nominee Program` · `Ontario business immigration` · `Canada entrepreneur immigration` · `Canadian permanent residence` · `Ontario entrepreneur visa`.
- **Lợi thế riêng:** nhiều trang 2026 của đối thủ thêm chữ "closed / alternatives" vào tiêu đề vì người tìm đang hỏi chương trình còn mở không. Trang này trả lời đúng câu hỏi đó, nên `meta_title` cố ý ghi "Program Closed" — vừa trung thực vừa tăng tỷ lệ bấm.
- ⚠ **Xếp hạng từ khoá KHÔNG dựa trên số lượt tìm kiếm** (cần công cụ trả phí Ahrefs/Semrush). Lần này **cũng không có gợi ý tự hoàn thành của Google**: lệnh `tukhoa` và `tygia` bị chặn mạng ở cả shell trên máy CEO và container cloud. Xếp hạng dựa trên tiêu đề 20 kết quả đầu của WebSearch.

## 4. Quy đổi tiền

**Không có phép quy đổi nào.** Trang không có số tiền VND. C$400.000 (tổng tài sản) và C$200.000 (vốn đầu tư) là **mức vốn luật định** nên giữ tiền gốc theo style guide mục 5.2, ký hiệu `C$`. Cố ý **không** thêm "(approximately US$…)" để bản dịch không mang con số nguồn không có. Để tra cứu: theo tỷ giá 22/09/2026 (usd_moi_cad 0,7131 — ghi trong `ty-gia.json`), C$400.000 ≈ US$285.000 và C$200.000 ≈ US$143.000.

## 5. Đoạn viết lại lớn

- **s002 (H1):** nguồn viết hoa cả dòng "ĐỊNH CƯ CANADA DIỆN DOANH NHÂN / TỈNH BANG ONTARIO" → "Entrepreneur Immigration to Canada / The Ontario Entrepreneur Stream" (Title Case, có nguyên cụm từ khoá chính).
- **s008:** câu chỉ dẫn nội bộ "nội dung này chỉ nên dùng ở dạng tham khảo hoặc điều hướng sang các chương trình Canada còn phù hợp hơn" là lời nhắc cho team, không phải lời nói với khách. Viết lại thành câu nói với người đọc: "This page is kept for reference; if Canada is still your goal, our advisors can point you to the Canadian programs that are a better fit today." Không thêm dữ kiện.
- **Mọi H2/H3 viết hoa cả dòng** → Sentence case theo style guide mục 6.
- **s019:** gợi ý bộ nhớ dịch TM 100% là "Why investors choose this program" nhưng sai ngữ cảnh (chương trình đã đóng) → đổi thành "Why investors chose this stream".
- **s070:** nguồn viết sai tên tỉnh bang **"Manioba"**; bản dịch ghi đúng **"Manitoba"**.
- **Nhãn liên kết s065–s082:** chưa có trang Canada nào được dịch sang tiếng Anh (bảng `lien-ket-vi-en.tsv` chỉ có trang Start-up Visa), nên nhãn giữ dạng mô tả/tên địa danh, chưa đặt tên sản phẩm tiếng Anh. Nguồn viết "Bang British Columbia / Bang Nova Scotia…" — Canada là **tỉnh bang (province)**, không phải "state", nên bản dịch để tên trơn.

## 6. Đoạn bỏ hoặc viết chung vì ngữ cảnh khách Việt

**Không có.** Trang không nhắc khách Việt Nam, thủ tục ở Việt Nam, tiền VND, hotline hay địa chỉ Việt Nam. Toàn bộ 101 đoạn đều được dịch.

## 7. Chỗ đã làm mềm vì tuân thủ

- **s018 (quốc tịch):** giữ "can consider applying for Canadian citizenship" kèm đủ điều kiện cư trú/thuế/ngôn ngữ/lý lịch — không hứa chắc có quốc tịch.
- **s016 (PR):** "could apply for" chứ không phải "would receive".
- **s031 + s043 ("người dân Canada"):** dịch là "a Canadian worker". B6 chỉ ra rằng điều kiện thật của OINP là việc làm cho **công dân Canada hoặc thường trú nhân**, còn bản nháp đầu dùng "a Canadian resident" — trong ngành di trú chữ đó có thể bị hiểu gồm cả người tạm trú, tức nói sai điều kiện. Nguồn tiếng Việt ghi mờ ("người dân Canada") nên không tự thêm hạng mục pháp lý. **Hỏi CEO:** có cho dùng đúng chữ OINP "Canadian citizens or permanent residents" không?
- **s092:** giữ nguyên câu nói rõ giới hạn dịch vụ ("An advisory firm can help with the business plan, but it cannot run the business on the investor's behalf") — tốt cho tuân thủ.

## 8. Góp ý của B5/B6 đã BÁC và lý do

| Góp ý | Quyết định | Lý do |
|---|---|---|
| B6: thêm "outside the Greater Toronto Area" vào ba mức C$400.000 / C$200.000 / 1 việc làm | **Bác (chuyển thành câu hỏi cho CEO)** | Luật dự án cấm tự cập nhật số liệu luật. Nguồn không phân vùng ⇒ không tự thêm. Xem mục 9(a). |
| B6: đổi "a Canadian worker" thành đúng chữ OINP "Canadian citizens or permanent residents" | **Bác lần này** | Thêm hạng mục pháp lý nguồn không có. Đã nêu thành câu hỏi ở mục 7. |
| B6: sửa mốc "within 18 months" theo tài liệu OINP (10 tháng duy trì việc làm / 20 tháng triển khai) | **Bác** | Nguồn ghi 18 tháng; dịch đúng nguồn, CEO xác nhận số. Xem mục 9(c). |
| B6: bỏ hoặc đổi mốc "February 2024" ở s008/s086 | **Bác lần này** | Là dữ kiện của nguồn. Đưa thành ba phương án cho CEO ở mục 1(b). |
| B6: nối hai câu của s014 cho mượt | **Bác** | Hai câu đang cố ý tách quá khứ (quyền lợi thời còn work permit) và hiện tại (quyền của PR); nối lại làm mờ ranh giới đó. |
| B6: CTA "View all projects" dễ bị hiểu là danh mục dự án EB-5 | **Bác việc sửa chữ, chuyển thành câu hỏi** | Là câu bộ nhớ dịch TM 100% dùng thống nhất ở mọi trang. **Hỏi CEO:** nút này trên trang Canada trỏ đi đâu? |
| Cảnh báo máy: 9 dòng "THUẬT NGỮ gợi ý dịch là…" | **Bác toàn bộ** | s001/s002/s010 cố ý dùng tên chương trình thay vì dịch chữ "tỉnh bang/định cư" (đúng cho tiêu đề và H1); s017 "path" hợp giọng hơn "pathway"; s038 là câu TM 100%; s045 "thẩm định" ở đây là thẩm định điều kiện đương đơn, không phải "due diligence" tài chính; s050 "the Ontario government" không mất nghĩa vì Ontario là tỉnh bang; s065 "investment immigration programs" là cách nói tự nhiên hơn "residency by investment programs". |
| Cảnh báo máy: heading nhảy H1→H3 và H2→H4 | **Bác** | Do cấu trúc sẵn của template `content-product-2026.php` (khối hero dùng H3, khối hỏi đáp dùng H4), giống mọi trang product-2026 đã dịch. Sửa được thì phải sửa template, không phải bản dịch. |

**Đã NHẬN:** 18/18 đoạn sửa của B6 về giọng và bản xứ (trong đó "genuinely trading" → "genuinely operating" vì "trading" là Anh–Anh, trái yêu cầu tiếng Anh Mỹ ở style guide mục 5), và 1 đoạn của B5 (s006 bỏ chữ "dependent" vì dòng nguồn chỉ nói "con dưới 22 tuổi", không nói "con phụ thuộc").

## 9. Điều nguồn có vẻ sai hoặc lỗi thời — CEO xác nhận

1. **(a) Ba mức điều kiện chỉ đúng cho vùng ngoài Greater Toronto Area.** Theo tài liệu OINP, C$400.000 tổng tài sản · C$200.000 đầu tư · 1 việc làm là mức cho doanh nghiệp **ngoài GTA** (hoặc ngành ICT/digital); **trong GTA** là C$800.000 · C$600.000 · **2 việc làm**. Trang lại lấy Toronto làm điểm hấp dẫn (s007, s033) nên người đọc rất dễ hiểu ba con số kia là mức chung. Đề nghị bổ sung một dòng "outside the Greater Toronto Area" vào **nguồn tiếng Việt** rồi dịch lại đoạn đó.
2. **(b) Mốc đóng chương trình lệch** — xem mục 1(b).
3. **(c) Mốc "18 tháng" tạo việc làm** không khớp tài liệu OINP đã kiểm (việc làm phải được tạo và duy trì ít nhất 10 tháng tính đến lúc nộp Final Report; kế hoạch kinh doanh triển khai trong 20 tháng). Không tìm được mốc 18 tháng ở nguồn OINP nào.
4. **(d) Chuyến khảo sát Ontario (s047–s048)** được trình bày như bước bắt buộc cho mọi hồ sơ; theo OINP, chuyến thăm doanh nghiệp chỉ **bắt buộc khi mua lại doanh nghiệp đang hoạt động**.
5. **(e) Thiếu bước đề cử của tỉnh bang (nomination)** giữa "hoàn thành cam kết kinh doanh" và "nộp hồ sơ PR" (s016, s059, s060): thực tế Ontario đề cử trước, rồi mới nộp PR lên liên bang.
6. **(f) Thiếu điều kiện sở hữu tối thiểu 33,3% vốn** của OINP ở khối yêu cầu đầu tư (s040) — thiếu ở nguồn, không phải lỗi dịch.
7. **(g) Ba khẳng định quảng bá chưa kiểm chứng được:** "chỉ cần tốt nghiệp THPT" (s021), "không giới hạn tuổi" (s026), "không yêu cầu ký quỹ" (s028) — tài liệu OINP đã kiểm không nêu học vấn tối thiểu cũng không nêu ký quỹ. Đây là lời quảng bá điều kiện nên nên xác nhận trước khi đăng.
8. **(h) Liên kết trong tệp nguồn trỏ về tên miền tạm** `staging-41de-immgroupcom.wpcomstaging.com`, không phải `immgroup.com`; và tất cả đều trỏ **trang tiếng Việt**. Xem ghi chú bàn giao.

## 10. Slug và chuyển hướng

- `slug`: `ontario-entrepreneur-stream`.
- **Không cần chuyển hướng 301**: trang này chưa có bản tiếng Anh nào (`moi` không tìm thấy thẻ hreflang tiếng Anh), nên `slug_cu_can_301` để rỗng.

## 11. Kết quả kiểm

- **Cửa 0: XANH** — 0 lỗi chặn · 11 cảnh báo (đã giải trình từng dòng ở mục 8) · 101/101 đoạn đã dịch.
- Lần chạy đầu: 1 lỗi chặn (thiếu `seo.json`, là việc của bước B7) · 10 cảnh báo.
- **B5 (hiệu đính song ngữ, Sonnet) bắt 1 lỗi** (0 nặng · 0 vừa · 1 nhẹ).
- **B6 (soát bản xứ + chuyên môn, Opus) bắt 22 góp ý** (4 nặng · 8 vừa · 10 nhẹ).
- Tệp JSON bàn giao dựng lại **khớp hệt tập trường của bản gốc**, chỉ thêm khối `seo` do công cụ `ghep` chèn.

## 12. ⚠ Nhãn: CHƯA QUA SOI ĐỘC LẬP

Bản dịch này chưa được luật sư di trú Canada hoặc cố vấn thuế độc lập soi. Mọi dữ kiện luật đều dịch theo nguồn tiếng Việt của IMM Group; các điểm ở mục 9 cần CEO hoặc chuyên gia xác nhận trước khi đăng.

## 13. Nguồn đã tra để kiểm chứng

- CIC News, 11/2024 — Ontario closes entrepreneur stream: https://www.cicnews.com/2024/11/ontario-closes-entrepreneur-stream-british-columbia-nominates-more-pnp-candidates-1148173.html
- Moving2Canada — Ontario Entrepreneur Stream (mức vốn theo vùng GTA, điều kiện việc làm): https://moving2canada.com/immigration/pnp/provinces/ontario/ontario-entrepreneur-stream/
