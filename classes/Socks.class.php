<?php

spl_autoload_register('class_autoloader');

class Socks extends Clothing
{
	//set article of clothing
	public $type = 'Socks';
	
	/* 
	 * set discount with percentage
	 * socks and pants discount
	 */
	public $discount = .10;
	
	// uses parent constructor and sets price based on selected size
	public function __construct($size, $quantity)
	{
		parent::__construct($size, $quantity);
		
		switch($this->size)
		{
			case 'Small': 
				$this->price = 5;
				break;
				
			case 'Medium':
				$this->price = 6;
				break;
		
			case 'Large':
				$this->price = 7;
				break;
		}
	}
}