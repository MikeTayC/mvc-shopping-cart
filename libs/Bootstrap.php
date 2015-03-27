<?php 

//autoloader
spl_autoload_register('control_autoloader');

class Bootstrap 
{
	function __construct()
	{
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = explode('/', $url);

		//print_r($url);
		if(empty($url[0]))
		{
			$controller = new Index();
			$controller->index();
			return false;
		}
		
		$file = 'controllers/' . $url[0] . '.php';
		
		if (file_exists($file))
		{
			require $file;
		}
		
		else
		{
			
			$controller = new Error();
			return false;
		}
		$controller = new $url[0];

		if(isset($url[2]))
		{
			$controller->{$url[1]}($url[2]);
			return false;
		}
		else 
		{
			if(isset($url[1]))
			{
				$controller->{$url[1]}();
				return false;
			}
			else
			{
				$controller->index();
			}
		}
	}
}