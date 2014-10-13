<?php
session_start();
class ControllerDetalleCiudad
{
	private $model;
	private $view;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}


	public function ImprimirModal(){
	
		if (isset($_GET['id_ciudad'])) {

			$this->view->MostrarDetalleCiudad($this->model->ObtenerDetalleCiudad($_GET['id_ciudad']));
			$this->view->MostrarImgCiudad($this->model->ObtenerImgByIdCiudad($_GET['id_ciudad']));
		    $this->view->MostrarContadorComentario($this->model->ObtenerCountComentByIdCiudad($_GET['id_ciudad']));
		}
		
		if (isset($_SESSION['nombre'])) {
			$this->view->ImprimirModalSinLeyendaDeRegistrarse($_SESSION["nombre"]);	
		}
		else
			$this->view->ImprimirModal();
	}
}	
?>