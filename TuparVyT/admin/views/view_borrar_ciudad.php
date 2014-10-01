<?php
require('../libs/Smarty.class.php');
class ViewBorrarCiudad
{
	private $smarty;   

	public function __construct()
	{
		$this->smarty = New Smarty;
	}
	
	public function MostrarCountCiudadesActualizadas($count)
	{		
		$this->smarty->assign('Countcity',$count);	
		$this->smarty->display('count.tpl');
	}
	
	public function MostrarCiudadesActualizadas($ciudad)
	{		
		$this->smarty->assign('Ciudad',$ciudad);
	}

	public function MostrarPanelActualizado()
	{		
		$this->smarty->display('panel_ciudad.tpl');
	}
}

?>