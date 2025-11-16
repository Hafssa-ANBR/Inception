
# FROM debian:latest

# RUN apt update && apt install -y \
#     nginx

# COPY default /etc/nginx/sites-available/.

# CMD ["nginx", "-g", "daemon off;"]


FROM debian:latest

# Installer NGINX et OpenSSL (pour générer les certificats)
RUN apt update && apt install -y \
    nginx \
    openssl

COPY default /etc/nginx/sites-available/.
COPY create_certs.sh .

RUN chmod +x create_certs.sh
# Expose les ports HTTP et HTTPS
EXPOSE 80 443

# Lance NGINX au démarrage du container
CMD ["./create_certs.sh"]
