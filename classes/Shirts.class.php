<?php
spl_autoload_register('class_autoloader');

class Shirts extends Clothing
{
	//sets type of clothing
	public $type = 'Shirt';
	
	// uses parent constructor and sets price based on selected size
	public function __construct($size, $quantity)
	{
		parent::__construct($size, $quantity);
		switch($this->size)
		{
			case 'Small': 
				$this->price = 10;
				break;
				
			case 'Medium':
				$this->price = 11;
				break;
		
			case 'Large':
				$this->price = 12;
				break;
		}
	}
}