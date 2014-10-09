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

	public function imprimirPagina(){

	  if(isset($_POST["mail"]))
	  {
			$formulario["mail"] = $_POST["mail"];
			$formulario["pass"] = md5($_POST["pass"]);
		

		$user=$this->model->GetUsuario($formulario['mail']);
		$esadmi=$this->model->GetEsAdmin($formulario['mail']);
		$pass=$this->model->GetPass($formulario['pass']);


		if (empty($user)){
			$this->view->MensajeError("Error: Usuario inexistente.");			
		}
		elseif (empty($esadmi)) {
			$this->view->MensajeError("Error : Usuario sin permisos de administrador.");
		}
		elseif (empty($pass)) {
			$this->view->MensajeError("Error : Password Invalida.");
		}
		else{
			$_SESSION["mail"]=$formulario["mail"];
			header('Location: admin.php');
		}		
      }

		$this->view->imprimirPagina();
	}
}
?>
