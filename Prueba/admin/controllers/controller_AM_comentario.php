<?php
class Controller
{
	private $view;
	private $model;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}
	
	public function ImprimirPagCrearTestimonio(){

		//Trae las condiciones para luego mostrarlas en el HTML
		$ciudad = $this->model->ObtenerCiudades();
		$condicion = $this->model->ObtenerCondiciones();

		$this->view->MostrarCiudades($ciudad);
		$this->view->MostrarCondiciones($condicion);		

		//Crear ciudad		
		if (isset($_POST['persona'])) {

			$testimonio["persona"] = $_POST["persona"];			
			$testimonio["fecha"] = $_POST["fecha"];
			$testimonio["id_condicion"] = $_POST["id_condicion"];
			$testimonio["id_ciudad"] = $_POST["id_ciudad"];
			$testimonio["comentario"] = $_POST["comentario"];

			$this->model->InsertaTestimonio($testimonio);

		}
		$this->view->ImprimirPagCrearTestimonio();
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
