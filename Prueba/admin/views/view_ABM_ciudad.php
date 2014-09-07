<?php
require('../libs/Smarty.class.php');
class View
{
	private $smarty;   

	public function __construct()
	{
		$this->smarty = New Smarty;
	}
	
	public function ImprimirPagCrearCiudad()
	{
		$this->smarty->display('crear_ciudad.tpl');

	}
}

?>