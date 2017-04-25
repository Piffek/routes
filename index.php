<?php
use Src\Router;

require_once 'src/bootstrap.php';

//$router = new Router;

//require 'routes.php';



//require $router->redirect($urls);


$routes = Router::load(__DIR__.'/routes.php');
$urls = trim($_SERVER['REQUEST_URI'],'/');
require $routes->redirect($urls);
