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

			$countcity = $this->model->CountCiudad();
			$countcoment = $this->model->CountComentario();
			$countcondicion = $this->model->CountCondicion();
			$countuser = $this->model->CountUsuario();

			$this->view->MostrarCiudad($ciudad,$countcity);
			$this->view->MostrarTestimonio($comentario,$countcoment);
			$this->view->MostrarCondicion($condicion,$countcondicion);
			$this->view->MostrarUsuario($usuario,$countuser);

			$this->view->ImprimirPaginaAdmin($_SESSION["mail"]);
		}
		else
		{
			
			header('Location: login.php');
		}
	}

}
?>
