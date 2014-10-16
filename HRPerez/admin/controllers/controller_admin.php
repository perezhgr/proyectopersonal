<?php
class Controller
{
	private $view;
	private $model;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}
	
	public function imprimirPagina(){

		$ciudad = $this->model->ObtenerCiudad();
		$testimonio = $this->model->ObtenerTestimonio();		
		$countcity = $this->model->CountCiudad();
		$countcoment = $this->model->CountComentario();

		$this->view->MostrarCiudad($ciudad,$countcity);
		$this->view->MostrarTestimonio($testimonio,$countcoment);

		$this->view->ImprimirPaginaAdmin();
	}

}
?>
