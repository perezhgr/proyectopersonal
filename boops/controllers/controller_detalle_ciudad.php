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

		if ( isset($_GET['id_ciudad'])){
			if (isset($_GET['id_categoria_padre'])) {
				$ciudad=$this->model->ObtenerDetalleCiudadById($_GET['id_ciudad']);
				$imagen=$this->model->ObtenerImagenByIdCiudad($_GET['id_ciudad'],$_GET['id_categoria_padre']);			
				$this->view->MostrarDetalleCiudad($ciudad,$imagen);		  				
			}
		}	
		//$this->view->ImprimirPagina();
	}
}

?>