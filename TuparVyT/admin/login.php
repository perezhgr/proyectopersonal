<?php
include './controllers/controller_login.php';
include './views/view_login.php';
include './models/model_login.php';

$model = new ModelLogin();
$view = new ViewLogin();
$controller = new ControllerLogin($model,$view);

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
