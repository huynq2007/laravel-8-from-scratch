FROM php:8.0-fpm

# Install PHP extensions and PECL modules.
RUN buildDeps=" \
      libpng-dev \
      libonig-dev \
      zlib1g-dev \
      libzip-dev \
      libicu-dev \
    " \
    runtimeDeps=" \
      curl \
      git \
    " \
 && apt-get update \
 && DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends $buildDeps $runtimeDeps \
 && docker-php-ext-install bcmath mbstring mysqli opcache pdo_mysql zip \
 && apt-get clean \
 && rm -rf /var/lib/apt/lists/*

# require for CakePHP
RUN docker-php-ext-configure intl
RUN docker-php-ext-install intl

# Copy ini files.
COPY php.ini /usr/local/etc/php/

# Declare default environment variables.
ENV PHP_IDE_CONFIG 'serverName=localhost'

WORKDIR /srv

CMD php-fpm
