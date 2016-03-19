#!/bin/bash
cp config.php /etc/simplesamlphp/config.php

#TODO: valor añadido a la nota: otros modos de autenticarse:
cp authsources.php /etc/simplesamlphp/authsources.php

cp saml20-idp-hosted.php /etc/simplesamlphp/metadata/saml20-idp-hosted.php
cp server.pem /etc/ssl/certs/server.pem
cp server.crt /etc/ssl/certs/server.crt
cp saml20-sq-remote.php /etc/simplesamlphp/metadata/saml20-sp-remote.php
touch /usr/share/simplesamlphp/modules/exampleauth/enable

