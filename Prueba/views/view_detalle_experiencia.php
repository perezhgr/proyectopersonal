<?php
require('./libs/Smarty.class.php');
class View
{
	public $smarty;   

	public function __construct()
	{
		$this->smarty = New Smarty;
	}

	public function ImprimirHome(){
		$this->smarty->display('detalle_experiencia.tpl');

	}
}

?>