
all: network test

network:
	sh network

saml:
	cd SAML; \
	sh install.sh; \
#TODO: revisar según idp sp 2x equipo

ssh:
	cp sshd_config /etc/ssh/sshd_config
	service ssh restart


test:
	sh test

.PHONY: all network test
