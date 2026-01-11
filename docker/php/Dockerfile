FROM php:8.3-fpm

# Устанавливаем системные пакеты
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libonig-dev \
    libzip-dev \
    zip \
    && docker-php-ext-install pdo pdo_pgsql mbstring zip \
    && rm -rf /var/lib/apt/lists/*

# Устанавливаем Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Рабочая директория
WORKDIR /var/www/html

# Опционально: выставим права для storage/bootstrap (удобно для dev)
RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

USER www-data

CMD ["php-fpm"]
