<?php
require('./libs/Smarty.class.php');
class View
{
  	  public $smarty;   
  
      public function __construct()
			{
				$this->smarty = New Smarty;
			}

	  public function MostrarLugares($subcategoria,$contenido){
	  	$this->smarty->assign("Subcategorias",$subcategoria);
	  	$this->smarty->assign("Contenido",$contenido);	  	
	  	$this->smarty->display("lugaresdestacados.tpl");
	  }

	  public function MostrarContacto($contacto){
	  	$this->smarty->assign("Contacto",$contacto);
	  	$this->smarty->display("contacto.tpl");	  					
	  }

	  
}

?>