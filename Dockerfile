FROM php:7.2.0-cli
WORKDIR /app
RUN apt-get update \
    && apt-get install -y zlib1g-dev wget git-core python-pip \
    && docker-php-ext-install zip \
    && pip install Sphinx
ADD . /app
CMD [ "make", "cs", "test" ]
