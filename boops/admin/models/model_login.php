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
	public function GetUsuario($mail){
		$sql = "SELECT * FROM administrador WHERE mail = '$mail'";
		$resultado = $this->conn->prepare($sql);
		$resultado->execute();
		return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}	
}
?>