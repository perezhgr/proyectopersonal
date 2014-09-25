<?php
include './controllers/controller_AM_condicion.php';
include './views/view_AM_condicion.php';
include './models/model_AM_condicion.php';

$model = new ModelAMCondicion();
$view = new ViewAMCondicion();
$controller = new ControllerAMCondicion($model,$view);

//Uso esta logica para poder imprimir un template u otro.

if(isset($_GET['id_condicion'])) {
	$controller->ImprimirPagEditarCondicion();
}
else{
	$controller->ImprimirPagCrearCondicion();
}

?>
