#!/bin/bash

###############################################################################
#
#   Congiguración de appclient
#
###############################################################################


apt-get install -y php5 php5-mysql php5-curl php5-gmp php5-sqlite php5-mcrypt
php5enmod mcrypt


cp php-oauth-saml-demo-master/vagrant/vhost-local.conf  /etc/apache2/mods-enabled
cp php-oauth-saml-demo-master/vagrant/vhost-secure.conf.org32  /etc/apache2/mods-enabled
mkdir /etc/apache2/cert
cp ../../../CACERT/*.org32.* /etc/apache2/cert/
chmod 644 /etc/apache2/mods-enabled/vhost-local.conf
chmod 644 /etc/apache2/mods-enabled/vhost-secure.conf.org32


echo 'IncludeOptional mods-available/rewrite.load' | cat - /etc/apache2/apache2.conf > temp && mv temp /etc/apache2/apache2.conf

cp -R php-oauth-saml-demo-master/appclient /var/www

chmod -R 757 /var/www/*

cd /var/www/appclient
curl -sS https://getcomposer.org/installer | php
php composer.phar install



mv /etc/apache2/conf.d/gitweb /etc/apache2/mods-enabled
service apache2 reload
service apache2 restart
