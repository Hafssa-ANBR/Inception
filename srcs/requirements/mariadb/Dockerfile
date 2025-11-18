FROM debian:latest

RUN apt update && apt install -y \
    mariadb-server

COPY 50-server.cnf /etc/mysql/mariadb.conf.d/.

COPY script.sh .

RUN chmod +x script.sh

RUN mkdir -p /var/run/mysqld /etc/mysql \
    && chown -R mysql:mysql /var/run/mysqld /etc/mysql

EXPOSE 3306

CMD ["./script.sh"]