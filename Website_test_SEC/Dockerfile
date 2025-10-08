FROM php:8.1-apache

# Cài các extension cần thiết cho PHP và MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy source code vào container
COPY . /var/www/html/

# Phân quyền cho Apache
RUN chown -R www-data:www-data /var/www/html

# Bật mod_rewrite nếu cần
RUN a2enmod rewrite

EXPOSE 80
