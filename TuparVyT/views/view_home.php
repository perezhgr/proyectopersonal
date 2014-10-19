<?php
require('./libs/Smarty.class.php');
class ViewHome
{
	public $smarty;   

	public function __construct()
	{
		$this->smarty = New Smarty;
	}

	public function MostrarDescripcionEmpresa($empresa){
		$this->smarty->assign("Empresa",$empresa);				
	}

	public function MostrarCiudades($ciudades){
		$this->smarty->assign("Ciudades",$ciudades);				
	}

	public function MensajeErrorUsuario($errorusuario){

		$this->smarty->assign('ErrorUsuario',$errorusuario);	
	}

	public function MensajeErrorPass($errorpass){
		$this->smarty->assign('ErrorPass',$errorpass);
	}

	public function ImprimirUsuarioLogueado($nombreusuariologueado){
		$this->smarty->assign("Nombre",$nombreusuariologueado);			

	}
	
	public function ImprimirUsuarioRegistrado($nombreusuarioregistrado){
		$this->smarty->assign("Nombre",$nombreusuarioregistrado);			

	}

	public function ImprimirHome(){
		$this->smarty->display('home.tpl');

	}

}

?>