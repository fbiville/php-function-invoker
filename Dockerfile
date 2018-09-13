FROM php:7.1-cli

COPY . /usr/src/invoker
WORKDIR /usr/src/invoker

EXPOSE 8080

CMD php -S 0.0.0.0:8080 ./server.php