#!/bin/sh

touch /etc/dnsmasq.hosts

echo "# We specify that we would like to load a file from" >> /etc/dnsmasq.conf
echo "# where hosts will be server - our spoofed hosts" >> /etc/dnsmasq.conf
echo "addn-hosts=/etc/dnsmasq.hosts" >> /etc/dnsmasq.conf
/etc/init.d/dnsmasq restart

