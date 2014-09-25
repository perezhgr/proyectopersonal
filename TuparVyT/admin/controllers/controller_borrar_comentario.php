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
		
		session_start();
		if(isset($_SESSION["mail"]))
		{	
			if(isset($_GET['id_comentario'])) {
				$this->model->EliminarComentario($_GET['id_comentario']);
				$this->view->resultado();
			}
		}
		else
		{
			header('Location: login.php');
		}			
	}
}
?>

