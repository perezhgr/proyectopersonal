<?php
class ControllerBorrarCondicion
{
	private $view;
	private $model;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}
	
	public function EliminarCondicion(){

		session_start();
		if(isset($_SESSION["mail"]))
		{		
			if(isset($_GET['id_condicion'])) {
				$this->model->EliminarCondicion($_GET['id_condicion']);
				$this->view->MostrarCondicionesActualizadas($this->model->ObtenerCondicion());
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

