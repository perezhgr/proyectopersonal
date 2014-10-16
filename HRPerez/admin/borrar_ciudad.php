<?php
include './controllers/controller_borrar_ciudad.php';
include './views/view_borrar_ciudad.php';
include './models/model_borrar_ciudad.php';

$model = new Model();
$view = new View();
$controller = new Controller($model,$view);

$controller->EliminarCiudad();
?>
