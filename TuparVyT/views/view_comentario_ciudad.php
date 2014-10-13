<?php
require('./libs/Smarty.class.php');
class ViewComentarioCiudad
{
	public $smarty;   

	public function __construct()
	{
		$this->smarty = New Smarty;
	}

	public function MostrarCondicionFormularioComentario($condicion){
		$this->smarty->assign("Condicion",$condicion);				
	}


	public function MostrarIdCiudadFormularioComentario($IdCiudad){
		$this->smarty->assign("IdCiudad",$IdCiudad);				
	}
	
	
	public function MostrarComentario($comentario){
		$this->smarty->assign("Comentario",$comentario);				
	}

	
	public function ImprimirComentarioSesion($nombre){
		$this->smarty->assign("Nombre",$nombre);					
		$this->smarty->display('comentario.tpl');

	}
	public function ImprimirComentario(){
		$this->smarty->display('comentario.tpl');

	}
}

?>