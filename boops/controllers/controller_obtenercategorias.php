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

		if ( isset($_GET['id_categoria_padre']) ) {
			if ( $_GET['id_categoria_padre'] == 1 ) {

				$subcategoria=$this->model->ObtenerSubcategoriaById($_GET['id_categoria_padre']);
				$contenido=$this->model->ObtenerContenidoById($_GET['id_categoria_padre']);
				$this->view->MostrarLugares($subcategoria,$contenido);
			}
			
			elseif ( $_GET['id_categoria_padre'] == 6 ) {

				$subcategoria=$this->model->ObtenerSubcategoriaById($_GET['id_categoria_padre']);				
				$this->view->MostrarContacto($subcategoria);

			}
		
		}	
		//$this->view->ImprimirPagina();

	}



	

//	public function ObtenerConsejos($id_categoria){
		
//		$this->view->MostrarConsejos($this->model->ObtenerConsejosByIdCategoria($id_categoria));
//	}
}

?>