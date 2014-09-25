<?php
include './controllers/controller_login.php';
include './views/view_login.php';
include './models/model_login.php';

$model = new Model();
$view = new View();
$controller = new Controller($model,$view);

if(isset($_POST["mail"]))
{
    $formulario["mail"] = $_POST["mail"];
	$formulario["pass"] = $_POST["pass"];
	$controller->loginUsuario($formulario);
}
else
{
	$controller->imprimirPagina();
}
?>
