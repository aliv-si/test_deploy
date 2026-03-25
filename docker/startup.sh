#!/bin/sh
echo "Running startup tasks..."
php /var/www/html/artisan storage:link --force 2>/dev/null || true
php /var/www/html/artisan migrate --force
echo "Startup tasks complete."
