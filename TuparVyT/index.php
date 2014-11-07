<?php
//phpinfo();
include 'reporte_errores.php';
include './controllers/controller_index.php';
include './views/view_index.php';
include './models/model_index.php';

$model = new ModelIndex();
$view = new ViewIndex();
$controller = new ControllerIndex($model,$view);
$controller->ImprimirIndex();	
//$controller->EnviarMail();

?>
