<?php 
/*
 * 
 */
class Paginas extends Controlador{
	
	public function __construct()
	{
	
		//echo 'controlador de paginas';
	}

	public function index(){

		//$datos = ['titulo'=>'wed chalo'];
		$this->vista('paginas/inicio');

	}

 
}