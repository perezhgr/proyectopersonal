<?php
session_start();
class ControllerComentarioCiudad
{
	private $model;
	private $view;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}

	// Muestra un formulario para comentar y  
	//la lista de comentarios que tiene la ciudad. 
	public function ImprimirComentario(){

		if (isset($_GET['id_ciudad'])) {

			$this->view->MostrarComentario($this->model->ObtenerComentarioByIdCiudad($_GET['id_ciudad']),$this->model->ObtenerCountComentarioByIdCiudad($_GET['id_ciudad']));
			$this->view->MostrarCondicionFormularioComentario($this->model->ObtenerCondicion());			
			$this->view->MostrarIdCiudadFormularioComentario($this->model->ObtenerIdCiudad($_GET['id_ciudad']));			
		}

		if (isset($_SESSION['nombre'])) {
			$this->view->ImprimirComentarioSesion($_SESSION["nombre"],$_SESSION["id_usuario"]);	
		}
		else{
			$this->view->ImprimirComentario();	
		}
	}
}
?>