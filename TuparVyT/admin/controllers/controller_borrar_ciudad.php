<?php
class Controller
{
	private $view;
	private $model;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}
	
	public function EliminarCiudad(){
			
		if(isset($_GET['id_ciudad'])) {
		$this->model->EliminarCiudad($_GET['id_ciudad']);
		$this->view->resultado();
		}
	}			

}
?>

