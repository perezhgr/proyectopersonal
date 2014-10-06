<?php
class ControllerBorrarCiudad
{
	private $view;
	private $model;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}
	
	public function EliminarCiudad(){
		session_start();
		if(isset($_SESSION["mail"]))
		{
			if(isset($_GET['id_ciudad'])) {
				$this->model->EliminarCiudad($_GET['id_ciudad']);
				$this->view->MostrarCiudadesActualizadas($this->model->GetCiudades());
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

