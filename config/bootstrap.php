<?php

require  __DIR__ . '/../vendor/autoload.php';

$loader = (new \josegonzalez\Dotenv\Loader(  __DIR__ . '/../.env'))
    ->parse()
    ->toEnv();
$settings = require  __DIR__ . '/../config/settings.php';
$container = new \Slim\Container($settings);
$app = new \Slim\App($container);
