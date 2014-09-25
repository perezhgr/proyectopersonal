<?php
require('../libs/Smarty.class.php');
class ViewBorrarUsuario
{
	private $smarty;   

	public function __construct()
	{
		$this->smarty = New Smarty;
	}
	
	public function resultado()
	{
		echo "borrado";

	}
}

?>