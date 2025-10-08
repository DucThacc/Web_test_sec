FROM php:8.1-apache

# Cài các extension cần thiết cho PHP và MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy source code vào container
COPY . /var/www/html/

# Phân quyền cho Apache
RUN chown -R www-data:www-data /var/www/html

# Bật mod_rewrite nếu cần
RUN a2enmod rewrite


# Thêm cấu hình VirtualHost cho phép truy cập
RUN echo '<Directory /var/www/html/>\n    AllowOverride All\n    Require all granted\n</Directory>' > /etc/apache2/conf-available/allow-access.conf && a2enconf allow-access

EXPOSE 80
