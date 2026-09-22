# Brief — Trang trục: Đầu tư định cư Canada (overview_2026, post_id 100912)

- **Mục đích:** trang TRỤC so sánh Start-up Visa (SUV) và các chương trình doanh nhân theo tỉnh bang (PNP).
- **Người đọc:** doanh nhân/nhà đầu tư đang chọn nước; quan tâm mức vốn CAD, tỉnh bang nào, thời gian xét, lộ trình PR.
- **Thị trường hợp:** Mỹ, Anh, UAE, Ấn Độ, Pakistan, Bangladesh, Đông Nam Á.
- **Giọng:** cố vấn điềm tĩnh; câu ngắn, ô bảng gọn.

## Từ khoá (độ phủ gợi ý Google 6 thị trường, CHƯA có số lượt tìm)
- **Chính:** `canada investor visa` — phủ 6/6 thị trường; "is there an investor visa for canada" là gợi ý mạnh nhất (37 lượt).
- **Phụ:** `canada investment immigration programs` · `canada investor visa requirements` · `canada investor visa cost` ·
  `canada business immigration requirements` · `canada investor visa processing time` · `canada investment immigration cost`.
- H1 = "Canada Investor Visa{br}Programs"; cụm từ khoá chính cũng nằm ở đoạn `p` s005 thuộc 150 chữ đầu.

## Phân đoạn
- **Dịch sát:** tên chương trình, mức vốn CAD, điều kiện tỉnh bang, thời gian xét, bảng so sánh.
- **Viết chung:** bỏ quy đổi VND; "xuất khẩu lao động" → cụm quốc tế.
- **Bỏ:** không đoạn nào.

## Ràng buộc kỹ thuật (template HTML trong ACF)
- Cả trang nằm trong MỘT trường HTML của `acf`; dịch qua `rut-layout.py` giữ nguyên **vị trí byte**.
- `.stat-row-label` ≈ 12 ký tự; tiền viết nhất quán `C$100,000` … `C$600,000`, **không quy đổi USD**.
- Giữ đủ `{1}…{/1}`, `{2/}`, `{br}`.

## Điều phải ghi báo cáo cho CEO
- **s060 · s092 · s156** nói "sau 5 năm có PR mới xin quốc tịch" — luật Canada là **3 năm hiện diện trong 5 năm**.
- **s345–s346** gắn nhãn "RCIC" với "luật sư di trú Canada cấp phép" — **RCIC là tư vấn viên di trú được quản lý,
  không phải luật sư**.
- **s224** SUV: nguồn nói gọn về quyền biểu quyết; luật còn đòi đương đơn tự giữ ≥10%.
- **Mâu thuẫn trong trang:** s337 "trên 50% lợi nhuận" vào Quỹ Be Better trong khi các trang trục khác ghi
  "tối thiểu 51%"; s167 gắn "mức đầu tư thấp nhất" cho Nova Scotia (từ 100.000 CAD) nhưng bảng so sánh s256 ghi
  "từ 150.000 CAD (tại Halifax)"; s201 nói SUV ngưng nhận hồ sơ mới từ 01/01/2026 nhưng ô xét duyệt s214 vẫn để
  "30 – 34 tháng".
