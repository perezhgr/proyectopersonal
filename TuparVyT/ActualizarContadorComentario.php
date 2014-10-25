<?php
include 'reporte_errores.php';
include './controllers/controller_actualizar_contador.php';
include './views/view_actualizar_contador.php';
include './models/model_actualizar_contador.php';

$model = new ModelActualizarComentario();
$view = new ViewActualizarComentario();
$controller = new ControllerActualizarComentario($model,$view);
$controller->ActualizarContadorComentario();	
?>

