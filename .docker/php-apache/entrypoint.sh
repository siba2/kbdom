#!/bin/bash

(cd /var/www/app/; chmod 777 -R storage/)
(cd /var/www/app/; cp -n .env.example .env)
(cd /var/www/app/; composer install)
(cd /var/www/app/; npm install)
(cd /var/www/app/; npm update)
(cd /var/www/app/; npm run dev)
(cd /var/www/app/; php artisan key:generate)

source /etc/apache2/envvars
#tail -F /var/log/apache2/* &
exec apache2 -D FOREGROUND
