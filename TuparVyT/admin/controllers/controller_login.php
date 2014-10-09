<?php
session_start();
class ControllerLogin
{
	private $view;
	private $model;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}

	public function loginUsuario($formulario){
		$user=$this->model->GetUsuario($formulario['mail']);
		$esadmi=$this->model->GetEsAdmin($formulario['mail']);
		$pass=$this->model->GetPass($formulario['pass']);

		if (empty($user)){
			$this->view->MensajeError("Error:Usuario inexistente");			
		}
		elseif (empty($esadmi)) {
			$this->view->MensajeError("Error: Usuario sin permisos de administrador");
		}
		elseif (empty($pass)) {
			$this->view->MensajeError("Error: Password Inválida");
		}
		else{
			$_SESSION["mail"]=$formulario["mail"];
			header('Location: admin.php');
		}		
	}

	public function imprimirPagina(){
		$this->view->imprimirPagina();
	}
}
?>
