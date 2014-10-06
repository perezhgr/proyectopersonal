<?php
class ControllerAdmin
{
	private $view;
	private $model;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}
	
	public function imprimirPagina(){

		session_start();
		if(isset($_SESSION["mail"]))
		{
			$ciudad = $this->model->ObtenerCiudad();
			$comentario = $this->model->ObtenerTestimonio();		
			$condicion = $this->model->ObtenerCondicion();
			$usuario = $this->model->ObtenerUsuario();

			$this->view->MostrarCiudad($ciudad);
			$this->view->MostrarTestimonio($comentario);
			$this->view->MostrarCondicion($condicion);
			$this->view->MostrarUsuario($usuario);

			$this->view->ImprimirPaginaAdmin($_SESSION["mail"]);
		}
		else
		{
			
			header('Location: login.php');
		}
	}

}
?>
