<?php
include '../reporte_errores.php';
include './controllers/controller_AM_condicion.php';
include './views/view_AM_condicion.php';
include './models/model_AM_condicion.php';

$model = new ModelAMCondicion();
$view = new ViewAMCondicion();
$controller = new ControllerAMCondicion($model,$view);

//USO ESTA LOGICA PARA PODER IMPRIMIR UN TEMPLATE U OTRO.

if(isset($_GET['id_condicion'])) {
	$controller->ImprimirPagEditarCondicion();
}
else{
	$controller->ImprimirPagCrearCondicion();
}

?>
