<?php
require('./libs/Smarty.class.php');
class View
{
	public $smarty;   

	public function __construct()
	{
		$this->smarty = New Smarty;
	}

	public function MostrarComentario($comentario){
		$this->smarty->assign("Comentario",$comentario);				
	}

	public function ImprimirComentario(){
		$this->smarty->display('comentario.tpl');

	}
}

?>