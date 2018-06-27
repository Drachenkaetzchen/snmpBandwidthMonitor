<?php
require("vendor/sskaje/mqtt/spMQTT.class.php");


require("config.php");

while (1) {
    $mqtt = new spMQTT($mqttHost);
    $mqtt->connect();

    foreach ($configs as $key => $config) {
        $value = snmpget($config["host"], $config["community"], $config["mib"]);

        $value = str_replace("Counter32: ", "", $value);

        if (array_key_exists("lastValue", $configs[$key])) {
            $diff = $value - $configs[$key]["lastValue"];

            $mqtt->publish($topicPrefix . $config["name"], round($diff / $interval, 2), 0, 1, 0, 1);
        }
        $configs[$key]["lastValue"] = $value;


    }
    $mqtt->disconnect();
    sleep(10);
}