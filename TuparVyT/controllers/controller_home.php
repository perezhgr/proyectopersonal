	<?php
	session_start();
	class ControllerHome
	{
		private $model;
		private $view;

		public function __construct($model,$view) {
			$this->model = $model;
			$this->view = $view;
		}


		public function ImprimirHome(){

			if(isset($_POST["nombre"]))
			{
				$usuario['nombre'] = $_POST['nombre'] ;
				$usuario['mail'] = $_POST['mail'] ;
				$usuario['pass'] = md5($_POST['pass']);
				$usuario=$this->model->GrabarUsuario($usuario);
			}

			elseif(isset($_POST["mail"]))
			{
				$formulario["mail"] = $_POST["mail"];
				$formulario["pass"] = md5($_POST["pass"]);


				$user=$this->model->GetUsuario($formulario['mail']);
				$pass=$this->model->GetPass($formulario['pass']);

				if (empty($user)){
					$this->view->MensajeErrorUsuario("Error: Usuario inexistente.");			
				}

				elseif (empty($pass)) {
					$this->view->MensajeErrorPass("Error : Password Invalida.");
				}
				else{
					$_SESSION["nombre"]=$user[0]["nombre"];
						$this->view->ImprimirUsuarioLogueado($_SESSION["nombre"]);
					}		
			}

			$empresa=$this->model->ObtenerDescripcionEmpresa();
			$this->view->MostrarDescripcionEmpresa($empresa);
			$this->view->MostrarCiudades($this->model->ObtenerCiudades());

			$this->view->ImprimirHome();

		}
	}
	?>