<?php
class Controller
{
	private $model;
	private $view;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}


	public function ImprimirPagina(){

		if(isset($_GET['id_ciudad'])){
			$ciudad = $this->model->ObtenerDetalleCiudadById($_GET['id_ciudad']);
			$imagen = $this->model->ObtenerImagenByIdCiudad($_GET['id_ciudad']);
			$this->view->MostrarDetalleCiudad($ciudad);			
			$this->view->MostrarImagenCiudad($imagen);
		}

		$this->view->ImprimirHome();
	}


}	
?>