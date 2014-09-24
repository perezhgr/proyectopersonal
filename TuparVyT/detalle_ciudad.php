<?php
include './controllers/controller_detalle_ciudad.php';
include './views/view_detalle_ciudad.php';
include './models/model_detalle_ciudad.php';

$model = new Model();
$view = new View();
$controller = new Controller($model,$view);
$controller->ImprimirModal();	
?>

