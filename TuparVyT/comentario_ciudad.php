<?php
include './controllers/controller_comentario_ciudad.php';
include './views/view_comentario_ciudad.php';
include './models/model_comentario_ciudad.php';

$model = new Model();
$view = new View();
$controller = new Controller($model,$view);
$controller->ImprimirComentario();	
?>

