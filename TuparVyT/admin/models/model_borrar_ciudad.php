<?php
class ModelBorrarCiudad
{
	private $conn;

	public function __construct(){
		//Configuración
		include('../configuracion.php');
		//Conexión
		include('../conexion.php');

	}

	public function EliminarCiudad($id_ciudad){
		
		$sql= "DELETE FROM ciudad
		WHERE id_ciudad = $id_ciudad";
		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}


	public function GetCiudades(){
		
		$sql= "SELECT *
		FROM ciudad";
		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

}
?>