<?php
class Controller
{
	private $view;
	private $model;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}
	
	public function imprimirPagina(){
		$this->view->imprimirPagina();

	}
	public function LoginAdmin($formulario){

				$error = $this->verificarFormulario($formulario);
				if(!$error)
				{
					$user = $this->model->GetUsuario($formulario["mail"]);

					if(empty($user))
					{
						$this->view->MensajeError("Error: Usuario Inexistente");
					} 	
					else if($user["pass"] != md5($formulario["pass"]))
					{
						$this->view->MensajeError("Error: Password Inválida");
					}
					else
					{

						$_SESSION["mail"]=$formulario["mail"];
						echo "admin.php";
					}
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
		if (!ereg("^([a-zA-Z0-9._]+)@([a-zA-Z0-9.-]+).([a-zA-Z]{2,4})$",$email)){ 
			return false; 
		} else { 
			return true; 
		} 
	}	
}
?>
