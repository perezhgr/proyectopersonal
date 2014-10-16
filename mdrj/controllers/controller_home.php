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

		$this->view->MostrarSecciones($this->model->ObtenerSecciones());

		if(isset($_POST['id_seccion'])){

				$categorias = $this->model->GetCategoriaByIdSeccion($_POST['id_seccion']);
				$this->view->MostrarSecciones($categorias);

			}
	}


}	
?>