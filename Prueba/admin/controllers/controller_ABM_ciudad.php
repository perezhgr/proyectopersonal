<?php
class Controller
{
	private $view;
	private $model;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}
	
	public function imprimirPagina(){

		if (isset($_POST['ciudad'])) {
			$ciudad["ciudad"] = $_POST["ciudad"];
			$ciudad["pais"] = $_POST["pais"];
			$ciudad["duracion"] = $_POST["duracion"];
			$ciudad["precio"] = $_POST["precio"];
			$ciudad["descripcion"] = $_POST["descripcion"];

			$this->model->InsertaCiudad($ciudad);
			
		}
		$this->view->ImprimirPagCrearCiudad();
	}

}
?>
