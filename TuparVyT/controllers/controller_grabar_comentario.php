<?php
session_start();
class ControllerGrabarComentario
{
	private $model;
	private $view;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}

		public function ImprimirComentario(){

			if (isset($_POST['texto'])) {
			$comentario["texto"] = $_POST["texto"];	
			$comentario["id_usuario"] = $_POST["id_usuario"];
			$comentario["id_ciudad"] = $_POST["id_ciudad"];
			$comentario["id_condicion"] = $_POST["id_condicion"];
			
			$this->model->InsertaComentario($comentario);
		}

			$this->view->MostrarComentario($this->model->ObtenerComentarioByIdCiudad($comentario["id_ciudad"]),$this->model->ObtenerCountComentarioByIdCiudad($comentario["id_ciudad"]));
			$this->view->MostrarCondicionFormularioComentario($this->model->ObtenerCondicion());			
			$this->view->MostrarIdCiudadFormularioComentario($this->model->ObtenerIdCiudad($comentario["id_ciudad"]));			
		

		if (isset($_SESSION['nombre'])) {
			$this->view->ImprimirComentarioSesion($_SESSION["nombre"],$_SESSION["id_usuario"]);	
		}
		else{
			$this->view->ImprimirComentario();	
		}
	}
}
?>