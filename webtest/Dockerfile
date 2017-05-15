FROM mywebbase
COPY ./src/ /var/www/html/
COPY ./init.sql /tmp/
COPY ./start.sh /tmp/

RUN service mysql start\
    && mysqladmin -uroot password root\
    && mysql -e "source /tmp/init.sql" -uroot -proot\
    && chmod +x /tmp/start.sh

WORKDIR /var/www/html 
CMD ["/tmp/start.sh"]