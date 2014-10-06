<?php
class ControllerEditarUsuario
{
	private $view;
	private $model;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}
	
	public function EditarUsuario(){

		session_start();
		if(isset($_SESSION["mail"])){
			if (isset($_GET['id_usuario'])) {

				$this->model->EditarUsuario($_GET['id_usuario']);
				$this->view->MostrarUsuariosActualizados($this->model->ObtenerUsuario());
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
