<?php
class ModelActualizarContadores
{
	private $conn;

	public function __construct(){
		//Configuración
		include('../configuracion.php');
		//Conexión
		include('../conexion.php');

	}

	public function CountCiudad(){
		
		$sql = "SELECT COUNT(id_ciudad) AS countcity
		FROM ciudad";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

}
?>