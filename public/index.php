<?php

require '../vendor/autoload.php';

$loader = (new \josegonzalez\Dotenv\Loader( '../.env'))
    ->parse()
    ->toEnv();
$settings = require '../config/settings.php';
$container = new \Slim\Container($settings);
$app = new \Slim\App($container);
$app->get('/', function (\Slim\Http\Request $req, \Slim\Http\Response $res, $args = []) {
    $res->write('hello world');

    return $res;
})->setName('home');
// Run app
try {
    $app->run();
} catch (\Throwable $e) {
    echo $e->getMessage();
}
