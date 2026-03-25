#!/bin/sh
echo "Running startup tasks..."
php /var/www/html/artisan storage:link --force 2>/dev/null || true
php /var/www/html/artisan migrate --force
php /var/www/html/artisan config:cache
php /var/www/html/artisan route:cache
php /var/www/html/artisan view:cache
echo "Startup tasks complete."
