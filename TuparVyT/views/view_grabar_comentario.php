<?php
require('./libs/Smarty.class.php');
class ViewGrabarComentario
{
	public $smarty;   

	public function __construct()
	{
		$this->smarty = New Smarty;
	}


	public function MostrarUltimoComentarioInsertado($comentario)
	{
		$this->smarty->assign('Comentario',$comentario);
		$this->smarty->display('ultimo_comentario.tpl');

	}

	public function MostrarCountComentarioActualizado($count)
	{
		$this->smarty->assign('CountComent',$count);
		$this->smarty->display('contador_comentario.tpl');

	}

	
}

?>