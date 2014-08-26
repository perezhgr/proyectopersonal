<?php
	
	ini_set('default_charset','utf-8');
	include './controllers/controller_obtenercategorias.php';
	include './views/view_obtenercategorias.php';
	include './models/model_obtenercategorias.php';

	$model = new Model();
	$view = new View();
	$controller = new Controller($model,$view);

	if ( isset($_GET['id_categoria_padre']) ) {
		$controller->ObtenerSubcategorias($_GET['id_categoria_padre']);
	}
	//elseif (( isset($_POST['id_categoria']) )) {
	//	$controller->ObtenerConsejos($_POST['id_categoria']);
	//}
?>
