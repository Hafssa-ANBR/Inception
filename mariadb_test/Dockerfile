FROM debian:bullseye

RUN apt update && apt install -y mariadb-server && rm -rf /var/lib/apt/lists/*

# Copier la configuration et le script d’init
COPY 50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
COPY init.sql /etc/mysql/init.sql

# Créer le dossier runtime (sinon MariaDB plante)
RUN mkdir -p /run/mysqld && chown -R mysql:mysql /run/mysqld

# Exposer le port interne (pour test)
EXPOSE 3306

CMD ["mysqld"]
