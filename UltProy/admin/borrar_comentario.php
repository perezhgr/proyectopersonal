<?php
include './controllers/controller_borrar_comentario.php';
include './views/view_borrar_comentario.php';
include './models/model_borrar_comentario.php';

$model = new Model();
$view = new View();
$controller = new Controller($model,$view);

$controller->EliminarComentario();
?>