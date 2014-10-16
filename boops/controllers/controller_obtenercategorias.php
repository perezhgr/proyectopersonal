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

		if ( isset($_POST['id_categoria_padre']) )  {
			if ( $_POST['id_categoria_padre'] == 1 ) {
					$subcategoria=$this->model->ObtenerSubcategoriaById($_POST['id_categoria_padre']);
					$lgdestacados=$this->model->ObtenerLugaresDestacados($_POST['id_categoria_padre']);
					$this->view->MostrarLugaresDestacados($subcategoria,$lgdestacados);
		  		}
			
			elseif ( $_POST['id_categoria_padre'] == 6 ) {

				$subcategoria=$this->model->ObtenerSubcategoriaById($_POST['id_categoria_padre']);				
				$this->view->MostrarContacto($subcategoria);
			}
		
		}	
		//$this->view->ImprimirPagina();
	}

//	public function MostrarDetalleCiudad($id_ciudad){
//		$this->view->MostrarDetalleCiudad();
//	}
}

?>