<?php
class Controller
{
	private $view;
	private $model;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}
	
	public function ImprimirPagCrearCondicion(){

		session_start();

		if (isset($_SESSION['mail'])){	
		//Crear condicion	
			if (isset($_POST['condicion'])) {

				$condicion["condicion"] = $_POST["condicion"];
				$this->model->InsertaCondicion($condicion);

			}
			$this->view->ImprimirPagCrearCondicion();
		}
		else
		{
			header('Location: login.php');
		}
	}

	public function ImprimirPagEditarCondicion(){

		session_start();

		if (isset($_SESSION['mail'])){
			if(isset($_GET['id_condicion'])) {

				$condicion = $this->model->ObtenerCondicionById($_GET['id_condicion']);
				$this->view->ImprimirPagEditarCondicion($condicion);

				if (isset($_POST['id_condicion'])) {

					$condicion["id_condicion"] = $_POST["id_condicion"];
					$condicion["condicion"] = $_POST["condicion"];
					$this->model->ActualizaCondicion($condicion);
				}			
			}
		}
		else
		{
			header('Location: login.php');
		}			
	}
}
?>
