# Use official PHP image
FROM php:8.3-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy Laravel files (excluding what's in .dockerignore)
COPY . .

# Install dependencies (no dev for production)
RUN composer install --no-interaction --optimize-autoloader --no-dev

# Permissions (adjust as needed)
RUN chown -R www-data:www-data /var/www/html/storage