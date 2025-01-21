FROM php:8.4

WORKDIR /app

# Or developement:
RUN cp $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini

ADD --chmod=0755 https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && php composer-setup.php && php -r "unlink('composer-setup.php');"

RUN mv composer.phar /usr/bin/composer

RUN install-php-extensions \
    zip \
    intl \
    gd \
    pdo_mysql \
    pcntl \
    sockets

# RUN ["php", "artisan", "octane:install", "roadrunner"]

CMD ["php","artisan", "octane:roadrunner", "--host=0.0.0.0"]