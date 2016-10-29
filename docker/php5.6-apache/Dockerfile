FROM php:5.6-apache

MAINTAINER Szabolcs Hajdu <sabee0418@gmail.com>


# install the PHP extensions we need.
RUN apt-get update && apt-get install -y nano libpng12-dev libjpeg-dev \
	&& docker-php-ext-configure gd --with-png-dir=/usr --with-jpeg-dir=/usr \
	&& docker-php-ext-install gd pdo pdo_mysql \

	&& apt-get remove -y --purge software-properties-common \
	&& apt-get clean \
	&& rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY config/php.ini /usr/local/etc/php/

# Configure apache.
RUN a2enmod rewrite

# Update the default apache site with the config we created.
ADD config/vhost.conf /etc/apache2/sites-enabled/000-default.conf

CMD ["apache2-foreground"]