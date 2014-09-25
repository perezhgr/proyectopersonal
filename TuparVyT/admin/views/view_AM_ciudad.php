<?php
require('../libs/Smarty.class.php');
class ViewAMCiudad
{
	private $smarty;   

	public function __construct()
	{
		$this->smarty = New Smarty;
	}
	
	public function ImprimirPagCrearCiudad($mail)
	{
		$this->smarty->assign('Mail',$mail);
		$this->smarty->display('crear_ciudad.tpl');

	}

	public function ImprimirPagEditarCiudad($ciudad,$mail)
	{
		$this->smarty->assign('Mail',$mail);
		$this->smarty->assign('Ciudades',$ciudad);
		$this->smarty->display('editar_ciudad.tpl');

	}
}

?>