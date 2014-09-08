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

	public function ObtenerCiudades(){
		
		$sql = "SELECT *
		FROM ciudad";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

	public function InsertaTestimonio($testimonio){

		$sql = "INSERT INTO `autosbd`.`auto` (`id_usuario`, `id_marca`, `titulo`, `valor`, `descripcion`, `modelo`, `anio`)  VALUES (:id_usuario,:marca,:titulo,:valor,:descripcion,:modelo,:anio)";
		$q = $this->conn->prepare($sql);
		$a=$q->execute(array(':id_usuario'=>$id_usuario, ':marca'=>$auto["marca"], ':titulo'=>$auto["titulo"] ,':valor'=>$auto["valor"] ,':descripcion'=>$auto["descripcion"] ,':modelo'=>$auto["modelo"] ,':anio'=>$auto["anio"] ));
			

		$id_auto = $this->conn->lastInsertId();		


		$sql = "INSERT INTO `experiencia` (`nombre_persona`,`fecha`) 
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