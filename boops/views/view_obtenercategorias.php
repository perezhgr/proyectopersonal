<?php
require('./libs/Smarty.class.php');
class View
{
  	  public $smarty;   
  
      public function __construct()
			{
				$this->smarty = New Smarty;
			}

	  
	  public function ImprimirPagina($subcategorias){
	  	$this->smarty->assign("Subcategorias",$subcategorias);
	  	$this->smarty->display("obtenercategorias.tpl");
	  }

	  
}

?>