FROM composer AS composer
FROM mlocati/php-extension-installer AS php-extension-installer


FROM php:8.1.9-fpm-alpine AS dev
# copy composer into php image
COPY --from=composer /usr/bin/composer /usr/bin/composer
# copy php-extension-installer into php image
COPY --from=php-extension-installer /usr/bin/install-php-extensions /usr/bin/install-php-extensions
# install xdebug for remote debugging
RUN install-php-extensions xdebug;