FROM myweb:latest
COPY ./src/ /var/www/html/
COPY ./init.sql /tmp/
COPY ./start.sh /tmp/

RUN service mysql start && mysql -e "source /tmp/init.sql" -uroot -proot && service mysql stop\
    && chmod +x /tmp/start.sh
WORKDIR /var/www/html 

CMD ["/tmp/start.sh"]