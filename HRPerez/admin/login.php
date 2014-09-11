<?php
include './controllers/controller_login.php';
include './views/view_login.php';
include './models/model_login.php';

$model = new Model();
$view = new View();
$controller = new Controller($model,$view);

session_start();
if (isset ($_POST["mail"])) 
{
	$formulario=$_POST["mail"];
	$formulario=$_POST["pass"];
	$controller->LoginAdmin($formulario);

}
else
{ 

	$controller->imprimirPagina();

}
?>
