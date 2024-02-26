FROM nginx:1.25-bookworm-perl

EXPOSE 80:80

COPY . /usr/share/nginx/html/

RUN sed -i -e "/index.htm/s/;/ index.php;/" /etc/nginx/conf.d/default.conf && \
    rm -f /usr/share/nginx/html/index.html