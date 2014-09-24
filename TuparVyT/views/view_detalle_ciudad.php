<?php
require('./libs/Smarty.class.php');
class View
{
	public $smarty;   

	public function __construct()
	{
		$this->smarty = New Smarty;
	}

	public function MostrarDetalleCiudad($ciudad){
		$this->smarty->assign("Ciudad",$ciudad);				
	}

	public function MostrarImgCiudad($imagen){
		$this->smarty->assign("Imagen",$imagen);				
	}

	public function MostrarContadorComentario($comentario){
		$this->smarty->assign("Comentario",$comentario);				
	}

	public function ImprimirModal(){
		$this->smarty->display('modal.tpl');

	}
}

?>