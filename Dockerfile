# Use PHP 7.4 Apache base image
FROM php:7.4-apache

# Install required PHP extensions
RUN apt-get update && \
    apt-get install -y \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
        libzip-dev \
        libxml2-dev \
        zlib1g-dev \
        && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install -j$(nproc) gd pdo_mysql soap zip

# Set PHP configuration values
RUN echo "upload_max_filesize = 16M" > /usr/local/etc/php/conf.d/uploads.ini

# Enable Apache modules
RUN a2enmod rewrite

# Restart Apache to apply changes
RUN service apache2 restart


RUN echo "alias ll='ls -la'" >> ~/.bashrc

# Or if using /bin/sh, you can add it to ~/.profile instead
# RUN echo "alias ll='ls -la'" >> ~/.profile


COPY --chown=root:www-data qloapps /var/www/html
COPY --chown=root:www-data qloapps/upload /var/www/html/upload_bck



COPY entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

COPY init.sh /usr/local/bin/init.sh
RUN chmod +x /usr/local/bin/init.sh

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]

CMD ["apache2-foreground", "bash", "init"]