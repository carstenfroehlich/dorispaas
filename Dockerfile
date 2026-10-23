FROM php:8.5-cli@sha256:d5e3f03b94966fd65df52b9819c6dde463003b5a32d032698290a0b37b53bb37
RUN docker-php-ext-install -j2 pdo_mysql
WORKDIR /app
