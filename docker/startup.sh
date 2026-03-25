#!/bin/sh
echo "Running migrations..."
php /var/www/html/artisan migrate --force
echo "Migrations complete."
