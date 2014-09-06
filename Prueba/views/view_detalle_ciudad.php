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

	public function MostrarImagenCiudad($imagen){
		$this->smarty->assign("Imagen",$imagen);
	}

	public function ImprimirDetalleCiudad(){
		$this->smarty->display('detalle_ciudad.tpl');
	}
}

?>