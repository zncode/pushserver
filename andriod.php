<?php

ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
require_once("lib/JPush.php");

$br = '<br/>';
$app_key = '69c49cb8d8829d958f88312b';
$master_secret = '8221ea6aab8b0950e9c9cbd1';

// 初始化
$client = new JPush($app_key, $master_secret);

// 简单推送示例
$result = $client->push()
    ->setPlatform(array('android'))
    ->addRegistrationId(array('1507bfd3f7c6762611d'))
    ->setNotificationAlert('Hi, JPush test')
    ->send();

echo 'Result=' . json_encode($result) . $br;