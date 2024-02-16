<?php

$request_uri = $_SERVER['REQUEST_URI'];
$domain = $_SERVER['SERVER_NAME'];

if ($request_uri === "/index.php" || $request_uri === "/index.htm" || preg_match("(//)", $request_uri)) {
    header("Location: /", true, 301);
    exit();
}

if (stristr($domain, ".local")) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    defined('YII_DEBUG') || define('YII_DEBUG', true);
    defined('YII_ENV') || define('YII_ENV', 'dev');
}

// регистрация загрузчика классов Composer
require __DIR__ . '/../vendor/autoload.php';
// подключение файла класса Yii
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

// загрузка конфигурации приложения
$config = require __DIR__ . '/../config/web.php';

function dd($a) {
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}
try {
    (new yii\web\Application($config))->run();
} catch (\yii\base\InvalidConfigException $e) {
}
