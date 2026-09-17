# Cài dự án "Dịch web IMM Group" lên máy mới

Gói này chứa **toàn bộ** dự án: luật làm việc (`CLAUDE.md`), bộ công cụ, ca kiểm, bảng thuật ngữ, bộ nhớ dịch,
style guide, từ khoá đã học, nhật ký, các việc đã dịch, và bản sao **memory + skill** của Claude cho dự án này.
Đóng gói ngày 17/09/2026 từ máy Mac Studio, đường dẫn cũ `/Volumes/WORK-DATA/web-imm-translation`.

## Cách nhanh nhất: dán câu lệnh này vào Claude Code ở máy mới

Giải nén gói vào thư mục muốn đặt dự án, mở Claude Code **tại thư mục đó**, rồi gõ:

> Đọc CAI-DAT.md rồi cài dự án này: chạy `bash cong-cu/cai-dat.sh`, sửa những gì báo ĐỎ, báo lại kết quả từng mục.

Sau khi cài xong, **mở phiên Claude Code mới** trong thư mục dự án để `CLAUDE.md`, memory và skill được nạp.
Rồi thử: dán một link `immgroup.com/...` vào khung chat.

## Script cài làm gì (`cong-cu/cai-dat.sh`)

| Bước | Việc | Ghi đè gì? |
|---|---|---|
| 1 | Kiểm Python ≥ 3.10; cài `beautifulsoup4`, `python-docx` nếu thiếu; kiểm `pdftotext`, `gitleaks` | Không |
| 2 | Kiểm mạng tới immgroup.com, Google gợi ý từ khoá, open.er-api.com (tỷ giá) | Không |
| 3 | Cài memory vào `~/.claude/projects/<đường-dẫn-dự-án-mã-hoá>/memory/` | Tệp trùng tên mà khác nội dung → **sao lưu** `.truoc-cai-<giờ>` rồi ghi |
| 4 | Cài skill `dich-web-imm` vào `~/.claude/skills/` (và `portable/skill-cua-tony/`, `hop-thu-skill/` nếu máy có) — tự đổi đường dẫn dự án trong skill theo máy mới | Skill cùng tên đã có → **sao lưu** rồi ghi |
| 5 | Chạy 33 ca kiểm, kiểm bảng thuật ngữ, kiểm đồng bộ bộ nhớ | Không |

Kết thúc in `CÀI ĐẶT: XANH` hoặc `ĐỎ · n lỗi`. **Không** đụng `~/.claude/CLAUDE.md`, hook, `settings.json`.

## Công cụ cần có

| Thứ | Bắt buộc? | Dùng để | Cài (macOS) |
|---|---|---|---|
| Claude Code, gói có Opus + Sonnet | Bắt buộc | Dịch (Opus), soát song ngữ (Sonnet), soát bản xứ (Opus) | — |
| Công cụ sẵn của Claude Code: **Agent** (sub-agent `general-purpose`), **WebSearch** | Bắt buộc | Chạy song song mẻ dịch/soát; xem kết quả Google cho từ khoá | Có sẵn |
| **Browser pane** của app Claude desktop | Nên có | Lấy chữ khi trang chặn máy hoặc dựng bằng JavaScript | Có sẵn trong app desktop |
| Python 3.10+ · `beautifulsoup4` · `python-docx` | Bắt buộc | `cong-cu/dich.py` | `brew install python` · script tự cài thư viện |
| `pdftotext` (poppler) | Khi dịch PDF | Đọc tệp PDF | `brew install poppler` |
| `gitleaks` | Tuỳ chọn | Rà khoá bí mật trước khi đẩy | `brew install gitleaks` |
| MCP server / khoá API | **Không cần** | Dự án không dùng khoá API, không dùng MCP | — |

## Những thứ KHÔNG nằm trong gói (thuộc hạ tầng chung của máy, không riêng dự án)

- `~/.claude/CLAUDE.md` (luật toàn cục), các hook (`phan-dinh-truoc-luot.sh`, cổng `model-routing`, cổng chốt phiên,
  `hoc.py`), skill chung như `model-routing`, `chot-phien`. Dự án **chạy được mà không cần chúng** (luật dự án tự đủ).
  Muốn máy mới giống hệt về hạ tầng chung thì đồng bộ riêng bằng quy trình hạ tầng của máy (ví dụ skill
  `sync-studio-to-macbook`) — việc đó sửa hạ tầng, phải được CEO duyệt riêng.

## Nội dung gói

```
CLAUDE.md                  luật dự án (quy trình 11 bước, bàn giao trong chat)
CAI-DAT.md                 tệp này
cong-cu/dich.py            moi · xem · dien · tukhoa · tygia · ghep · kiem · nap · kiemtn
cong-cu/dong-bo-bo-nho.sh  chép memory + skill của Claude về bo-nho/
cong-cu/cai-dat.sh         cài lên máy mới
tests/                     33 ca kiểm (python3 -m unittest discover -s tests)
quy-trinh/style-guide.md   style guide
thuat-ngu/thuat-ngu.csv    bảng thuật ngữ
bo-nho-dich/               bộ nhớ dịch .jsonl + .tmx
seo/tu-khoa-thi-truong.md  từ khoá đã học
nhat-ky/nhat-ky.md         nhật ký
viec/                      các việc đã dịch (nguồn, bảng song ngữ, báo cáo soát, bản giao)
bo-nho/claude-memory/      bản sao memory Claude của dự án
bo-nho/skill/dich-web-imm/ bản sao skill
```

## Kiểm sau khi cài (máy làm, không cần mắt người)

```bash
bash cong-cu/cai-dat.sh
```
```bash
python3 -m unittest discover -s tests
```
