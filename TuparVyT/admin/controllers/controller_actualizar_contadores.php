<?php
class ControllerActualizarContadores
{
	private $view;
	private $model;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}
	
	public function ActualizarContadores(){
		session_start();
		if(isset($_SESSION["mail"]))
		{
			if(isset($_GET['id_ciudad'])) {
				$this->view->MostrarCountCiudadesActualizadas($this->model->CountCiudad());
			}
		}
		else
		{
			header('Location: login.php');
		}			
	}
}
?>

