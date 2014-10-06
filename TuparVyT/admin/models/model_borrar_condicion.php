<?php
class ModelBorrarCondicion
{
	private $conn;

	public function __construct(){
		//Configuración
		include('../configuracion.php');
		//Conexión
		include('../conexion.php');

	}

	public function EliminarCondicion($id_condicion){
		
		$sql= "DELETE FROM condicion
				WHERE id_condicion = $id_condicion";				
		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

		public function ObtenerCondicion(){
		
		$sql = "SELECT *
		FROM condicion";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}
}
?>