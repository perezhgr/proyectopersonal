<?php
require('./libs/Smarty.class.php');
class View
{
  	  public $smarty;   
  
      public function __construct()
			{
				$this->smarty = New Smarty;
			}

	  public function MostrarDetalleCiudad($ciudad,$imagen){
	  	$this->smarty->assign("Ciudad",$ciudad);
	  	$this->smarty->assign("Imagen",$imagen);
	  	$this->smarty->display("detalleciudad.tpl");
	  }
}

?>