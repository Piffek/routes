<?php
use Src\Router;

require_once 'src/bootstrap.php';

$router = new Router;

require 'routes.php';

$urls = $_SERVER['REQUEST_METHOD'];


require $router->redirect('cost');

