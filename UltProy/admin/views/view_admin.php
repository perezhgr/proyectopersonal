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

	public function MostrarCondicion($condicion,$countcondicion)
	{
		$this->smarty->assign("Condicion",$condicion);
		$this->smarty->assign("Countcondicion",$countcondicion);		

	}

	public function MostrarUsuario($usuario,$countuser)
	{
		$this->smarty->assign("Usuario",$usuario);
		$this->smarty->assign("Countuser",$countuser);		

	}	
	
	public function ImprimirPaginaAdmin()
	{
		$this->smarty->display('admin.tpl');

	}
}

?>