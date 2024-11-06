FROM nginx:1.27.2

COPY /src/static /var/www/html
COPY /conf/nginx /etc/nginx/templates

# https://stackoverflow.com/questions/56649582/substitute-environment-variables-in-nginx-config-from-docker-compose
ENV NGINX_ENVSUBST_TEMPLATE_SUFFIX=".conf"
