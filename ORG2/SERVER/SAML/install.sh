#!/bin/bash

apt-get -y install apache2
apt-get -y install simplesamlphp
ln -s /etc/simplesamlphp/apache.conf /etc/apache2/mods-enabled/simplesamlphp.conf

service apache2 restart
