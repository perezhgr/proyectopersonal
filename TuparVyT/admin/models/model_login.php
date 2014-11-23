<?php
class ModelLogin
{
	private $conn;

	public function __construct(){
		//Configuración
		include('../configuracion.php');
		//Conexión
		include('../conexion.php');

	}

	//OBTIENE EL USUARIO DEL ADMINISTRADOR

	public function GetUsuario($mail){
		
		$sql = "SELECT *
		FROM usuario
		WHERE mail='$mail'";
		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

public function GetEsAdmin($mail){
		
		$sql = "SELECT *
		FROM usuario
		WHERE mail='$mail' AND es_admin IS NOT NULL";
		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

	public function GetPass($pass){
		
		$sql = "SELECT *
		FROM usuario
		WHERE pass='$pass'";
		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}	
}
?>