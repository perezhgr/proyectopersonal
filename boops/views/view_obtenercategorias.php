<?php
require('./libs/Smarty.class.php');
class View
{
  	  public $smarty;   
  
      public function __construct()
			{
				$this->smarty = New Smarty;
			}

	  public function ImprimirPagina($categorias){
	  	$this->smarty->assign("Categorias",$categorias);
	  	$this->smarty->display("obtenercategorias.tpl");

	  }
}

?>