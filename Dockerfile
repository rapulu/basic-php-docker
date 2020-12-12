FROM php:7.4-cli

WORKDIR /usr/src/app 

COPY . .

CMD ["php", "-S", "0.0.0.0:80", "-t", "/usr/src/app"]

