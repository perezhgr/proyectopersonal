<?php
include './controllers/controller_editar_usuario.php';
include './views/view_editar_usuario.php';
include './models/model_editar_usuario.php';

$model = new Model();
$view = new View();
$controller = new Controller($model,$view);
$controller->EditarUsuario();

?>
