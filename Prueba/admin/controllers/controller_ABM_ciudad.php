<?php
class Controller
{
	private $view;
	private $model;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}
	
	public function ImprimirPagCrearCiudad(){

		//Crear ciudad		
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

	public function ImprimirPagEditarCiudad(){

		if(isset($_GET['id_ciudad'])) {

			$city = $this->model->ObtenerCiudad($_GET['id_ciudad']);
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
	}

}
?>
