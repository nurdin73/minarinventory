# NPM
FROM node:latest as npm_builder
RUN rm -rf /src
WORKDIR /src
COPY . .
RUN npm install

# PHP
FROM php:latest AS php
RUN apt-get update -y && apt-get install -y openssl zip unzip
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# RUN docker-php-ext-install pdo_mysql
WORKDIR /src
COPY --from=npm_builder /src /src

RUN mv .env.example .env

RUN composer install
RUN php artisan key:generate
CMD php artisan serve --host=0.0.0.0 --port=80

EXPOSE 80