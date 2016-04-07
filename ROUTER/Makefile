
all: network test

network:
	sh network

test:
	sh test
#	cd SNMP; sh test

ssh:
	cp sshd_config /etc/ssh/sshd_config
	service ssh restart


.PHONY: all network
