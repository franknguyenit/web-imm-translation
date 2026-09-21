---
name: moi-truong-windows-cua-du-an-dich
description: "Dự án dịch web IMM chạy trên Windows (G:\\WORD\\Github\\web-imm-translation) — dùng `python`, phải đặt PYTHONIOENCODING, 3 test hỏng sẵn"
metadata: 
  node_type: memory
  type: project
  originSessionId: 435a9eb0-4ad7-4f63-8020-cd743837e165
---

Kho `web-imm-translation` vốn viết trên macOS (`/Volumes/WORK DATA/...`), nay chạy trên **Windows 10 + PowerShell**
tại `G:\WORD\Github\web-imm-translation`. Khác biệt cần nhớ:

- Lệnh là **`python`**, không phải `python3` (CLAUDE.md viết `python3`).
- **Phải đặt `$env:PYTHONIOENCODING="utf-8"` trước mọi lệnh `dich.py`**, nếu không mọi lệnh in ra chữ Việt sẽ
  chết vì `UnicodeEncodeError` (console mặc định cp1252).
- Thư mục memory của Claude ở `C:\Users\HP\.claude\projects\G--WORD-Github-web-imm-translation\memory\`;
  `cong-cu/dong-bo-bo-nho.sh` trỏ đường dẫn macOS nên **không chạy được** — phải chép tay sang
  `bo-nho/claude-memory/` và `bo-nho/skill/`.
- `python -m unittest discover -s tests` có **3 lỗi sẵn từ môi trường, không phải lỗi bộ công cụ**:
  `test_dien`, `test_nap_xoa_cu_giu_moi` (tệp `tests/test_dich.py` gọi `write_text` không truyền
  `encoding="utf-8"` → cp1252 chết), và `test_tach_html_bo_rac` (thiếu `pip install beautifulsoup4`).
  42/45 test còn lại XANH. Việc dịch từ tệp `.json` không dùng `bs4` nên không ảnh hưởng.

**Why:** ba lỗi test này trông như bộ công cụ hỏng, dễ mất thời gian đi sửa nhầm; và quên `PYTHONIOENCODING`
làm mọi lệnh đầu tiên đều thất bại.

**How to apply:** mở đầu mỗi phiên trên máy này, chạy thử `$env:PYTHONIOENCODING="utf-8"; python cong-cu\dich.py kiemtn`.
Muốn test xanh hết thì `pip install beautifulsoup4 python-docx` và thêm `encoding="utf-8"` vào `tests/test_dich.py`
(việc riêng, không gộp vào việc dịch).
