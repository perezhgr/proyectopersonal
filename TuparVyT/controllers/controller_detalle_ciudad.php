<?php
class Controller
{
	private $model;
	private $view;

	public function __construct($model,$view) {
		$this->model = $model;
		$this->view = $view;
	}


	public function ImprimirModal(){
		//echo "<h1>HOLA MUNDO - CIUDAD</h1>";

		
		//if(array_key_exists('id_ciudad',$_GET)){
		if (isset($_GET['id_ciudad'])) {

			$this->view->MostrarDetalleCiudad($this->model->ObtenerDetalleCiudad($_GET['id_ciudad']));
			$this->view->MostrarImgCiudad($this->model->ObtenerImgByIdCiudad($_GET['id_ciudad']));
		    $this->view->MostrarContadorComentario($this->model->ObtenerCountComentByIdCiudad($_GET['id_ciudad']));

		    $this->view->ImprimirModal();
		}
	}
}	
?>