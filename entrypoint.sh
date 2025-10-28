#!/bin/bash
set -e

echo "🚀 Booting Laravel (MySQL mode, no migrations)..."

# Wait for MySQL to be available (optional but recommended)
echo "⏳ Checking MySQL connection..."
until php -r "new PDO('mysql:host=' . getenv('DB_HOST') . ';port=' . getenv('DB_PORT') . ';dbname=' . getenv('DB_DATABASE'), getenv('DB_USERNAME'), getenv('DB_PASSWORD'));" >/dev/null 2>&1; do
  echo "   → MySQL not ready, retrying..."
  sleep 3
done
echo "✅ MySQL connection established."

# Refresh caches
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear

# Rebuild optimized caches
php artisan config:cache
php artisan route:cache

# Ensure storage link exists
php artisan storage:link || true

echo "✅ Laravel ready. Starting Apache..."
exec apache2-foreground
