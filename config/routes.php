<?php
/**
 * @var Slim\App $app
 */

use Slim\Http\Request;
use Slim\Http\Response;
use Axm\TwitterDemo\Services\TwitterHoseService;

$app->get('/', function (Request $req, Response $res, $args = []) {
    $res->write('hello world');

    return $res;
})->setName('home');
$app->get('/go', function (Request $req, Response $res, $args = []) {

})->setName('home');