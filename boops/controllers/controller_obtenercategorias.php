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
				$ciudad=$this->model->ObtenerCiudadById($_POST['id_ciudad']);
				$this->view->MostrarLugares($subcategoria,$contenido);
			}

			elseif ( $_GET['id_categoria_padre'] == 2 ) {

				$empresa=$this->model->ObtenerSubcategoriaById($_GET['id_categoria_padre']);				
				$this->view->MostrarEmpresa($empresa);
			}

			elseif ( $_GET['id_categoria_padre'] == 3 ) {

				$subcategoria=$this->model->ObtenerSubcategoriaById($_GET['id_categoria_padre']);
				$paquete=$this->model->ObtenerCiudadesByCategoria($_GET['id_categoria_padre']);
				$this->view->MostrarPaquete($subcategoria,$paquete);
			}
			
			elseif ( $_GET['id_categoria_padre'] == 6 ) {

				$subcategoria=$this->model->ObtenerSubcategoriaById($_GET['id_categoria_padre']);				
				$this->view->MostrarContacto($subcategoria);
			}
		
		}	
		//$this->view->ImprimirPagina();
	}
}

?>