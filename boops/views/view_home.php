<?php
require('./libs/Smarty.class.php');
class View
{
  	  public $smarty;   
  
      public function __construct()
			{
				$this->smarty = New Smarty;
			}

	  public function ImprimirPagina(){

		$this->smarty->display('home.tpl');
				
	  }

	  public function MostrarSecciones($secciones){

	  	$this->smarty->assign("Secciones",$secciones);
				
	  }
}

?>