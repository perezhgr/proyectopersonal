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

		//$this->view->MostrarCover($this->model->ObtenerCover());
		//$this->view->MostrarMenu($this->model->ObtenerMenu());
		//$this->view->MostrarDescripcionEmpresa($this->model->ObtenerDescripcionEmpresa());
		//$this->view->MostrarCiudades($this->model->ObtenerCiudades());
		//$this->view->MostrarTestimonios($this->model->ObtenerTestimonios());	

		$this->view->ImprimirHome();
	}


}	
?>