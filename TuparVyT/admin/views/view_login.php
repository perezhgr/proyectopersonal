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

	public function MensajeErrorAdmin($erroradmin){

		$this->smarty->assign('ErrorAdmin',$erroradmin);	
	}

	public function MensajeErrorPass($errorpass){
		$this->smarty->assign('ErrorPass',$errorpass);
	}
}

?>