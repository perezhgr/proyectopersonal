<?php
include './controllers/controller_borrar_condicion.php';
include './views/view_borrar_condicion.php';
include './models/model_borrar_condicion.php';

$model = new Model();
$view = new View();
$controller = new Controller($model,$view);

$controller->EliminarCondicion();
?>