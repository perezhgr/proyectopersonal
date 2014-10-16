<?php
include 'reporte_errores.php';
include './controllers/controller_comentario_ciudad.php';
include './views/view_comentario_ciudad.php';
include './models/model_comentario_ciudad.php';

$model = new ModelComentarioCiudad();
$view = new ViewComentarioCiudad();
$controller = new ControllerComentarioCiudad($model,$view);
$controller->ImprimirComentario();	

?>

