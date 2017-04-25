<?php 
namespace Src;
use Exception;
class Router
{
	protected $method = [];
	public function define($method)
	{
		$this->method = $method;
	}
	
	public function redirect($url)
	{
		if(array_key_exists($url, $this->method))
		{
			return $this->method[$url];
		}else 
		{
			throw new Exception('Nie ma takiej strony');
		}
	}
}

?>