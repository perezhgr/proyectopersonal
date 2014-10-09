<?php
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

			$this->view->MostrarComentario($this->model->ObtenerComentarioByIdCiudad($_GET['id_ciudad']));
			$this->view->MostrarCondicionFormularioComentario($this->model->ObtenerCondicion());			
			$this->view->MostrarIdCiudadFormularioComentario($this->model->ObtenerIdCiudad($_GET['id_ciudad']));			
		    
			if (isset($_POST['texto'])) {
				$comentario["texto"] = $_POST["texto"];	
				$comentario["id_usuario"] = $_POST["id_usuario"];
				$comentario["id_ciudad"] = $_POST["id_ciudad"];
				$comentario["id_condicion"] = $_POST["id_condicion"];			
				$this->model->InsertaComentario($comentario);
			}

			$this->view->ImprimirComentario();
		}

	}
}
?>