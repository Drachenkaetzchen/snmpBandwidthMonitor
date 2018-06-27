# Extremely simple SNMP Bandwidth to MQTT Monitor

Retrieves the sent and received interface octets via SNMP, calculates the bandwidth and publishes it via MQTT.

This is an one hour hack and it may or may not work for you.

This script is supposed to run in a screen and never terminates (unless Ctrl+C of course).

# Installation

Install composer and run `composer install` 

# How to find the interface offset:

`snmpwalk -v1 -c public your_snmpserver |grep -i ifdescr`

