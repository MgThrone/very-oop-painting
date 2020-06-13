FROM php:7.4.6-cli

# Install required system packages
RUN apt-get update && apt-get install -y \
            zip \
            unzip \
            libzip-dev \
            libfreetype6-dev \
            libjpeg-dev \
            libpng-dev \
     && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install zip && \
    docker-php-ext-configure gd --with-jpeg --with-freetype && \
    docker-php-ext-install gd && \
    docker-php-ext-enable gd

# Copy the Composer PHAR from the Composer image into the PHP image
COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

# For directories permissions
#ENV COMPOSER_ALLOW_SUPERUSER 1