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
	
	//Obtiene todas las ciudaes (para luego mostrarlas en la tabla)
	public function ObtenerCiudad(){
		
		$sql = "SELECT id_ciudad,nombre_ciudad,duracion,precio,descripcion
		FROM ciudad";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}
	
	//Obtiene cantidad de ciudades
	public function CountCiudad(){
		
		$sql = "SELECT COUNT(id_ciudad) AS countcity
		FROM ciudad";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

	public function ObtenerTestimonio(){
		
		$sql = "SELECT e.id_persona,nombre_persona,c.condicion,fecha,texto 
		FROM experiencia e 
		JOIN comentario com ON (com.id_persona =e.id_persona) 
		JOIN condicion c ON (c.id_condicion =e.id_condicion)";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

	//Obtiene cantidad de comentarios
	public function CountComentario(){
		
		$sql = "SELECT COUNT(id_comentario) AS countcoment
		FROM comentario";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

	
}
?>