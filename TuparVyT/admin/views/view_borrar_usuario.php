<?php
require('../libs/Smarty.class.php');
class ViewBorrarUsuario
{
	private $smarty;   

	public function __construct()
	{
		$this->smarty = New Smarty;
	}
	
	public function MostrarUsuariosActualizados($usuario)
	{		
		$this->smarty->assign('Usuario',$usuario);
		
	}
	public function MostrarPanelActualizado()
	{		
		$this->smarty->display('panel_usuario.tpl');
	}
}

?>