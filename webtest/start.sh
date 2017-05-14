#!/bin/bash

service mysql start
service apache2 start
service php7.0-fpm start

/usr/bin/tail -f /dev/null