<?php
include 'reporte_errores.php';
include './controllers/controller_grabar_comentario.php';
include './views/view_grabar_comentario.php';
include './models/model_grabar_comentario.php';

$model = new ModelGrabarComentario();
$view = new ViewGrabarComentario();
$controller = new ControllerGrabarComentario($model,$view);
$controller->GrabarComentario();	
$controller->BuscarComentario();	

?>

