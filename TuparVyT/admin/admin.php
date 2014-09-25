<?php
include '../reporte_errores.php';
include './controllers/controller_admin.php';
include './views/view_admin.php';
include './models/model_admin.php';

$model = new ModelAdmin();
$view = new ViewAdmin();
$controller = new ControllerAdmin($model,$view);
$controller->imprimirPagina();

?>
