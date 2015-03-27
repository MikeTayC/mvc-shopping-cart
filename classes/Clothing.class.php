<?php

/*
 * Super class 
 */
 
class Clothing 
{
	
	//pants or socks or shorts or tshirt
	public $type;
	
	//can be small or medium or large, as decided by user
	public $size;
	
	//$price dependant on type and size
	public $price;
	
	//dependant on user input
	public $quantity;
	
	//dependant upon type
	public $discount = 0;
	
	//constuctor function includes arguments for size and quantity
	public function __construct($size, $quantity)
	{
		$this->size = 		$size;
		$this->quantity =	$quantity;
	}

	//returns discount not used
	public function getDiscount()
	{
		return $this->discount;
	}
	
	//returns price not used
	public function getPrice()
	{
		return $this->price - $this->discount;
	}
	
	//returns quantity, not used
	public function getQuantity()
	{
		return $this->quantity;
	}
	
	//returns total = (price - discount) * quantity
	public function getTotal()
	{
		return ($this->price - ($this->discount)*($this->price)) * $this->quantity;
	}
}