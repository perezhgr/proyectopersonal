<?php
require('./libs/Smarty.class.php');
class ViewComentarioCiudad
{
	public $smarty;   

	public function __construct()
	{
		$this->smarty = New Smarty;
	}

	/*public function MostrarCondicionesDeViaje($condicion){
		$this->smarty->assign("Condicion",$condicion);				
	}*/
	
	public function MostrarComentario($comentario){
		$this->smarty->assign("Comentario",$comentario);				
	}

	public function ImprimirComentario(){
		$this->smarty->display('comentario.tpl');

	}
}

?>