<?php
class Model
{
	private $conn;
    
    	public function __construct(){

		//Configuración
		include('./configuracion.php');
		//Conexión
		include('./conexion.php');

	}		
	//Obtiene las categorias
	public function ObtenerCategorias(){
		
		$sql = "SELECT id_categoria,nombre_categoria 
		FROM categoria 
		WHERE id_categoria=id_categoria_padre";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}
}
?>