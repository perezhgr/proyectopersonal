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

	/*Obtiene los cover
	public function ObtenerCover(){
		
		$sql = "SELECT path
		FROM `imagen` 
		WHERE cover IS NOT NULL";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}*/

	//Obtiene el menu
	public function ObtenerMenu(){
		
		$sql = "SELECT * 
		FROM menu";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

	public function ObtenerDescripcionEmpresa(){
		
		$sql = "SELECT e.*,i.path
		FROM   empresa e
		JOIN   imagen i ON (i.id_empresa = e.id_empresa)";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
		
		//print_r($query->fetchAll());
		//die();
	}
}
?>