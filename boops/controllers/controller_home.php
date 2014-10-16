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

		$categorias=$this->model->ObtenerCategorias();
		$this->view->MostrarCategorias($categorias);

		if(isset($_GET['id_categoria']) ){

			if($_GET['id_categoria']== 2){
				$contenido3 = $this->model->ObtenerContenidoByCategoria();
				$this->view->MostrarContenidoByCategoria($contenido3);
			}
		}
		$this->view->ImprimirPagina();
	}
}
?>