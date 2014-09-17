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

	/*public function ActualizaCiudad($ciudad){
		
		$sql= "UPDATE `ciudad` SET nombre_ciudad = '".$ciudad['ciudad']."' ,
		nombre_pais = '".$ciudad['pais']."' ,
		duracion = '".$ciudad['duracion']."' ,
		precio = '".$ciudad['precio']."' ,
		descripcion = '".$ciudad['descripcion']."' 
		WHERE id_ciudad =".$ciudad['id_ciudad'];
		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}*/


	/*public function EliminarCiudad($id_ciudad){
		
		$sql= "DELETE FROM ciudad
				WHERE id_ciudad = $id_ciudad";
		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}*/

}
?>