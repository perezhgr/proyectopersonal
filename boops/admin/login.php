<?php
	include './models/model_login.php';
	include './views/view_login.php';
	include './controllers/controller_login.php';
	$model = new Model();
	$view = new View();
	$controller = new Controller($model, $view);

	if (isset($_POST["mail"]))
	{
		$controller->LoginUsuario($_POST);
	}
	else
	{
		$controller->ImprimirPagina();
	}
?>
