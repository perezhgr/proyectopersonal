<?php
class ModelDetalleCiudad
{
	private $conn;

	public function __construct(){
		//Configuración
		include('./configuracion.php');
		//Conexión
		include('./conexion.php');

	}		

	public function ObtenerDetalleCiudad($id_ciudad){
		
		$sql = "SELECT *
		FROM   ciudad WHERE id_ciudad=$id_ciudad";

		$query = $this->conn->query($sql);
		return $query->fetchAll();

		//print_r($query->fetchAll());
		//die();
	}

	
	public function ObtenerImgByIdCiudad($id_ciudad){
		
		$sql = "SELECT c.id_ciudad,nombre_ciudad,i.path,i.id_imagen
		FROM   ciudad c
		JOIN   imagen i ON (i.id_ciudad = c.id_ciudad)
		WHERE  c.id_ciudad =$id_ciudad ";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

	public function ObtenerCountComentByIdCiudad($id_ciudad){
		
		$sql = "SELECT COUNT(id_comentario) as comentarios
		FROM   comentario 
		WHERE  id_ciudad =$id_ciudad";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}
}
?>