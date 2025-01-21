FROM dunglas/frankenphp

WORKDIR /app

# Or developement:
RUN cp $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && php composer-setup.php && php -r "unlink('composer-setup.php');"


RUN mv composer.phar /usr/bin/composer

RUN install-php-extensions \
    zip \
    intl \
    gd \
    pdo_mysql \
    pcntl


CMD ["php","artisan", "octane:frankenphp", "--port=80", "--host=0.0.0.0"]