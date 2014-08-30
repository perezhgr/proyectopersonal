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

	  /*public function MostrarModal($detalle){
	  	$this->smarty->assign("Detalle",$detalle);
	  	$this->smarty->display("modal.tpl");
	  }	*/


	  public function MostrarContacto($contacto){
	  	$this->smarty->assign("Contacto",$contacto);
	  	$this->smarty->display("contacto.tpl");	  					
	  }

	  public function MostrarEmpresa($empresa){
	  	$this->smarty->assign("Empresa",$empresa);
	  	$this->smarty->display("empresa.tpl");	  					
	  }

	  public function MostrarPaquete($subcategoria,$paquete){
	  	$this->smarty->assign("Subcategoria",$subcategoria);
	  	$this->smarty->assign("Paquete",$paquete);
	  	$this->smarty->display("paquete.tpl");	  					
	  }

	  public function MostrarExperiencia($subcategoria,$imagen,$experiencia){
	  	$this->smarty->assign("Imagen",$imagen);
	  	$this->smarty->assign("Subcategoria",$subcategoria);
	  	$this->smarty->assign("Experiencia",$experiencia);
	  	$this->smarty->display("experiencia.tpl");	  					
	  }
}

?>