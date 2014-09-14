<?php
class Model
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
}
?>