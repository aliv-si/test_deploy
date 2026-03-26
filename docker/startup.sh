#!/bin/sh
echo "Running startup tasks..."

# Generate APP_KEY if not set
if [ -z "$APP_KEY" ]; then
    echo "APP_KEY not found, generating..."
    php /var/www/html/artisan key:generate --force
fi

php /var/www/html/artisan storage:link --force 2>/dev/null || true
php /var/www/html/artisan migrate --force
echo "Startup tasks complete."
