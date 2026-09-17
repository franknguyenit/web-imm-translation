#!/bin/bash
# Cài dự án dịch web IMM lên máy mới. Chạy từ bất kỳ đâu: bash cong-cu/cai-dat.sh
# Không đụng ~/.claude/CLAUDE.md, hook, settings.json. Chỉ cài: thư viện Python, memory + skill của RIÊNG dự án này.
set -uo pipefail
GOC="$(cd "$(dirname "$0")/.." && pwd)"
TS="$(date +%Y%m%d-%H%M%S)"
LOI=0; CANH=0
ok()   { echo "  ✓ $*"; }
canh() { echo "  ⚠ $*"; CANH=$((CANH+1)); }
loi()  { echo "  ✗ $*"; LOI=$((LOI+1)); }
DUONG_CU="/Volumes/WORK-DATA/web-imm-translation"

echo "== 1. Python và thư viện"
if command -v python3 >/dev/null && python3 -c 'import sys; sys.exit(0 if sys.version_info >= (3,10) else 1)'; then
  ok "python3 $(python3 -c 'import sys;print(sys.version.split()[0])')"
else
  loi "cần python3 ≥ 3.10 (macOS: brew install python)"
fi
for mod in "bs4:beautifulsoup4" "docx:python-docx"; do
  m="${mod%%:*}"; goi="${mod##*:}"
  if python3 -c "import $m" 2>/dev/null; then ok "$goi"
  else
    python3 -m pip install --user -q "$goi" 2>/dev/null || python3 -m pip install --user --break-system-packages -q "$goi" 2>/dev/null
    python3 -c "import $m" 2>/dev/null && ok "$goi (vừa cài)" || loi "không cài được $goi — chạy tay: python3 -m pip install --user $goi"
  fi
done
command -v pdftotext >/dev/null && ok "pdftotext (đọc PDF)" || canh "thiếu pdftotext — chỉ cần khi dịch tệp PDF (macOS: brew install poppler)"
command -v gitleaks  >/dev/null && ok "gitleaks (rà khoá)"  || canh "thiếu gitleaks — tuỳ chọn (macOS: brew install gitleaks)"

echo "== 2. Mạng (lấy trang, gợi ý từ khoá, tỷ giá)"
for u in "https://immgroup.com/" "https://suggestqueries.google.com/complete/search?client=firefox&q=eb5" "https://open.er-api.com/v6/latest/USD"; do
  c=$(curl -s -o /dev/null -m 15 -A "Mozilla/5.0" -w "%{http_code}" "$u")
  [ "$c" = "200" ] && ok "$u" || canh "$u trả $c — bước tương ứng sẽ phải làm tay"
done

echo "== 3. Memory của dự án"
ENC="$(printf '%s' "$GOC" | sed 's/[^A-Za-z0-9-]/-/g')"
MEM="$HOME/.claude/projects/$ENC/memory"
mkdir -p "$MEM"
for f in "$GOC"/bo-nho/claude-memory/*.md; do
  [ -e "$f" ] || continue
  ten="$(basename "$f")"; dich="$MEM/$ten"
  if [ "$ten" = "MEMORY.md" ]; then
    touch "$dich"
    while IFS= read -r dong; do grep -qxF -- "$dong" "$dich" || echo "$dong" >> "$dich"; done < "$f"
    ok "MEMORY.md (gộp dòng chỉ mục)"
  elif [ ! -e "$dich" ]; then cp "$f" "$dich"; ok "$ten"
  elif cmp -s "$f" "$dich"; then ok "$ten (đã có, giống hệt)"
  else cp "$dich" "$dich.truoc-cai-$TS"; cp "$f" "$dich"; canh "$ten đã có bản khác — đã sao lưu $ten.truoc-cai-$TS rồi ghi bản từ gói"
  fi
done
echo "     → $MEM"

echo "== 4. Skill của dự án"
for d in "$GOC"/bo-nho/skill/*/; do
  [ -d "$d" ] || continue
  ten="$(basename "$d")"
  NOI=("$HOME/.claude/skills/$ten")
  [ -d "$HOME/.claude/portable/skill-cua-tony" ] && NOI+=("$HOME/.claude/portable/skill-cua-tony/$ten")
  [ -d "$HOME/.claude/hop-thu-skill" ] && NOI+=("$HOME/.claude/hop-thu-skill/$ten")
  for dich in "${NOI[@]}"; do
    moi="$(sed "s#$DUONG_CU#$GOC#g" "$d/SKILL.md")"   # đường dẫn dự án trong skill đổi theo máy mới
    if [ -f "$dich/SKILL.md" ] && [ "$moi" = "$(cat "$dich/SKILL.md")" ]; then ok "$ten đã có, giống hệt: $dich"; continue; fi
    [ -d "$dich" ] && cp -R "$dich" "$dich.truoc-cai-$TS" && canh "sao lưu skill cũ: $dich.truoc-cai-$TS"
    mkdir -p "$dich" && cp -R "$d". "$dich/" && printf '%s\n' "$moi" > "$dich/SKILL.md"
    ok "$ten → $dich"
  done
done

echo "== 5. Cửa kiểm máy"
cd "$GOC" || exit 1
find . -name __pycache__ -type d -exec rm -rf {} + 2>/dev/null
if python3 -m unittest discover -s tests >/tmp/imm-cai-dat-test.log 2>&1; then ok "$(grep -E '^Ran' /tmp/imm-cai-dat-test.log)"; else loi "ca kiểm đỏ — xem /tmp/imm-cai-dat-test.log"; fi
python3 cong-cu/dich.py kiemtn >/dev/null && ok "bảng thuật ngữ XANH" || loi "bảng thuật ngữ ĐỎ"
bash cong-cu/dong-bo-bo-nho.sh >/dev/null && ok "đồng bộ bộ nhớ XANH" || loi "đồng bộ bộ nhớ ĐỎ"
[ "$GOC" != "$DUONG_CU" ] && canh "dự án đặt ở $GOC (máy cũ: $DUONG_CU) — CLAUDE.md còn ghi đường dẫn memory của máy cũ ở mục 3, chỉ là ghi chú; memory thật đã cài vào $MEM"

echo
[ $LOI -eq 0 ] && echo "CÀI ĐẶT: XANH · $CANH cảnh báo" || echo "CÀI ĐẶT: ĐỎ · $LOI lỗi · $CANH cảnh báo"
exit $LOI
