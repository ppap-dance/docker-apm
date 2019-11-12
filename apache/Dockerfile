FROM httpd:2.4-alpine

RUN apk update; \
    apk upgrade;

COPY default.conf /usr/local/apache2/conf/default.conf

RUN echo "Include /usr/local/apache2/conf/default.conf" \
    >> /usr/local/apache2/conf/httpd.conf