<?php
include './controllers/controller_AM_comentario.php';
include './views/view_AM_comentario.php';
include './models/model_AM_comentario.php';

$model = new Model();
$view = new View();
$controller = new Controller($model,$view);

//Uso esta logica para poder imprimir un template u otro.

if(isset($_GET['id_ciudad'])) {
	$controller->ImprimirPagEditarComentario();
}
else{
	$controller->ImprimirPagCrearComentario();
}

?>
