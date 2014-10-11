<?php
//phpinfo();
include 'reporte_errores.php';
include './controllers/controller_home.php';
include './views/view_home.php';
include './models/model_home.php';

$model = new ModelHome();
$view = new ViewHome();
$controller = new ControllerHome($model,$view);
$controller->ImprimirHome();	
//$controller->enviarMail();

?>
