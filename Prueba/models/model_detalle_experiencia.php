<?php
class Model
{
	private $conn;
	
	public function __construct(){
		//Configuración
		include('./configuracion.php');
		//Conexión
		include('./conexion.php');

	}

	public function ObtenerCiudadById($id_ciudad){	
		
		$sql="SELECT id_ciudad,nombre_ciudad
		FROM   ciudad 
		WHERE  id_ciudad =$id_ciudad";
		$query = $this->conn->query($sql);
		return $query->fetchAll();	 
	}

	public function ObtenerImagenByIdCiudad($id_ciudad){	
		
		$sql="SELECT path
		FROM   imagen
		WHERE  id_ciudad=$id_ciudad";
		$query = $this->conn->query($sql);
		return $query->fetchAll();	 
	}

	public function ObtenerComentarioByIdCiudad($id_ciudad){	
		
		$sql="SELECT e.nombre_persona,e.fecha,e.condicion,c.texto
		FROM   ciudad ci 
		JOIN   experiencia e ON (e.id_ciudad =ci.id_ciudad)
		JOIN   comentario  c ON (c.id_persona = e.id_persona) 
		WHERE  ci.id_ciudad =$id_ciudad";
		$query = $this->conn->query($sql);
		return $query->fetchAll();	 
	}

	public function ObtenerCountComentarioByIdCiudad($id_ciudad){	
		
		$sql="SELECT COUNT(id_comentario) as cantidad
		FROM   comentario c
		JOIN   experiencia e ON (e.id_persona = c.id_persona)
		JOIN   ciudad  ci ON (ci.id_ciudad = e.id_ciudad) 
		WHERE  ci.id_ciudad =$id_ciudad";
		$query = $this->conn->query($sql);
		return $query->fetchAll();	 
	}
}
?>