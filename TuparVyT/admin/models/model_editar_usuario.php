<?php
class ModelEditarUsuario
{
	private $conn;

	public function __construct(){
		//Configuración
		include('../configuracion.php');
		//Conexión
		include('../conexion.php');

	}
	
	public function EditarUsuario($usuario){
		
		$sql= "UPDATE usuario SET `es_admin` = '1'
		 WHERE id_usuario = $usuario";
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