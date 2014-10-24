<?php
require('./libs/Smarty.class.php');
class ViewIndex
{
	public $smarty;   

	public function __construct()
	{
		$this->smarty = New Smarty;
	}

	public function MostrarDescripcionEmpresa($empresa){
		$this->smarty->assign("Empresa",$empresa);				
	}

	public function MostrarCiudadesConImagenes($ciudades){
		$this->smarty->assign("Ciudades",$ciudades);				
	}
	public function MostrarCiudades($city){
		$this->smarty->assign("City",$city);				
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

	public function ImprimirIndex(){
		$this->smarty->display('index.tpl');

	}

}

?>