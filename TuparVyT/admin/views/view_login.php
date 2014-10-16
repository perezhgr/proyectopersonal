<?php
require('../libs/Smarty.class.php');
class ViewLogin
{
	private $smarty;   

	public function __construct()
	{
		$this->smarty = New Smarty;
	}
	
	public function imprimirPagina()
	{
		$this->smarty->display('login.tpl');

	}

	public function MensajeError($error){
		echo $error;
	}

}

?>