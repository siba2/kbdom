FROM ubuntu:xenial

ENV OS_LOCALE="en_US.UTF-8"
RUN apt-get update && apt-get install -y locales && locale-gen ${OS_LOCALE}
ENV LANG=${OS_LOCALE} \
    LANGUAGE=${OS_LOCALE} \
    LC_ALL=${OS_LOCALE} \
    DEBIAN_FRONTEND=noninteractive

ENV APACHE_CONF_DIR=/etc/apache2 \
    PHP_CONF_DIR=/etc/php/7.3 \
    PHP_DATA_DIR=/var/lib/php

COPY .docker/php-apache/entrypoint.sh /sbin/entrypoint.sh

RUN	\
	BUILD_DEPS='software-properties-common python-software-properties' \
    && dpkg-reconfigure locales \
    && apt-get -y update \
	&& apt-get install --no-install-recommends -y $BUILD_DEPS \
	&& add-apt-repository -y ppa:ondrej/php \
	&& add-apt-repository -y ppa:ondrej/apache2 \
	&& apt-get -y update \
    && apt-get install -y curl apache2 libapache2-mod-php7.3 php7.3-cli php7.3-readline php7.3-mbstring php7.3-zip php7.3-intl php7.3-xml php7.3-json php7.3-curl php7.3-gd php7.3-pgsql php7.3-mysql php7.3-bcmath php7.3-xdebug php-pear \
    # Apache settings
    && cp /dev/null ${APACHE_CONF_DIR}/conf-available/other-vhosts-access-log.conf \
    && rm ${APACHE_CONF_DIR}/sites-enabled/000-default.conf ${APACHE_CONF_DIR}/sites-available/000-default.conf \
    && a2enmod rewrite php7.3 \
	# Install composer
	&& curl -sS https://getcomposer.org/installer | php -- --version=1.9.0 --install-dir=/usr/local/bin --filename=composer \
	# Cleaning
	&& apt-get purge -y --auto-remove $BUILD_DEPS \
	&& apt-get autoremove -y \
	&& rm -rf /var/lib/apt/lists/* \
	# Forward request and error logs to docker log collector
	&& ln -sf /dev/stdout /var/log/apache2/access.log \
	&& ln -sf /dev/stderr /var/log/apache2/error.log \
	&& chmod 755 /sbin/entrypoint.sh \
	&& chown www-data:www-data ${PHP_DATA_DIR} -Rf \
	# NodeJS (10.x) Installation
	&& curl -sL https://deb.nodesource.com/setup_10.x -o nodesource_setup.sh \
	&& apt-get update \
	&& apt-get install -y apt-transport-https \
	&& bash ./nodesource_setup.sh \
	&& rm nodesource_setup.sh \
	&& apt-get install -y nodejs \
    # Git installation
	&& apt-get install -y git \
	# Network utils installation
	&& apt-get install -y iputils-ping

# Secret script to help with migrations
RUN git clone https://github.com/vishnubob/wait-for-it.git

COPY .docker/php-apache/configs/apache2.conf ${APACHE_CONF_DIR}/apache2.conf
COPY .docker/php-apache/configs/app.conf ${APACHE_CONF_DIR}/sites-enabled/app.conf
COPY .docker/php-apache/configs/php.ini  ${PHP_CONF_DIR}/apache2/conf.d/custom.ini

WORKDIR /var/www/app

EXPOSE 80 443

# By default, simply start apache.
CMD ["/sbin/entrypoint.sh"]
