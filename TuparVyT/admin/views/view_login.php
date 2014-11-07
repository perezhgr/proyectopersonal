<?php
require('../libs/Smarty.class.php');
class ViewLogin
{
	private $smarty;   

	public function __construct()
	{
		$this->smarty = New Smarty;
	}
	
	public function imprimirPagina()
	{
		$this->smarty->display('login.tpl');

	}

	public function MensajeErrorUsuario($errorusuario){

		$this->smarty->assign('ErrorUsuario',$errorusuario);	
	}

	public function ImprimirPaginaAdmin($mail)
	{	
		$this->smarty->assign("Mail",$mail);
		$this->smarty->display('admin.tpl');

	}
}

?>