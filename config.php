<?php

$interval = 10;
$mqttHost = "tcp://nas.feli-home.felicitus.org:1883/";
$topicPrefix ="netstats/";

$configs = [
    [
        "host" => "172.22.117.254",
        "community" => "public",
        "mib" => "IF-MIB::ifOutOctets.4",
        "name" => "router_upstream"
    ],
    [
        "host" => "172.22.117.254",
        "community" => "public",
        "mib" => "IF-MIB::ifInOctets.4",
        "name" => "router_downstream"
    ],
    [
        "host" => "172.22.117.254",
        "community" => "public",
        "mib" => "IF-MIB::ifOutOctets.10",
        "name" => "dn42_upstream"
    ],
    [
        "host" => "172.22.117.254",
        "community" => "public",
        "mib" => "IF-MIB::ifInOctets.10",
        "name" => "dn42_downstream"
    ],
    [
        "host" => "172.22.117.254",
        "community" => "public",
        "mib" => "IF-MIB::ifOutOctets.9",
        "name" => "v6_upstream"
    ],
    [
        "host" => "172.22.117.254",
        "community" => "public",
        "mib" => "IF-MIB::ifInOctets.9",
        "name" => "v6_downstream"
    ]
];