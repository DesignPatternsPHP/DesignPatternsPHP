FROM php:7.3.0-cli
WORKDIR /app
RUN apt-get update \
    && apt-get install -y libzip-dev wget git-core python-pip \
    && docker-php-ext-install zip \
    && pip install Sphinx sphinx_rtd_theme
ADD . /app
RUN cd /app && make cs test html
CMD [ "php", "-S", "0.0.0.0:80", "-t", "_build/html" ]
