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
		
		$sql = "SELECT id_ciudad,nombre_ciudad,nombre_pais,duracion,precio,descripcion
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
		
		$sql = "SELECT id_comentario,nombre_persona,condicion,fecha,texto
		FROM experiencia e
		JOIN comentario c ON (c.id_persona =e.id_persona)";

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