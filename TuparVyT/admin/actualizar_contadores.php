<?php
include '../reporte_errores.php';
include './controllers/controller_actualizar_contadores.php';
include './views/view_actualizar_contadores.php';
include './models/model_actualizar_contadores.php';

$model = new ModelActualizarContadores();
$view = new ViewActualizarContadores();
$controller = new ControllerActualizarContadores($model,$view);

$controller->ActualizarContadores();
?>
