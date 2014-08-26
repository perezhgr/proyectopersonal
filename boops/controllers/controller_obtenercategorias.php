<?php
class Controller
{
	private $model;
	private $view;
 
    public function __construct($model,$view) {
        $this->model = $model;
		$this->view = $view;
    }

		
	public function ObtenerSubcategorias($id_categoria){

		$this->view->ImprimirPagina($this->model->ObtenerSubcategoriaById($id_categoria));
	}

//	public function ObtenerConsejos($id_categoria){
		
//		$this->view->MostrarConsejos($this->model->ObtenerConsejosByIdCategoria($id_categoria));
//	}
}

?>