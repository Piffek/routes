<?php 

	
	$router->post('contact','controllers/ContactController.php');
	
	$router->get('', 'controllers/IndexController.php');
	
	$router->post('about','controllers/AboutController.php');

?>