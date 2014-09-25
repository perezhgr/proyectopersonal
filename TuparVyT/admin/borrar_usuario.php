<?php
include '../reporte_errores.php';
include './controllers/controller_borrar_usuario.php';
include './views/view_borrar_usuario.php';
include './models/model_borrar_usuario.php';

$model = new ModelBorrarUsuario();
$view = new ViewBorrarUsuario();
$controller = new ControllerBorrarUsuario($model,$view);

$controller->EliminarUsuario();
?>
