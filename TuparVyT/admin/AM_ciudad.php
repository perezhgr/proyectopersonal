<?php
include '../reporte_errores.php';
include './controllers/controller_AM_ciudad.php';
include './views/view_AM_ciudad.php';
include './models/model_AM_ciudad.php';

$model = new ModelAMCiudad();
$view = new ViewAMCiudad();
$controller = new ControllerAMCiudad($model,$view);


// USO ESTA LOGICA PARA PODER IMPRIMIR UN TEMPLATE U OTRO.

if(isset($_GET['id_ciudad'])) {
	$controller->ImprimirPagEditarCiudad();
}
else{
	$controller->ImprimirPagCrearCiudad();
}

?>
