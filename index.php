<?php
use Src\Router;
use Src\Request;

require_once 'src/bootstrap.php';

//$router = new Router;

//require 'routes.php';



//require $router->redirect($urls);


require Router::load(__DIR__.'/routes.php')->redirect(Request::url());

