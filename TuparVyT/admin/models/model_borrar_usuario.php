<?php
class ModelBorrarUsuario
{
	private $conn;

	public function __construct(){
		//Configuración
		include('../configuracion.php');
		//Conexión
		include('../conexion.php');

	}

	public function EliminarUsuario($id_usuario){
		
		$sql= "DELETE FROM usuario
				WHERE id_usuario = $id_usuario";
		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

	public function ObtenerUsuario(){
		
		$sql = "SELECT *
		FROM usuario";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}
}
?>