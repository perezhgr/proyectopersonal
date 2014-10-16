<?php
class ControllerGrabarComentario
{
	private $model;
	private $view;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}


	public function GrabarComentario(){

		if (isset($_POST['texto'])) {
			$comentario["texto"] = $_POST["texto"];	
			$comentario["id_usuario"] = $_POST["id_usuario"];
			$comentario["id_ciudad"] = $_POST["id_ciudad"];
			$comentario["id_condicion"] = $_POST["id_condicion"];
			
			$this->model->InsertaComentario($comentario);
		}
	}

	public function BuscarComentario(){

		if (isset($_GET['id_ciudad'])) {
			$this->view->MostrarUltimoComentarioInsertado($this->model->BuscarComentario($_GET['id_ciudad']));
		}
	}

	
}
?>