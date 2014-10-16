<?php
require('./libs/Smarty.class.php');
class View
{
  	  public $smarty;   
  
      public function __construct()
			{
				$this->smarty = New Smarty;
			}

	  public function MostrarCategorias($categorias){

	  	$this->smarty->assign("Categorias",$categorias);		
	  }

	  public function MostrarContenidoByCategoria($contenido3){
	  	$this->smarty->assign("Contenido",$contenido3);
	  }

	  public function ImprimirPagina(){
	  	$this->smarty->display("home.tpl");
	  }
}

?>