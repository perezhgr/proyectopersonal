<?php
include '../reporte_errores.php';
include './controllers/controller_borrar_condicion.php';
include './views/view_borrar_condicion.php';
include './models/model_borrar_condicion.php';

$model = new ModelBorrarCondicion();
$view = new ViewBorrarCondicion();
$controller = new ControllerBorrarCondicion($model,$view);

$controller->EliminarCondicion();
?>