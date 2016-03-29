
all: network test

network:
	sh network

saml:
	cd SAML; \
	sh install.sh; \
	sh sp.sh
#TODO: revisar según idp sp 2x equipo

escenario:
	cd ESCENARIO; \
	sh install.sh

ssh:
	cp sshd_config /etc/ssh/sshd_config
	service ssh restart


test:
	sh test

.PHONY: all network test
