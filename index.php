<?php
use Src\Router;
use Src\Request;
use Database\QueryBuilder as QueryBuilder;

require'src/bootstrap.php';

/*
$query = new QueryBuilder;
foreach($query->selectAll() as $row)
{
	echo $row['id'];
}
*/



require Router::load(__DIR__.'/routes.php')->redirect(Request::url(), Request::method());

