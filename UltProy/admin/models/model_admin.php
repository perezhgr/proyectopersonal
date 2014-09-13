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
		
		$sql = "SELECT id_ciudad,nombre_ciudad,duracion,precio
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
		
		$sql = "SELECT com.id_comentario,u.nombre,c.condicion,texto
		FROM usuario u
		JOIN comentario com ON (com.id_usuario =u.id_usuario) 
		JOIN condicion c ON (c.id_condicion =com.id_condicion)";

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


	public function ObtenerCondicion(){
		
		$sql = "SELECT *
		FROM condicion";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

	public function CountCondicion(){
		
		$sql = "SELECT COUNT(id_condicion) AS countcondicion
		FROM condicion";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}	

	public function ObtenerUsuario(){
		
		$sql = "SELECT id_usuario,nombre,mail
		FROM usuario
		WHERE es_admin IS NULL";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

	public function CountUsuario(){
		
		$sql = "SELECT COUNT(id_usuario) AS countuser
		FROM usuario
		WHERE es_admin 	IS NULL";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

	
}
?>