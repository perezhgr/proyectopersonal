<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include './controllers/controller_admin.php';
include './views/view_admin.php';
include './models/model_admin.php';

$model = new Model();
$view = new View();
$controller = new Controller($model,$view);
$controller->imprimirPagina();

?>
