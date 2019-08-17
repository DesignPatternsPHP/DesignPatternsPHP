FROM php:7.3.8-cli
WORKDIR /app
RUN apt-get update \
    && apt-get install -y libzip-dev wget git-core python3 python3-pip \
    && docker-php-ext-install zip \
    && pip3 install Sphinx sphinx_rtd_theme
ADD . /app
RUN cd /app && make cs test html
CMD [ "php", "-S", "0.0.0.0:80", "-t", "_build/html" ]
