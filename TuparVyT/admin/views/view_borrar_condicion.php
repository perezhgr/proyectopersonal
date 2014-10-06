<?php
require('../libs/Smarty.class.php');
class ViewBorrarCondicion
{
	private $smarty;   

	public function __construct()
	{
		$this->smarty = New Smarty;
	}
	
	public function MostrarCondicionesActualizadas($condicion)
	{
		$this->smarty->assign('Condicion',$condicion);

	}

	public function MostrarPanelActualizado()
	{		
		$this->smarty->display('panel_condicion.tpl');
	}
}

?>