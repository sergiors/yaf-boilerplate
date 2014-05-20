<?php

define('APP_PATH', dirname(__DIR__));

require APP_PATH . '/vendor/autoload.php';

$app = new \Yaf_Application(APP_PATH . '/conf/app.ini');
$app->bootstrap()->run();
