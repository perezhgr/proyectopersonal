<?php
include './controllers/controller_borrar_usuario.php';
include './views/view_borrar_usuario.php';
include './models/model_borrar_usuario.php';

$model = new Model();
$view = new View();
$controller = new Controller($model,$view);

$controller->EliminarUsuario();
?>
