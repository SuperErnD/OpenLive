FROM mariadb:10.8.4
FROM trafex/php-nginx:latest

ENV MYSQL_ROOT_PASSWORD=HelloOpenLive!
ENV MYSQL_DATABASE=OpenLive
COPY . /app
COPY ./NginxSite.conf /etc/nginx/nginx.conf
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN composer install --optimize-autoloader --no-interaction --no-progress

ADD install/initialize-database-sqlite.sql /docker-entrypoint-initdb.d

COPY --chown=nginx --from=composer /app /var/www/html

EXPOSE 3306
