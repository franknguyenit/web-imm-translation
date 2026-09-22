# Soát song ngữ — The La Sagesse Collection (Grenada)

Đối chiếu `song-ngu.tsv` cột `vi`/`en` từng dòng. Đã xác nhận đúng theo brief: s007 (cam kết→dự kiến),
s112 (viết chung "from your country of residence"), s090 (January 2027 #bo-qua-so), s102 (giữ nguyên
tên chương trình "Grenada citizenship by investment program" — không đổi, xem mục 1).

## 1. [NẶNG] "Grenada citizenship/passport" dùng sai vai trò tính từ — lệch bảng thuật ngữ (chot)

`thuat-ngu.csv` dòng `Grenada` (trạng_thái **chot**, nguồn `quoc-tich-grenada`) ghi rõ: *"Tính từ và người
dân: Grenadian (Grenadian citizenship, Grenadian passport); tên nước: Grenada"*. Trang gốc
`viec/2026-09-21-quoc-tich-grenada` áp đúng luật này ("A Grenadian passport", "Benefits of Grenadian
citizenship", "Receive your Grenadian passport"...) và chỉ giữ "Grenada" khi đó là **tên chương trình**
("Grenada citizenship by investment (CBI)", "Grenada citizenship by investment requirements").

Trang này (và trang InterContinental cùng mẻ) dùng "Grenada citizenship"/"Grenada passport" làm tính từ ở
**10 đoạn** — sai lệch có hệ thống so với trang nguồn của chính thuật ngữ này. Đáng chú ý s108 có gợi ý TM
88% đúng ("Benefits of **Grenadian** citizenship") nhưng bản dịch không theo. s102 là **ngoại lệ ĐÚNG**: đó
là tên chương trình CBI, giữ "Grenada citizenship by investment program" như trang nguồn — không sửa.

Đoạn cần sửa: s001, s003, s034, s093, s095, s097, s104, s108, s109, s110, s129 — xem `sua-song-ngu.txt`.

## 2. [VỪA] s035 — viết tắt CBI chưa viết đủ lần đầu

`thuat-ngu.csv` dòng "chương trình đầu tư nhập tịch" (chot): tên chính thức "Citizenship by Investment
(CBI)", *"lần đầu viết đủ kèm (CBI)"*. Bản Anh trang này dùng thẳng "CBI projects" ở s035 (lần xuất hiện
đầu và duy nhất của cụm này trên trang) mà chưa viết đủ. Sửa: viết đủ "Citizenship by Investment (CBI)".

## 3. [VỪA] s099 — "dependants" là chính tả Anh-Anh

Style guide mục 5 chốt tiếng Anh Mỹ cho toàn trang. "Dependants" là cách viết Anh-Anh; tiếng Anh Mỹ dùng
"dependents". Sửa trong `sua-song-ngu.txt`.

## 4. [NHẸ] s100, s101 — "đa quốc tịch" thu hẹp thành "dual"

Nguồn "đa quốc tịch" (không giới hạn số quốc tịch) trong khi bản Anh chỉ nói "dual citizenship" (đúng 2).
`thuat-ngu.csv` dòng "đa quốc tịch" (goi-y) gợi ý "dual or multiple citizenship" để không thu hẹp nghĩa —
đúng thực tế Grenada không giới hạn số quốc tịch giữ song song. Không bắt buộc (goi-y, chưa chốt) nhưng nên
sửa cho khớp cả hai đoạn (s100 h3 + s101 p, cùng cụm).

## 5. [NHẸ] s063 — mất tính từ "sang trọng"

"Thư viện & Lounge **sang trọng**" → "Library and lounge" bỏ mất từ tả chất lượng (luxurious). Đây là gạch
đầu dòng tiện ích, không ảnh hưởng tuân thủ, nhưng nên bổ sung lại cho đủ ý.

## 6. Không phải lỗi — chỉ ghi chú để CEO/B6 tham khảo

- s058 "Next to two 5-star brands" và s028 "Next to two luxury resorts": nguồn không ghi rõ số nhưng đúng
  thực tế (s029/s059 xác nhận "hai resort"/"hai khu nghỉ dưỡng") — không flag là thêm ý.
- s060 h3 "5-star resort amenities" mở đầu bằng chữ số — style guide mục 5 yêu cầu viết chữ khi số đứng đầu
  câu, nhưng "5-star" là cách viết rating chuẩn ngành khách sạn; đề nghị B6 (soát bản xứ) quyết, không sửa
  ở bước này.
- s092 "đặc quyền quốc tịch trọn đời vô giá" → "a route to citizenship for life" (bỏ "vô giá", đổi "đặc
  quyền" thành "a route to"): đây là làm mềm tuân thủ đúng hướng (tránh hứa chắc đặc quyền), không phải lỗi.
- Các điểm brief đã tự nêu cho CEO (số "140" chưa đối chiếu ngày, s102 cần giấy phép chứng minh, thiếu câu
  rào so với trang InterContinental): giữ nguyên trong `brief.md`, B5 không lặp lại.
