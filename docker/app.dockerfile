FROM php:7.2-fpm
RUN apt-get update && apt-get install -y libmcrypt-dev libpq-dev \
    mariadb-client libmagickwand-dev libldap2-dev zlib1g-dev libfreetype6-dev \
    libjpeg62-turbo-dev libpng-dev libicu-dev g++ --no-install-recommends \
    && pecl install imagick \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql sockets calendar intl \
    && docker-php-ext-enable imagick intl \
    && apt-get install -y wget \
    && apt-get install -y xz-utils \
    && wget https://nodejs.org/dist/v8.11.3/node-v8.11.3-linux-x64.tar.xz \
    && tar -C /usr/local --strip-components 1 -xJf node-v8.11.3-linux-x64.tar.xz
RUN apt-get install -y libzip-dev
RUN docker-php-ext-install -j$(nproc) intl
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/
RUN docker-php-ext-install -j$(nproc) gd
RUN docker-php-ext-install zip
RUN apt-get update && apt-get install -y python-pip python-setuptools
# Supervisor config
RUN pip install wheel
