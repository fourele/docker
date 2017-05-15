#!/bin/bash
service apache start
service php5-fpm start
tail -f /dev/null