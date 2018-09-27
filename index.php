<?php

// $query = require 'bootstrap.php';
// $tasks = $query->selectAll('todos');
// require 'index.view.php';

// $database = require 'core/bootstrap.php';
// $router = new Router;
// require 'routes.php';
// $uri = trim($_SERVER['REQUEST_URI'], '/');
// require $router->direct($uri);

// $uri = trim($_SERVER['REQUEST_URI'], '/');
// require Router::load('routes.php')
// 	->direct($uri);

$database = require 'core/bootstrap.php';
require Router::load('routes.php')
	->direct(Request::uri());

die(var_dump($app));

?>