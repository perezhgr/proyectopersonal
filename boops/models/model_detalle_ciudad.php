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

	public function ObtenerDetalleCiudadById($id_ciudad){	
		
		$sql="SELECT nombre_ciudad,duracion,descripcion,precio
		FROM   ciudad
		WHERE  id_ciudad=$id_ciudad";
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

}
?>