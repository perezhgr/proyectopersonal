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

	public function MostrarUsuario($usuario){
		$this->smarty->assign("Usuario",$usuario);				
	}

	public function MostrarCiudades($ciudades){
		$this->smarty->assign("Ciudades",$ciudades);				
	}

	public function ImprimirHome(){
		$this->smarty->display('home.tpl');

	}
}

?>