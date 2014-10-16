<?php
require('./libs/Smarty.class.php');
class View
{
  	  public $smarty;   
  
      public function __construct()
			{
				$this->smarty = New Smarty;
			}

	  public function MostrarLugaresDestacados($subcategoria,$lgdestacados){
	  	$this->smarty->assign("Subcategorias",$subcategoria);
	  	$this->smarty->assign("Lgdestacados",$lgdestacados);
	  	$this->smarty->display("lugaresdestacados.tpl");
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


	  public function MostrarExperiencia($subcategoria,$experiencia){
	  	//$this->smarty->assign("Imagen",$imagen);
	  	$this->smarty->assign("Subcategoria",$subcategoria);
	  	$this->smarty->assign("Experiencia",$experiencia);
	  	$this->smarty->display("experiencia.tpl");	  					
	  }


	  public function MostrarContacto($contacto){
	  	$this->smarty->assign("Contacto",$contacto);
	  	$this->smarty->display("contacto.tpl");	  					
	  }
}

?>