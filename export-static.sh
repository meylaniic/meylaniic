#!/usr/bin/env bash
# Re-export static site from the running Laravel dev server (port 8000).
# Usage: start `php artisan serve` first, then run this from app/.
set -e
cd "$(dirname "$0")"

HOME=D:/portofolio/tmp/home TMPDIR=D:/portofolio/tmp npm_config_cache=D:/portofolio/tmp/npmcache npm run build

OUT=../static-site
curl -s http://127.0.0.1:8000/ -o D:/portofolio/tmp/static-index.html
rm -rf "$OUT" && mkdir -p "$OUT"
sed -e 's|http://127.0.0.1:8000/|./|g' -e 's|url("/build/assets/|url("build/assets/|g' \
    D:/portofolio/tmp/static-index.html > "$OUT/index.html"
cp -r public/build "$OUT/build"
cp -r public/img "$OUT/img"
cp public/favicon.ico public/robots.txt "$OUT/"
echo "Exported to $OUT ($(du -sm "$OUT" | cut -f1) MB)"
