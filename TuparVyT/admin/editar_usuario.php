<?php
include '../reporte_errores.php';
include './controllers/controller_editar_usuario.php';
include './views/view_editar_usuario.php';
include './models/model_editar_usuario.php';

$model = new ModelEditarUsuario();
$view = new ViewEditarUsuario();
$controller = new ControllerEditarUsuario($model,$view);

$controller->EditarUsuario();

?>
