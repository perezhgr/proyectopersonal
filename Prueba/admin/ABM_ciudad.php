<?php
include './controllers/controller_ABM_ciudad.php';
include './views/view_ABM_ciudad.php';
include './models/model_ABM_ciudad.php';

$model = new Model();
$view = new View();
$controller = new Controller($model,$view);

//Uso esta logica para poder imprimir un template u otro.

if(isset($_GET['id_ciudad'])) {
	$controller->ImprimirPagEditarCiudad();
}
else{
	$controller->ImprimirPagCrearCiudad();
}		

?>
