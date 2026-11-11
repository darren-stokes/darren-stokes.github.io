FROM nginx:stable-alpine3.24

COPY . /var/www/html/

COPY nginx.conf /etc/nginx/conf.d/local-site.conf
RUN rm /etc/nginx/conf.d/default.conf