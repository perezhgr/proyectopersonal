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
	
	public function InsertaCiudad($ciudad){

		$sql = "INSERT INTO `ciudad` (`nombre_ciudad`,`duracion`, `precio`) 
		VALUES (:nombre_ciudad,:duracion,:precio)";

		$resultado = $this->conn->prepare($sql);
		$resultado->execute(array(':nombre_ciudad'=>$ciudad["ciudad"],':duracion'=>$ciudad["duracion"],':precio'=>$ciudad["precio"]));
		if(!$resultado){
			die(print($this->conn->errorInfo()[2]));
		}
		$resultado=$resultado->fetch(PDO::FETCH_ASSOC);
		return $resultado;
	}

	
	public function ObtenerAllCiudades(){
		
		$sql = "SELECT nombre_ciudad
		FROM ciudad";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

	/*public function ObtenerCiudadById($id_ciudad){
		
		$sql = "SELECT id_ciudad
		FROM ciudad
		WHERE id_ciudad=$id_ciudad";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}*/


	public function ActualizaCiudad($ciudad){
		
		$sql= "UPDATE `ciudad` SET nombre_ciudad = '".$ciudad['ciudad']."' ,
		duracion = '".$ciudad['duracion']."' ,
		precio = '".$ciudad['precio']."' ,
		WHERE id_ciudad =".$ciudad['id_ciudad'];
		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}


	public function EliminarCiudad($id_ciudad){
		
		$sql= "DELETE FROM ciudad
		WHERE id_ciudad = $id_ciudad";
		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

}
?>