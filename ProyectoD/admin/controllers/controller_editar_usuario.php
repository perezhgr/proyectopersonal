<?php
class Controller
{
	private $view;
	private $model;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}
	
	public function EditarUsuario(){

		if (isset($_GET['id_usuario'])) {

			$this->model->EditarUsuario($_GET['id_usuario']);
			$this->view->MostrarAlerta();
		}
	}
}
?>
