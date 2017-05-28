<?php 
namespace Src;
use Exception;
class Router
{
	protected $router = [];
	
	public static function load($file)
	{
		$router = new static;
		
		require $file;
		
		return $router;
	}
	
	public function get($url, $controller)
	{
		
		$this->routes['GET'][$url] = $controller;
	}
	
	public function post($url, $controller)
	{
		$this->routes['POST'][$url] = $controller;
	}
	
	
	public function callMethod($controller, $method){
		
		$className = '\\Controllers\\' . $controller;
		return (new $className)->$method();
		
	}
	
	
	public function redirect($url, $request)
	{
		if(array_key_exists($url, $this->routes[$request]))
		{
			return $this->callMethod(
				
				...explode('@', $this->routes[$request][$url])
					
			);
		}
		throw new Exception('Nie zdefiniowano takiej strony');
	}
}

?>