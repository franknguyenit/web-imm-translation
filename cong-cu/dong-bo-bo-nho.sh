#!/bin/bash
# Chép bộ nhớ Claude + skill của dự án về thư mục local bo-nho/ (một chiều: Claude → local).
# Dùng: bash cong-cu/dong-bo-bo-nho.sh [tên-skill ...]   (mặc định skill: dich-web-imm)
set -euo pipefail
GOC="$(cd "$(dirname "$0")/.." && pwd)"
# Claude Code đặt bộ nhớ theo đường dẫn dự án đã mã hoá (ký tự không phải chữ/số/gạch nối → "-")
ENC="$(printf '%s' "$GOC" | sed 's/[^A-Za-z0-9-]/-/g')"
MEM="$HOME/.claude/projects/$ENC/memory"
SKILLS=("${@:-dich-web-imm}")

mkdir -p "$GOC/bo-nho/claude-memory" "$GOC/bo-nho/skill"
if [ -d "$MEM" ]; then
  rsync -a --delete "$MEM/" "$GOC/bo-nho/claude-memory/"
fi
for s in "${SKILLS[@]}"; do
  for nguon in "$HOME/.claude/portable/skill-cua-tony/$s" "$HOME/.claude/skills/$s"; do
    if [ -d "$nguon" ]; then rsync -a --delete "$nguon/" "$GOC/bo-nho/skill/$s/"; break; fi
  done
done

so_mem=$(find "$GOC/bo-nho/claude-memory" -name '*.md' | wc -l | tr -d ' ')
so_skill=$(find "$GOC/bo-nho/skill" -name 'SKILL.md' | wc -l | tr -d ' ')
# đối chiếu: số tệp memory trên Claude phải bằng bản local
so_goc=$( [ -d "$MEM" ] && find "$MEM" -name '*.md' | wc -l | tr -d ' ' || echo 0)
if [ "$so_goc" != "$so_mem" ]; then echo "ĐỎ: memory Claude $so_goc tệp, local $so_mem tệp"; exit 1; fi
echo "XANH: memory $so_mem tệp · skill $so_skill bộ · đã chép về $GOC/bo-nho/"
