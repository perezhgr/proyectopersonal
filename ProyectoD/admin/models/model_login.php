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
	//Obtiene el usuario del administrador
	public function GetUsuario($mail){
		
		$sql = "SELECT mail,pass 
		FROM administrador
		WHERE mail=$mail";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}
}
?>