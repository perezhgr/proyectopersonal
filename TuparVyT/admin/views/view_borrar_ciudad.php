<?php
require('../libs/Smarty.class.php');
class ViewBorrarCiudad
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