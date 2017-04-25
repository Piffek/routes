<?php
use Src\Router;

require_once 'src/bootstrap.php';

$router = new Router;

require 'routes.php';

require $router->redirect('contact');

