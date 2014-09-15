<?php
class Controller
{
	private $view;
	private $model;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}
	
	public function ImprimirPagCrearCondicion(){

		//Crear condicion	
		if (isset($_POST['condicion'])) {

			$condicion["condicion"] = $_POST["condicion"];
			$this->model->InsertaCondicion($condicion);

		}
		$this->view->ImprimirPagCrearCondicion();
	}

/*	public function ImprimirPagEditarComentario(){

		if(isset($_GET['id_comentario'])) {

			$city = $this->model->Obtenercomentario($_GET['id_comentario']);
			$this->view->ImprimirPagEditarCiudad($city);

			if (isset($_POST['id_ciudad'])) {

				$ciudad["id_ciudad"] = $_POST["id_ciudad"];
				$ciudad["ciudad"] = $_POST["ciudad"];
				$ciudad["pais"] = $_POST["pais"];
				$ciudad["duracion"] = $_POST["duracion"];
				$ciudad["precio"] = $_POST["precio"];
				$ciudad["descripcion"] = $_POST["descripcion"];

				$this->model->ActualizaCiudad($ciudad);
			}			
		}			
	}*/
}
?>
