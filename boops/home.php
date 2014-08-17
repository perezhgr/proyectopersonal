<?php
	
	ini_set('default_charset','utf-8');
	include './controllers/controller_home.php';
	include './views/view_home.php';
	include './models/model_home.php';

	$model = new Model();
	$view = new View();
	$controller = new Controller($model,$view);
	$view->ImprimirPagina();
	$controller->BuscarSecciones();
?>
