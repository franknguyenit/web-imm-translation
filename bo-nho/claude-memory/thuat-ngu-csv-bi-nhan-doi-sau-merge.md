---
name: thuat-ngu-csv-bi-nhan-doi-sau-merge
description: Merge git hai nhánh làm thuat-ngu.csv nhân đôi (509 dòng, 200 khoá trùng) — cách gộp lại an toàn
metadata:
  type: project
---

**22/09/2026:** commit merge `1396d60 "update code"` làm `thuat-ngu/thuat-ngu.csv` nhảy **237 → 509 dòng**:
hai nhánh cùng append nên git giữ **cả hai khối**, kể cả **một dòng tiêu đề thứ hai** lọt vào giữa thân tệp.
`kiemtn` ĐỎ với **200 khoá trùng** ⇒ B2 của mọi việc dịch bị chặn.

**Cách gộp đã dùng (giữ lại 303 dòng, không mất khoá nào — đã kiểm bằng so tập khoá trước/sau):**
1. 192 khoá trùng mà **nội dung y hệt** → giữ một dòng, theo luật dự án "trùng thì giữ dòng mới".
2. 8 khoá trùng mà **nội dung khác nhau** → **chọn tay**, không giữ máy móc dòng sau: ưu tiên dòng của **việc đã
   dịch thật** hơn dòng của việc `dong-bo-nhan-lien-ket` (dòng này hay ghi "trang chưa dịch"), và ưu tiên **tên
   chính thức** (vd `quỹ đầu tư cân bằng` → `balancing investment` của khung complying investment Úc, không phải
   `balanced fund`).
3. Dòng `cam` (khoá `vi` rỗng, là regex) phải lọc theo **cả dòng**, không theo khoá — nếu không sẽ xoá nhầm.
4. Dòng tiêu đề lặp trong thân tệp phải xoá riêng, nếu không `kiemtn` báo "loại sai «loai»".

**Bài học vẫn đúng:** ghi tệp dùng chung chỉ **append**, đừng đọc-sửa-ghi lại cả tệp. Nhưng append cũng không
cứu được khi **git merge** hai nhánh — nên sau mỗi lần merge phải chạy `kiemtn` trước khi dịch.
