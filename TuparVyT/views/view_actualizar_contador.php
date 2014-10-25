<?php
require('./libs/Smarty.class.php');
class ViewActualizarComentario
{
	public $smarty;   

	public function __construct()
	{
		$this->smarty = New Smarty;
	}

	public function MostrarComentarioActualizado($count)
	{
		$this->smarty->assign('CountComent',$count);
		$this->smarty->display('contador_comentario.tpl');

	}	
}

?>