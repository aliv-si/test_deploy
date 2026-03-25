FROM serversideup/php:8.3-fpm-nginx AS base

# Switch to root for installing Node
USER root

# Install Node.js
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction --ignore-platform-reqs

# Install Node dependencies & build frontend
RUN npm install && npm run build

# Fix permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Auto-run migrations on startup
COPY docker/startup.sh /etc/entrypoint.d/99-migrations.sh
RUN chmod +x /etc/entrypoint.d/99-migrations.sh

# Switch back to www-data
USER www-data

EXPOSE 8080
