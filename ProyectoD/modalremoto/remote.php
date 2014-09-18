<?php
include './controllers/cremote.php';
include './views/vremote.php';
include './models/mremote.php';

$model = new Model();
$view = new View();
$controller = new Controller($model,$view);
$controller->ImprimirModal();	
//$controller->enviarMail();

?>
