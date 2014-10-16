<?php
require('../libs/Smarty.class.php');
class View
{
	private $smarty;   

	public function __construct()
	{
		$this->smarty = New Smarty;
	}

	public function MostrarCiudad($ciudad,$countcity)
	{
		$this->smarty->assign("Ciudad",$ciudad);	
		$this->smarty->assign("Countcity",$countcity);			

	}

	public function MostrarTestimonio($testimonio,$countcoment)
	{
		$this->smarty->assign("Testimonio",$testimonio);
		$this->smarty->assign("Countcoment",$countcoment);		

	}
	
	public function ImprimirPaginaAdmin()
	{
		$this->smarty->display('admin.tpl');

	}
}

?>