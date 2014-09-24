<?php
class Controller
{
	private $view;
	private $model;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}
	
	public function EliminarUsuario(){
			
		if(isset($_GET['id_usuario'])) {
		$this->model->EliminarUsuario($_GET['id_usuario']);
		$this->view->resultado();
		}
	}			

}
?>

