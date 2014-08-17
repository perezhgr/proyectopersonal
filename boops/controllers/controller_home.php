<?php
class Controller
{
	private $view;
	private $model;
 
    public function __construct($view,$model) {
        $this->model = $model;
		$this->view = $view;
    }

	
		public function BuscarSecciones(){	

			$secciones = $this->model->ObtenerSecciones();
			
			if($secciones){
					$this->view->MostrarSecciones($secciones);
			}			
		}
}	
?>