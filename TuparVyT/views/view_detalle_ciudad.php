<?php
require('./libs/Smarty.class.php');
class ViewDetalleCiudad
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

	public function ImprimirModalSinLeyendaDeRegistrarse($nombre){
		$this->smarty->assign("Nombre",$nombre);				
		$this->smarty->display('modalciudad.tpl');

	}

	public function ImprimirModal(){
		$this->smarty->display('modalciudad.tpl');

	}
}

?>