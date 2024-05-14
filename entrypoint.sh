#!/bin/bash

echo "TEST entrypoint"


chown root:www-data /var/www/html/upload/ -R
chmod 664 /var/www/html/upload/ -R
chmod +X /var/www/html/upload

cp -f /var/www/html/upload_bck/index.php /var/www/html/upload/index.php
cp -f /var/www/html/upload_bck/.htaccess /var/www/html/upload/.htaccess





if [ "$1" = "bash" ]; then
    exec /bin/bash
elif [ "$1" = "init" ]; then
    exec /usr/local/bin/custom_script.sh
else
    exec apache2-foreground
fi

