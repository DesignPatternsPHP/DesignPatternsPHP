FROM composer AS composer
WORKDIR /app
ADD . /app
RUN composer install

FROM php:8-cli-alpine
WORKDIR /app
COPY --from=composer /app /app
RUN ./vendor/bin/phpcs --ignore=_build . \
        && ./vendor/bin/phpunit \
        && ./vendor/bin/psalm --show-info=false \
        && ./check-refs-readmes

FROM python AS sphinx_build
WORKDIR /app
COPY --from=composer /app /app
RUN pip3 install Sphinx sphinx_rtd_theme
ARG language=en
RUN make -e "SPHINXOPTS=-D language='${language}'" html

FROM nginx
WORKDIR /usr/share/nginx/html
COPY --from=sphinx_build /app/_build/html /usr/share/nginx/html
RUN rm index.html && mv README.html index.html
