FROM nginx:1.15.12-alpine

RUN addgroup -g 1000 -S www-data \
 && adduser -u 1000 -D -S -G www-data www-data

RUN apk update \
    && apk upgrade \
    && apk add --no-cache openssl \
    && apk add --no-cache bash

COPY nginx.conf /etc/nginx/
COPY site.conf /etc/nginx/conf.d/default.conf

EXPOSE 80 443
