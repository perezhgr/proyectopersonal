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
	

	public function ObtenerCondiciones(){
		
		$sql = "SELECT *
		FROM condicion";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

	public function InsertaTestimonio($testimonio){

		$sql = "INSERT INTO `ciudad` (`nombre_ciudad`,`nombre_pais`, `duracion`, `precio`,`descripcion`,`testimonio`) 
		VALUES (:nombre_ciudad,:nombre_pais,:duracion,:precio,:descripcion,:testimonio)";

		$resultado = $this->conn->prepare($sql);
		$resultado->execute(array(':nombre_ciudad'=>$ciudad["ciudad"],':nombre_pais'=>$ciudad["pais"],':duracion'=>$ciudad["duracion"],':precio'=>$ciudad["precio"],':descripcion'=>$ciudad["descripcion"],':testimonio'=>NULL));
		if(!$resultado){
			die(print($this->conn->errorInfo()[2]));
		}
		$resultado=$resultado->fetch(PDO::FETCH_ASSOC);
		return $resultado;
	}

	
	/*public function ObtenerCiudad($id_ciudad){
		
		$sql = "SELECT *
		FROM ciudad
		WHERE id_ciudad=$id_ciudad";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}*/

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