# Production image: Nginx + PHP-FPM (single container for PaaS hosting)
FROM php:8.2-fpm

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nginx \
    supervisor \
    && docker-php-ext-install pdo_mysql \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Force IPv4: many VPS hosts blackhole IPv6 and Composer aborts after a 10s connect timeout.
ENV COMPOSER_ALLOW_SUPERUSER=1 \
    COMPOSER_IPRESOLVE=4

COPY composer.json composer.lock ./
RUN set -eux; \
    ok=0; \
    for i in 1 2 3; do \
      if composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist; then \
        ok=1; \
        break; \
      fi; \
      echo "composer dist attempt ${i} failed, retrying..."; \
      sleep 5; \
    done; \
    if [ "$ok" != 1 ]; then \
      composer install --no-dev --optimize-autoloader --no-interaction --prefer-source; \
    fi

COPY . .

RUN rm -f /etc/nginx/sites-enabled/default
COPY docker/nginx/production.conf /etc/nginx/conf.d/default.conf
COPY docker/supervisor/supervisord.conf /etc/supervisor/conf.d/app.conf

EXPOSE 80

CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/supervisord.conf"]
