	<?php
	class ControllerHome
	{
		private $model;
		private $view;

		public function __construct($model,$view) {
			$this->model = $model;
			$this->view = $view;
		}


		private function ImprimirHome(){
			{
				session_start();
				if(!isset($_SESSION["mail"]))
				{
					$this->view->ImprimirHome1();
				}
				else
				{
					$this->view->ImprimirHome($_SESSION["mail"]);
				}
			}

		}


		public function Usuario(){
			
			//if(array_key_exists('nombre',$_POST)){

			$empresa=$this->model->ObtenerDescripcionEmpresa();
			$this->view->MostrarDescripcionEmpresa($empresa);
			$this->view->MostrarCiudades($this->model->ObtenerCiudades());

			/*if(isset($_POST['nombre'])){
				$usuario['nombre'] = $_POST['nombre'] ;
				$usuario['mail'] = $_POST['mail'] ;
				$usuario['pass'] = md5($_POST['pass']);
				$usuario=$this->model->GrabarUsuario($usuario);
				$this->view->MostrarUsuario();
			}*/
			if(isset($_SESSION['mail'])){
				if (isset($_POST['mail'])) {
					$formulario['mail'] = $_POST['mail'];
					$formulario['pass'] = md5($_POST['pass']);
					$this->loginUsuario($formulario);

					//$this->view->ImprimirHome($correo);
				}
			}
			else{
				$this->ImprimirHome();
			}
		}


		private function loginUsuario($formulario)
		{
			$error = $this->verificarFormulario($formulario);
			if(!$error)
			{
				$user = $this->model->BuscarUsuario($formulario["mail"]);

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
				echo "home.php";

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

	/*public function enviarMail(){

			if(isset($_POST['asunto'])){

				$subject = $_POST['asunto'];		
				//$message = '<html><body style="background: #eee;">';
				$message .= $_POST['texto'];
				//$message .= '</body></html>';
			}

			$to = 'perez.hgr@gmail.com';

			$headers = "From: tu-sitio@gmail.com \r\n";
			$headers .= "Reply-To: tu-mail@gmail.com\r\n";
			$headers .= "CC: alguien@gmail.com\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

			if(mail($to,$subject,$message,$headers))
				echo 'success';
			else
				echo 'error';
			}*/


			?>