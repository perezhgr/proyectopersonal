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

		//Crear ciudad con 3 imagenes		
		if (isset($_POST['ciudad'])) {

			$ciudad["ciudad"] = $_POST["ciudad"];
			$ciudad["duracion"] = $_POST["duracion"];
			$ciudad["precio"] = $_POST["precio"];
			$ciudad["imagen0"] = $_FILES["imagen0"];
        	$ciudad["imagen1"] = $_FILES["imagen1"];
        	$ciudad["imagen2"] = $_FILES["imagen2"];
			$this->model->InsertaCiudad($ciudad);

		}
		$this->view->ImprimirPagCrearCiudad();
	}

	
	public function ImprimirPagEditarCiudad(){

		if(isset($_GET['id_ciudad'])) {
		$ciudad=$this->model->ObtenerCiudadById($_GET['id_ciudad']);
		$this->view->ImprimirPagEditarCiudad($ciudad);
		}

			if (isset($_POST['id_ciudad'])) {				
				$ciudad["id_ciudad"] = $_POST["id_ciudad"];
				$ciudad["ciudad"] = $_POST["ciudad"];
				$ciudad["duracion"] = $_POST["duracion"];
				$ciudad["precio"] = $_POST["precio"];				
				$this->model->ActualizaCiudad($ciudad);
			}
					
	}
}
?>
