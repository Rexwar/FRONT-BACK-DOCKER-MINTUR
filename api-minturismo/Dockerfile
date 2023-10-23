FROM composer:2.0 as build

WORKDIR /app

RUN mkdir public

COPY composer.json composer.json
COPY database/ database/

RUN composer install \
    --ignore-platform-reqs \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist

FROM php:8.1-fpm

# Set working directory
WORKDIR /var/www/backend/

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    default-mysql-client \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    autoconf \
    pkg-config \
    libzip-dev \
    zlib1g-dev \
    libssl-dev \
    libssl-doc \
    libsasl2-dev \
    libonig-dev \
    libcurl4-openssl-dev \
    ca-certificates \
    supervisor \
    nginx

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install pdo_mysql zip exif pcntl
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd

# create dir for supervisor
RUN mkdir -p /var/log/supervisor \
	&& mkdir -p /etc/supervisor/conf.d

#RUN mkdir /var/log/supervisord
COPY ./supervisor/supervisor.conf /etc/supervisor.conf

COPY backend.conf /etc/nginx/sites-enabled/default

COPY . .

COPY --from=build /app/vendor/ /var/www/backend/vendor/

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Add user permission folder
RUN chown -R www:www /var/www/backend
RUN chown -R www:www /var/log/supervisor

# Change current user to www
USER www

# expose and run supervisor
EXPOSE 80 2222
CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor.conf"]
