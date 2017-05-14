#!/bin/bash
service apache start
service php7.0-fpm start
/usr/bin/tail -f /dev/null