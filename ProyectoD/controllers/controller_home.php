<?php
class Controller
{
	private $model;
	private $view;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}


	public function ImprimirPagina(){
		$empresa=$this->model->ObtenerDescripcionEmpresa();

		$this->view->MostrarDescripcionEmpresa($empresa);
		$this->view->MostrarCiudades($this->model->ObtenerCiudades());
		$this->view->ImprimirHome();
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


}	
?>