<?php
class ControllerAMCiudad
{
	private $view;
	private $model;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}
	
	public function ImprimirPagCrearCiudad(){

		session_start();

		if (isset($_SESSION['mail'])){

		// CREAR CIUDAD CON 3 IMAGENES.
			if (isset($_POST['ciudad'])) {

				$ciudad["ciudad"] = $_POST["ciudad"];
				$ciudad["duracion"] = $_POST["duracion"];
				$ciudad["precio"] = $_POST["precio"];
				$ciudad["imagen0"] = $_FILES["imagen0"];
				$ciudad["imagen1"] = $_FILES["imagen1"];
				$ciudad["imagen2"] = $_FILES["imagen2"];
				$this->model->InsertaCiudad($ciudad);

			}
			$this->view->ImprimirPagCrearCiudad($_SESSION["mail"]);
		}
		else
		{
			header('Location: login.php');
		}
	}


	public function ImprimirPagEditarCiudad(){

		session_start();

		if (isset($_SESSION['mail'])){	

			if(isset($_GET['id_ciudad'])) {
				$ciudad=$this->model->ObtenerCiudadById($_GET['id_ciudad']);
				$this->view->ImprimirPagEditarCiudad($ciudad,$_SESSION["mail"]);
			}

			if (isset($_POST['id_ciudad'])) {				
				$ciudad["id_ciudad"] = $_POST["id_ciudad"];
				$ciudad["ciudad"] = $_POST["ciudad"];
				$ciudad["duracion"] = $_POST["duracion"];
				$ciudad["precio"] = $_POST["precio"];				
				$this->model->ActualizaCiudad($ciudad);
			}

		}
		else
		{
			header('Location: login.php');
		}
	}
}
?>
