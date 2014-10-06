<?php
require('../libs/Smarty.class.php');
class ViewAdmin
{
	private $smarty;   

	public function __construct()
	{
		$this->smarty = New Smarty;
	}

	public function MostrarCiudad($ciudad)
	{
		$this->smarty->assign("Ciudad",$ciudad);	
	}

	public function MostrarTestimonio($testimonio)
	{
		$this->smarty->assign("Testimonio",$testimonio);
	}

	public function MostrarCondicion($condicion)
	{
		$this->smarty->assign("Condicion",$condicion);
	}

	public function MostrarUsuario($usuario)
	{
		$this->smarty->assign("Usuario",$usuario);
	}	
	
	public function ImprimirPaginaAdmin($mail)
	{	
		$this->smarty->assign("Mail",$mail);
		$this->smarty->display('admin.tpl');

	}
}

?>