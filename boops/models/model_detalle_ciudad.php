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

	public function ObtenerImagenByIdCiudad($id_ciudad,$id_categoria_padre){	
		
		$sql="SELECT i.path
		FROM   ciudad c
		JOIN   categoria_ciudad_imagen cci ON (cci.id_ciudad = c.id_ciudad)
		JOIN   imagen i ON (i.id_imagen = cci.id_imagen)
		WHERE  c.id_ciudad = $id_ciudad AND cci.id_categoria = $id_categoria_padre";
		$query = $this->conn->query($sql);
		return $query->fetchAll();	 
	}

}
?>