@echo off
cd /d "%~dp0"
echo Starting PostgreSQL...
docker compose up -d
echo Starting site at http://127.0.0.1:8080
php -d short_open_tag=On -S 127.0.0.1:8080 -t "%~dp0"
