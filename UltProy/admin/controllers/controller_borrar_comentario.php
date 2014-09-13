<?php
class Controller
{
	private $view;
	private $model;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}
	
	public function EliminarComentario(){
			
		if(isset($_GET['id_comentario'])) {
		$this->model->EliminarComentario($_GET['id_comentario']);
		$this->view->resultado();
		}
	}			

}
?>

