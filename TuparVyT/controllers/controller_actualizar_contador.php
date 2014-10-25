<?php
class ControllerActualizarComentario
{
	private $model;
	private $view;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}


	public function ActualizarContadorComentario(){

		if (isset($_GET['id_ciudad'])) {
			$this->view->MostrarComentarioActualizado($this->model->GetComentarioByIdCiudad($_GET['id_ciudad']));
		}
	}	
}
?>