# #!/bin/bash
# set -e

# # Generate SSL certificates
# mkdir -p /etc/nginx/ssl
# openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
#     -keyout /etc/nginx/ssl/nginx.key \
#     -out /etc/nginx/ssl/nginx.crt \
#     -subj "/C=MA/ST=Casablanca/L=Casablanca/O=42/OU=Student/CN=localhost"

# # Start nginx in foreground
# exec nginx -g 'daemon off;'

#!/bin/bash
set -e

# Domain name
DOMAIN="hanebaro.42.fr"

# Generate SSL certificates
mkdir -p /etc/nginx/ssl
openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
    -keyout /etc/nginx/ssl/nginx.key \
    -out /etc/nginx/ssl/nginx.crt \
    -subj "/C=MA/ST=Casablanca/L=Casablanca/O=42/OU=Student/CN=${DOMAIN}"

# Start nginx in foreground
exec nginx -g 'daemon off;'
