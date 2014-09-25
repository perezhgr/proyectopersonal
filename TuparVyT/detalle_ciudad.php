<?php
include 'reporte_errores.php';
include './controllers/controller_detalle_ciudad.php';
include './views/view_detalle_ciudad.php';
include './models/model_detalle_ciudad.php';

$model = new ModelDetalleCiudad();
$view = new ViewDetalleCiudad();
$controller = new ControllerDetalleCiudad($model,$view);
$controller->ImprimirModal();	
?>

