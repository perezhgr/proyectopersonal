<?php
class ControllerLogin
{
	private $view;
	private $model;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}
	
	public function imprimirPagina(){
		{
			session_start();
			if(!isset($_SESSION["mail"]))
			{
				$this->view->imprimirPagina();
			}
			else
			{
				header('Location: admin.php');
			}
		}

	}
	
	public function loginUsuario($formulario)
	{
		$error = $this->verificarFormulario($formulario);
		if(!$error)
		{
			$user = $this->model->GetUsuario($formulario["mail"]);
			
			if(empty($user))
			{
				$this->view->MensajeError("Error: Usuario Inexistente");
			} 	
			if($user[0]["pass"] != md5($formulario["pass"]))
			{
				$this->view->MensajeError("Error: Password Inválida");
			}
			
			session_start();
			$_SESSION["mail"]=$formulario["mail"];
			echo "login.php";
			
		}
		else
		{
			$this->view->MensajeError($error);
		}
		
	}

	private function verificarFormulario($formulario)
	{
		if(!$this->verificaremail($formulario["mail"]))
			return "Error: Email Inválido";
		if(strlen($formulario["pass"])==0)
			return "Error: La password es vacía";
	}

	private function verificaremail($email){ 

		if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) {
 			return false;
		}
		else{
			return true;
		}
	}	
}
?>
