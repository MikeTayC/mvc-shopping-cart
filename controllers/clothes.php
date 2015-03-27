<?php

class Clothes extends Controller
{
	function __construct() 
	{
		parent::__construct();
	}
	function index()
	{
		$this->view->render('clothing/index');
	}
}
