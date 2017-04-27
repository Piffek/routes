<?php 
namespace Src;
use Exception;
class Router
{
	protected $method = [];
	
	public static function load($file)
	{
		$router = new static;
		
		require $file;
		
		return $router;
	}
	
	public function get($url, $controller)
	{
		$this->method['GET'][$url] = $controller;
	}
	
	public function post($url, $controller)
	{
		$this->method['post'][$url] = $controller;
	}
	
	public function redirect($url, $request)
	{
		if(array_key_exists($url, $this->method[$request]))
		{
			return $this->method[$request][$url];
		}else 
		{
			throw new Exception('Nie ma takiej strony');
		}
	}
}

?>