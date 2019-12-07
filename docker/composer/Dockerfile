FROM php:7-alpine

RUN apk --no-cache add curl git subversion openssh openssl mercurial tini bash zlib-dev libpng-dev libzip-dev
RUN apk add --no-cache icu-dev
RUN echo "memory_limit=-1" > "$PHP_INI_DIR/conf.d/memory-limit.ini" \
 && echo "date.timezone=${PHP_TIMEZONE:-UTC}" > "$PHP_INI_DIR/conf.d/date_timezone.ini"

RUN docker-php-ext-install zip gd intl
RUN docker-php-ext-enable intl

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /tmp

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version

COPY docker-entrypoint.sh /docker-entrypoint.sh
RUN apk add dos2unix
RUN dos2unix /docker-entrypoint.sh
RUN chmod 755 /docker-entrypoint.sh

WORKDIR /app

ENTRYPOINT ["/docker-entrypoint.sh"]

CMD ["composer"]
