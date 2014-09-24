<?php
require('../libs/Smarty.class.php');
class View
{
	private $smarty;   

	public function __construct()
	{
		$this->smarty = New Smarty;
	}


	public function ImprimirPagCrearCondicion()
	{
		$this->smarty->display('crear_condicion.tpl');

	}


	public function ImprimirPagEditarCondicion($condicion)
	{
		$this->smarty->assign('Condicion',$condicion);
		$this->smarty->display('editar_condicion.tpl');

	}
}

?>