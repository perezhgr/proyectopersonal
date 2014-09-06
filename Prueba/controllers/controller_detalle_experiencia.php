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

			$ciudad = $this->model->ObtenerCiudadById($_GET['id_ciudad']);			
			$imagen = $this->model->ObtenerImagenByIdCiudad($_GET['id_ciudad']);
			$comentario = $this->model->ObtenerComentarioByIdCiudad($_GET['id_ciudad']);
			$count = $this->model->ObtenerCountComentarioByIdCiudad($_GET['id_ciudad']);			

			$this->view->MostrarDetalleCiudad($ciudad);			
			$this->view->MostrarImagenCiudad($imagen);
			$this->view->MostrarComentarioCiudad($comentario,$count);
		}

		$this->view->ImprimirPagina();
	}


}	
?>