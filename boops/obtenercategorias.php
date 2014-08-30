<?php
	include './controllers/controller_obtenercategorias.php';
	include './views/view_obtenercategorias.php';
	include './models/model_obtenercategorias.php';

	$model = new Model();
	$view = new View();
	$controller = new Controller($model,$view);

	$controller->ImprimirPagina();
?>
