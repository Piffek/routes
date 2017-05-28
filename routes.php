<?php 

	
	$router->get('contact','ContactController@index');
	
	$router->get('', 'IndexController@index');
	
	$router->get('about','AboutController@about');

?>