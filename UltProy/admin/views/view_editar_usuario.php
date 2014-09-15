<?php
require('../libs/Smarty.class.php');
class View
{
	private $smarty;   

	public function __construct()
	{
		$this->smarty = New Smarty;
	}
	
	public function MostrarAlerta()
	{
		echo "usuario editado existosamente";
		//$this->smarty->display('alerta.tpl');			

	}
}

?>