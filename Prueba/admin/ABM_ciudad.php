<?php
include './controllers/controller_ABM_ciudad.php';
include './views/view_ABM_ciudad.php';
include './models/model_ABM_ciudad.php';

$model = new Model();
$view = new View();
$controller = new Controller($model,$view);
$controller->imprimirPagina();

?>
