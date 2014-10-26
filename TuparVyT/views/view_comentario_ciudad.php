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
	
	
	public function MostrarComentario($comentario,$contador){
		$this->smarty->assign("Comentario",$comentario);				
		$this->smarty->assign("Contador",$contador);	
	}
	
	public function ImprimirComentarioSesion($nombre,$id){
		$this->smarty->assign("Nombre",$nombre);					
		$this->smarty->assign("IdUsuario",$id);
		$this->smarty->display('comentario.tpl');

	}
	public function ImprimirComentario(){
		$this->smarty->display('comentario.tpl');

	}
}

?>