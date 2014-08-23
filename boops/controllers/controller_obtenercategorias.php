<?php
class Controller
{
	private $model;
	private $view;
 
    public function __construct($model,$view) {
        $this->model = $model;
		$this->view = $view;
    }

		
	public function ObtenerCategorias($id_seccion){

		$this->view->ImprimirPagina($this->model->ObtenerCategoriasById($id_seccion));
	}
}

?>