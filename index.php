<?php

use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\RouteParser;

require_once "vendor/autoload.php";
session_start();

$router = new RouteCollector(new RouteParser());
$router->get('/',function(){
	echo 'Hello!';
});
$router->get('/about',function(){
	echo "about";
});

$dispatcher = new Dispatcher($router->getData());
$responce = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'],parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH));

echo $responce;
// I can not run index file please help me.
