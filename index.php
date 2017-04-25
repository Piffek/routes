<?php
use Src\Router;

require_once 'src/bootstrap.php';

$router = new Router;

require 'routes.php';

$urls = trim($_SERVER['REQUEST_URI'],'/');


require $router->redirect($urls);

