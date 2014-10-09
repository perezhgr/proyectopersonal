<?php
include '../reporte_errores.php';
include './controllers/controller_login.php';
include './views/view_login.php';
include './models/model_login.php';

$model = new ModelLogin();
$view = new ViewLogin();
$controller = new ControllerLogin($model,$view);
$controller->imprimirPagina();

?>
