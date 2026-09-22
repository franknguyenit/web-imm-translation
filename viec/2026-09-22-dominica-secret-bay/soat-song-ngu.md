# Soát song ngữ — Dominica Secret Bay (B5)

Đối chiếu `song-ngu.tsv` toàn bộ 115 đoạn (s001–s115), cột `vi` vs `en`. Không có thẻ `{n}…{/n}` / `{br}` nào lệch (đã
kiểm bằng script đếm thẻ). Không có đoạn nào dùng tính từ "Dominican" (đúng luật thuật ngữ). Các tên icon Material
Symbols (s048, s050, s052, s054, s067, s070, s073, s094, s099, s104, s113) và số trang trí `01/02/03` giữ nguyên xi — ĐÚNG,
không phải lỗi.

Hai đoạn đặc biệt s055 và s108: đã kiểm, xử lý đúng như brief mô tả — s055 dùng "projected yield" + "distributions"
(không hứa lãi suất), s108 chuyển ghi chú nội bộ thành câu lưu ý hợp lý cho khách ("Visa-free access changes over
time... Check the current list before you travel"), không bịa số liệu mới, không sai lệch nghĩa gốc. Không flag.

## Phát hiện

| Mã đoạn | Lỗi | Mức nặng |
|---|---|---|
| s003 | "Resort khách sạn 6 sao **danh giá**" (= uy tín/nổi tiếng) dịch thành "**award-winning** 6-star resort" — thêm khẳng định cụ thể (đã thắng giải) mà câu này không có; chỉ có cơ sở ở s049 (Travel + Leisure) nằm xa phía dưới trang. Vô hại vì có chứng cứ ở nơi khác trên trang, nhưng kỹ thuật là "thêm ý không có ở nguồn" tại câu này. | VỪA |
| s030 | Lặp đúng lỗi trên: `trung:s003` copy y hệt "award-winning" cho "danh giá". | VỪA |
| s041 | "Hình thức đầu tư" (nhãn bảng thông số, đi cùng hàng loạt nhãn dịch sát khác: Project/Country/Standard/Developer) dịch thành **câu hỏi** "How the investment works" thay vì nhãn danh từ tương ứng ("Investment type" / "How you invest"). Không sai nghĩa nhưng lệch văn phong nhãn bảng so với các dòng liền kề (s035, s037, s039, s045 đều là nhãn ngắn). | NHẸ |
| s080 | "Tibay Villas" (không gạch nối) trong khi s069 dịch cùng thực thể là "the Ti-Bay villas" (có gạch nối) — bản Anh giữ đúng theo từng dòng nguồn (nguồn Việt cũng viết hai kiểu khác nhau: "Ti-Bay" ở s069 vs "Tibay" ở s080), không phải lỗi dịch nhưng nên thống nhất chính tả tên riêng trước khi đăng. | NHẸ |

## Không flag (đã kiểm, không phải lỗi — chỉ ghi để B6/CEO biết là chủ đích)

- s029, s090: "Lấy quốc tịch" / "nhận quốc tịch" dịch có điều kiện ("apply for", "if the government approves") — đúng, không hứa chắc kết quả.
- s031, s053, s093, s111: các câu nguồn có giọng quảng cáo ("tiềm năng sinh lời cao", "9 năm thành công", "nhiều đặc quyền... cao cấp", "đánh giá khả năng thành công của hồ sơ") được viết lại nhẹ nhàng hơn, đúng style guide mục 1 và mục 3 (không hứa vượt nguồn, không hô hào) — không phải sót ý, là làm mềm hợp lệ.
- s115: TM gợi ý 96% có tên sai "Kastella Bay" (lẫn từ việc khác) — bản dịch đã đúng dùng "Secret Bay", không bị dính lỗi TM chéo trang.
- s049: nguồn viết sai "Travel & Leisure", bản Anh sửa thành "Travel + Leisure" (tên thật của tạp chí) — không phải bịa, chỉ sửa chính tả thương hiệu; đã có trong `brief.md` để báo CEO.
