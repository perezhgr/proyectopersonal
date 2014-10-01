<?php
require('../libs/Smarty.class.php');
class ViewActualizarContadores
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
}

?>