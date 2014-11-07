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

		$error_usuario = NULL;	
		$error_admin = NULL;	
		$error_pass = NULL;	
		$respuesta_ajax = NULL;

		if(isset($_POST["mail"]))
		{
			$formulario["mail"] = $_POST["mail"];
			$formulario["pass"] = md5($_POST["pass"]);


			$user=$this->model->GetUsuario($formulario['mail']);
			$esadmi=$this->model->GetEsAdmin($formulario['mail']);
			$pass=$this->model->GetPass($formulario['pass']);


			if (empty($user)){
				$error_usuario = FALSE;	
				echo json_encode(array('error_usuario'=>$error_usuario));
				exit();
			}
			elseif (empty($esadmi)) {
				$error_admin = FALSE;	
				echo json_encode(array('error_admin'=>$error_admin));
				exit();
			}
			elseif (empty($pass)) {
				$error_pass = FALSE;	
				echo json_encode(array('error_pass'=>$error_pass));
				exit();
			}
			else{
				$_SESSION["mail"]=$formulario["mail"];
				$respuesta_ajax = TRUE;
				echo json_encode(array('respuesta_ajax'=>$respuesta_ajax));
				exit();
			}
		}

		$this->view->imprimirPagina();		
	}

}
?>
