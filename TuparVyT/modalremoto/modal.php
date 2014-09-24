<?php
include './controllers/cmodal.php';
include './views/vmodal.php';
include './models/mmodal.php';

$model = new Model();
$view = new View();
$controller = new Controller($model,$view);
$controller->ImprimirModal();	
//$controller->enviarMail();

?>
