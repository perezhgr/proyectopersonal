<?php
include '../reporte_errores.php';
include './controllers/controller_borrar_ciudad.php';
include './views/view_borrar_ciudad.php';
include './models/model_borrar_ciudad.php';

$model = new ModelBorrarCiudad();
$view = new ViewBorrarCiudad();
$controller = new ControllerBorrarCiudad($model,$view);

$controller->EliminarCiudad();
?>
