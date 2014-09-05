<?php
require('./libs/Smarty.class.php');
class View
{
	public $smarty;   

	public function __construct()
	{
		$this->smarty = New Smarty;
	}

	
	/*public function MostrarCover($cover){

		$this->smarty->assign("Cover",$cover);				
	}*/

	public function MostrarMenu($menu){

		$this->smarty->assign("Menu",$menu);				
	}

	public function MostrarDescripcionEmpresa($empresa){
		$this->smarty->assign("Empresa",$empresa);				
	}

	public function MostrarCiudades($ciudades){
		$this->smarty->assign("Ciudades",$ciudades);				
	}

	public function ImprimirHome(){
		$this->smarty->display('home.tpl');

	}
}

?>