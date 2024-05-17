#!/bin/bash

echo "TEST entrypoint"

if [ "$1" = "bash" ]; then
    exec /bin/bash
else
  if [ -e "/var/www/html/config/settings.inc.php" ]; then
    echo "Already initiated project"
  else
    echo "RUNNING init script"
    # php index_cli.php --domain localhost:8090 --db_server mysql --db_user
    # qloapps_user --db_password qloapps_pass --db_name qloapps_schema --db_create --newletter 0 --send_email 0
    cp -rf /data/source/. /var/www/html/

    chown -R root:www-data /var/www/html/config
    chown -R root:www-data /var/www/html/cache
    chown -R root:www-data /var/www/html/log
    chown -R root:www-data /var/www/html/img
    chown -R root:www-data /var/www/html/mails
    chown -R root:www-data /var/www/html/modules
    chown -R root:www-data /var/www/html/themes/hotel-reservation-theme/lang
    chown -R root:www-data /var/www/html/themes/hotel-reservation-theme/pdf/lang
    chown -R root:www-data /var/www/html/themes/hotel-reservation-theme/cache
    chown -R root:www-data /var/www/html/translations
    chown -R root:www-data /var/www/html/upload
    chown -R root:www-data /var/www/html/download

    chmod -R 664 /var/www/html/config && chmod -R u+rwX,go+rX /var/www/html/config
    chmod -R 664 /var/www/html/cache && chmod -R u+rwX,go+rX /var/www/html/cache
    chmod -R 664 /var/www/html/log && chmod -R u+rwX,go+rX /var/www/html/log
    chmod -R 664 /var/www/html/img && chmod -R u+rwX,go+rX /var/www/html/img
    chmod -R 664 /var/www/html/mails && chmod -R u+rwX,go+rX /var/www/html/mails
    chmod -R 664 /var/www/html/modules && chmod -R u+rwX,go+rX /var/www/html/modules
    chmod -R 664 /var/www/html/themes/hotel-reservation-theme/lang && chmod -R u+rwX,go+rX /var/www/html/themes/hotel-reservation-theme/lang
    chmod -R 664 /var/www/html/themes/hotel-reservation-theme/pdf/lang && chmod -R u+rwX,go+rX /var/www/html/themes/hotel-reservation-theme/pdf/lang
    chmod -R 664 /var/www/html/themes/hotel-reservation-theme/cache && chmod -R u+rwX,go+rX /var/www/html/themes/hotel-reservation-theme/cache
    chmod -R 664 /var/www/html/translations && chmod -R u+rwX,go+rX /var/www/html/translations
    chmod -R 664 /var/www/html/upload && chmod -R u+rwX,go+rX /var/www/html/upload
    chmod -R 664 /var/www/html/download && chmod -R u+rwX,go+rX /var/www/html/download
  fi

    exec apache2-foreground
fi

