<?php
class ControllerBorrarComentario
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
				$this->view->MostrarComentariosActualizados($this->model->GetComentarios());
				$this->view->MostrarPanelActualizado();		
			}
		}
		else
		{
			header('Location: login.php');
		}			
	}
}
?>

