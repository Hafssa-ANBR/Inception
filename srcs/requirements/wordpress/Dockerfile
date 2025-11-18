
FROM debian:latest

RUN apt update && apt install -y \
    php-fpm \
    php-mysqli \
    curl \ 
    mariadb-client

COPY www.conf /etc/php/8.4/fpm/pool.d/.
COPY script.sh .

RUN chmod +x script.sh

EXPOSE 9000

CMD ["./script.sh"]