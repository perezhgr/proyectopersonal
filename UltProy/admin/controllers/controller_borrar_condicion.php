<?php
class Controller
{
	private $view;
	private $model;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}
	
	public function EliminarCondicion(){
			
		if(isset($_GET['id_condicion'])) {
		$this->model->EliminarCondicion($_GET['id_condicion']);
		$this->view->resultado();
		}
	}			

}
?>

