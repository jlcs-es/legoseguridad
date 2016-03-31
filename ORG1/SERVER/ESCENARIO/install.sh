#!/bin/bash

###############################################################################
#
#   Congiguración de appserver, php-oauth y simplesamlphp
#
###############################################################################


apt-get install -y php5 php5-mysql php5-curl php5-gmp php5-sqlite php5-mcrypt
php5enmod mcrypt


cp php-oauth-saml-demo-master/vagrant/vhost-local.conf  /etc/apache2/mods-enabled
chmod 644 /etc/apache2/mods-enabled/vhost-local.conf

echo 'IncludeOptional mods-available/rewrite.load' | cat - /etc/apache2/apache2.conf > temp && mv temp /etc/apache2/apache2.conf

# cp -R php-oauth-saml-demo-master/appclient /var/www
cp -R php-oauth-saml-demo-master/appserver /var/www
cp -R php-oauth-saml-demo-master/simplesamlphp /var/www
cp -R php-oauth-saml-demo-master/php-oauth /var/www

chmod -R 757 /var/www/*

# cd /var/www/appclient
# curl -sS https://getcomposer.org/installer | php
# php composer.phar install

cd /var/www/appserver
curl -sS https://getcomposer.org/installer | php
php composer.phar install

cd /var/www/php-oauth
curl -sS https://getcomposer.org/installer | php
php composer.phar install

cd /var/www/simplesamlphp
curl -sS https://getcomposer.org/installer | php
sed 's/http\([^s].*\)googlecode/https\1googlecode/g' composer.json > composer2.json
sed 's/trunk@50/trunk/g' composer2.json > composer.json
rm composer2.json
php composer.phar update

cd /var/www/php-oauth
/var/www/php-oauth/docs/configure.sh


php /var/www/php-oauth/docs/initOAuthDatabase.php
#Revisar /var/www/php-oauth/config/oauth.ini para más configuraciones (linea authenticationMechanism=SspResourceOwner)

php /var/www/php-oauth/docs/registerClients.php /var/www/php-oauth/docs/myregistration.json
#Registrar scopes autorizados

ln -s /var/www/simplesamlphp/www/ /var/www/php-oauth/www/simplesaml



mv /etc/apache2/conf.d/gitweb /etc/apache2/mods-enabled
service apache2 reload
service apache2 restart

#TODO:
#Configurar simplesamlphp (ver trasparencias 11,...)
# /var/www/simplesamlphp/config/authsources.php
# /var/www/simplesamlphp/metadata/saml20-sp-remote.php
