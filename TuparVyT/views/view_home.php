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

	public function MostrarUsuario(){
		$this->smarty->assign();				
	}

	public function MostrarCiudades($ciudades){
		$this->smarty->assign("Ciudades",$ciudades);				
	}


	public function ImprimirHome1(){
		$this->smarty->display('home.tpl');

	}
	public function ImprimirHome($mail){
		$this->smarty->assign("Mail",$mail);				
		$this->smarty->display('home.tpl');

	}

	public function MensajeError($error){
		echo $error;
	}

}

?>