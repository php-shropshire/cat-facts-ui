FROM php:7-fpm

# PHP extensions
RUN apt-get update && apt-get install

# Kafka
RUN apt-get install -y librdkafka-dev
RUN pecl install rdkafka && docker-php-ext-enable rdkafka

# Permissions
COPY . /var/www
RUN chown -R www-data /var/www/logs