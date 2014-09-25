<?php
class ModelAMCondicion
{
	private $conn;

	public function __construct(){
		//Configuración
		include('../configuracion.php');
		//Conexión
		include('../conexion.php');
	}
	
	public function InsertaCondicion($condicion){

		$sql = "INSERT INTO `condicion` (`condicion`) 
		VALUES (:condicion)";

		$resultado = $this->conn->prepare($sql);
		$resultado->execute(array(':condicion'=>$condicion["condicion"]));
		if(!$resultado){
			die(print($this->conn->errorInfo()[2]));
		}
		$resultado=$resultado->fetch(PDO::FETCH_ASSOC);

	}	

	
	public function ObtenerCondicionById($id_condicion){
		
		$sql = "SELECT *
		FROM condicion
		WHERE id_condicion=$id_condicion";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

	public function ActualizaCondicion($condicion){
		
		$sql= "UPDATE `condicion` SET condicion = '".$condicion['condicion']."' 
		WHERE id_condicion =".$condicion['id_condicion'];
		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}
}
?>