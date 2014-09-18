<?php
class Controller
{
	private $model;
	private $view;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}


	public function ImprimirModal(){

		$this->view->MostrarDetalleCiudad($this->model->ObtenerDetalleCiudad());
		$this->view->ImprimirModal();
	}
	
}	
?>