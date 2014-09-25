<?php
require('../libs/Smarty.class.php');
class ViewAMCondicion
{
	private $smarty;   

	public function __construct()
	{
		$this->smarty = New Smarty;
	}


	public function ImprimirPagCrearCondicion($mail)
	{
		$this->smarty->assign('Mail',$mail);
		$this->smarty->display('crear_condicion.tpl');

	}

	public function ImprimirPagEditarCondicion($condicion,$mail)
	{
		$this->smarty->assign('Mail',$mail);
		$this->smarty->assign('Condicion',$condicion);
		$this->smarty->display('editar_condicion.tpl');

	}
}

?>