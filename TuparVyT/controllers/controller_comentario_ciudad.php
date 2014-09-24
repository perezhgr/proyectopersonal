<?php
class Controller
{
	private $model;
	private $view;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}


	public function ImprimirComentario(){

		$this->view->MostrarCondicionesDeViaje($this->model->ObtenerCondiciones());
		if (isset($_GET['id_ciudad'])) {

			$this->view->MostrarComentario($this->model->ObtenerComentarioByIdCiudad($_GET['id_ciudad']));
		    $this->view->ImprimirComentario();
		}

	}
}	
?>