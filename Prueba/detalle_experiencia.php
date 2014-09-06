<?php
include './controllers/controller_detalle_experiencia.php';
include './views/view_detalle_experiencia.php';
include './models/model_detalle_experiencia.php';

$model = new Model();
$view = new View();
$controller = new Controller($model,$view);
$controller->ImprimirPagina();	
?>
