#!/bin/bash
service mysql start
service apache2 start
service php5-fpm start
tail -f /dev/null    # 保持容器不退出