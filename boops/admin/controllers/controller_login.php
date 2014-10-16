<?php
class Controller
{
	private $model;
	private $view;
 
	public function __construct($model, $view)
	{
		$this->model = $model;
		$this->view = $view;
	}
	public function ImprimirPagina()
	{
		session_start();
		if (!isset($_SESSION["mail"]))
		{
			$this->view->imprimirPagina();
		}
		else
		{
			header('Location: admin.php');
		}
	}
	public function LoginUsuario($formulario)
	{
		$mail = $this->model->GetUsuario($formulario["mail"]);
	}
}
?>