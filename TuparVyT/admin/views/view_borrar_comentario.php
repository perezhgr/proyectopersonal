<?php
require('../libs/Smarty.class.php');
class ViewBorrarComentario
{
	private $smarty;   

	public function __construct()
	{
		$this->smarty = New Smarty;
	}
	
	public function MostrarComentariosActualizados($comentario)
	{		
		$this->smarty->assign('Testimonio',$comentario);
		
	}
	public function MostrarPanelActualizado()
	{		
		$this->smarty->display('panel_comentario.tpl');
	}
}

?>