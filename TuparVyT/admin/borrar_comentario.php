<?php
include '../reporte_errores.php';
include './controllers/controller_borrar_comentario.php';
include './views/view_borrar_comentario.php';
include './models/model_borrar_comentario.php';

$model = new ModelBorrarComentario();
$view = new ViewBorrarComentario();
$controller = new ControllerBorrarComentario($model,$view);

$controller->EliminarComentario();
?>