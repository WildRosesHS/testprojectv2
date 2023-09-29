FROM debian:12.1

RUN apt-get -y update && \
    apt-get -y install apt-transport-https && \
    apt-get -y install nginx && \
    apt-get -y install php-fpm && \
    apt-get -y install php-pgsql  && \
    mkdir -p /sites/test.project.com

COPY index.php /sites/test.project.com/index.php
COPY nginx.conf /etc/nginx/nginx.conf
COPY www.conf /etc/php/8.2/fpm/pool.d/www.conf
COPY script.sh script.sh

CMD ./script.sh