<?php
require('../libs/Smarty.class.php');
class View
{
	private $smarty;   

	public function __construct()
	{
		$this->smarty = New Smarty;
	}

	
	/*public function MostrarCondiciones($condicion)
	{
		$this->smarty->assign('Condicion',$condicion);

	}*/	

	public function ImprimirPagCrearCondicion()
	{
		$this->smarty->display('crear_condicion.tpl');

	}

	/*public function ImprimirPagEditarCiudad($city)
	{
		$this->smarty->assign('Ciudad',$city);
		$this->smarty->display('editar_ciudad.tpl');

	}*/
}

?>