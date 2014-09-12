<?php
class Model
{
	private $conn;

	public function __construct(){
		//Configuración
		include('../configuracion.php');
		//Conexión
		include('../conexion.php');

	$this->conn->beginTransaction();
	}
	


	public function ObtenerCondiciones(){
		
		$sql = "SELECT *
		FROM condicion";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

	public function ObtenerCiudades(){
		
		$sql = "SELECT *
		FROM ciudad";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

	public function InsertaTestimonio($testimonio){

		$sql = "INSERT INTO `experiencia` (`nombre_persona`,`fecha`,`id_condicion`,`id_ciudad`) 
		VALUES (:nombre_persona,:fecha,:id_condicion,:id_ciudad)";

		$resultado = $this->conn->prepare($sql);
		$resultado->bindValue(':nombre_persona',':fecha',':id_condicion',':id_ciudad', $experiencia, PDO::PARAM_STR); 
		$resultado->execute();
		//$resultado->execute(array(':nombre_persona'=>$testimonio["persona"],':fecha'=>$testimonio["fecha"],':id_condicion'=>$testimonio["id_condicion"],':id_ciudad'=>$testimonio["id_ciudad"]));
		//$resultado=$resultado->fetch(PDO::FETCH_ASSOC);
		$idPersona = $this->conn->lastInsertId();
		//$id_persona = $this->conn->lastInsertId();	

		$sql = "INSERT INTO `comentario` (`texto`,`id_persona`) 
		VALUES (:texto,:id_persona)";
		$resultado = $this->conn->prepare($sql);
		$resultado->bindValue(':texto', $comentario, PDO::PARAM_STR); 
		$resultado->bindValue(':id_persona', $idPersona, PDO::PARAM_INT); 
		$resultado->execute();

		$this->conn->commit(); 

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