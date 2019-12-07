FROM nginx:1.10-alpine
ADD docker/prod/nginx.conf /etc/nginx/conf.d/default.conf
COPY public /var/www/public
