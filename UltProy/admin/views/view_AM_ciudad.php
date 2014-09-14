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

	public function ImprimirPagEditarCiudad($ciudades)
	{
		$this->smarty->assign('Ciudades',$ciudades);
		//$this->smarty->assign('id_ciudad',$city);
		$this->smarty->display('editar_ciudad.tpl');

	}
}

?>