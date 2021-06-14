FROM php:7.2-fpm

# Copy composer.lock and composer.json
#COPY composer.lock composer.json /var/www/

# Set working directory
WORKDIR /var/www

# Preparando directorios que deben estar creados para que podamos
# instalar liberias de source.

RUN mkdir /usr/src/php/ % mkdir /usr/src/php/ext/

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    sqlite3 libsqlite3-dev \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    zlib1g-dev \
    libicu-dev \
    g++\
    netcat -y \
    net-tools \
    libmemcached-dev\
    libxml2-dev

# Libreria Mencached
RUN cd /usr/src/php/ext \
    && curl -fsSL https://github.com/php-memcached-dev/php-memcached/archive/php7.tar.gz -o memcached.tar.gz \
    && mkdir -p memcached \
    && tar -xf memcached.tar.gz -C memcached --strip-components=1 \
    && rm memcached.tar.gz \
    && docker-php-ext-install memcached


RUN docker-php-ext-install soap

# # Install extensions
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl gettext pdo
RUN docker-php-ext-configure gd --with-gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/
RUN docker-php-ext-install gd

# Install netcat
RUN apt update \
    && apt install netcat -y \
    && apt install net-tools

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer self-update 2.0.8

RUN yes | pecl install xdebug-2.6.0 \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=1" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=1" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_port=9000" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_handler=dbgp" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_connect_back=0" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.idekey=PHPSTORM" >> /usr/local/etc/php/conf.d/xdebug.ini \
#    && echo "xdebug.remote_log=/tmp/xdebug.log" >> /usr/local/etc/php/conf.d/xdebug.ini \
#    && echo "xdebug.remote_host=host.docker.internal" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && netstat -nr | grep '^0.0.0.0' | awk '{print "xdebug.remote_host=",$2}' >> /usr/local/etc/php/conf.d/xdebug.ini

ENV XDEBUG_CONFIG "remote_enable=1 remote_mode=req remote_port=9000 remote_connect_back=0"
ENV PHP_IDE_CONFIG "serverName=localhost"

RUN docker-php-ext-enable xdebug
RUN echo netstat -nr | grep '^0\.0\.0\.0' | awk '{print "xdebug.remote_host=", $2}'

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*


# Arrancamos con www user

RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Pongo una contraseña a root por si hubiera que tocar algo
RUN echo "root:secret" | chpasswd

USER www

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
