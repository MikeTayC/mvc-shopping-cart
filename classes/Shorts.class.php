<?php

spl_autoload_register('class_autoloader');

class Shorts extends Clothing
{
	//sets type of clothing
	public $type = 'Shorts';
	
	// uses parent constructor and sets price based on selected size
	public function __construct($size, $quantity)
	{
		parent::__construct($size, $quantity);
		switch($this->size)
		{
			case 'Small': 
				$this->price = 15;
				break;
				
			case 'Medium':
				$this->price = 16;
				break;
		
			case 'Large':
				$this->price = 17;
				break;
		}
	}
}