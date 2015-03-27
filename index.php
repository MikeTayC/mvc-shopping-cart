<?php
//autolader which loads objects
function class_autoloader($class)
{
	$filename = 'classes/' . $class . '.class.php';
	if (is_readable($filename))
	{
		require $filename;
	}
}
//autoloader loads files from libs folder for mvc
function libs_autoloader($class)
{
	$filename = 'libs/' . $class . '.php';
	if (is_readable($filename))
	{
		require $filename;
	}
}
//autoloader loads files from controller folder for mvc
function control_autoloader($class)
{
	$filename = 'controller/' . $class . '.php';
	if (is_readable($filename))
	{
		require $filename;
	}
}


spl_autoload_register('libs_autoloader');

require 'config/paths.php';
$app = new Bootstrap();
