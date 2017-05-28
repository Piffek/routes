<?php
use Src\Router;
use Src\Request;
use Database\QueryBuilder as QueryBuilder;

require'src/bootstrap.php';
require Router::load(__DIR__.'/routes.php')->redirect(Request::url(), Request::method());
?>




