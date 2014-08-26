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
		
	//Obtiene las secciones y trae las categoria relacionadas a cada seccion	
	public function ObtenerSubcategoriaById($id_categoria_padre){
		
		$sql = "SELECT  *
				FROM  	categoria cat 
				WHERE   (id_categoria_padre = $id_categoria_padre) AND 
				(id_categoria <>$id_categoria_padre)";


		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

	
	public function ObtenerContenidoById($id_categoria_padre){	
		
		$sql="SELECT c.nombre_ciudad ,c.duracion, c.precio,i.path
			  FROM   categoria cat
			  JOIN   categoria_ciudad cd ON (cd.id_categoria = cat.id_categoria)
			  JOIN   ciudad c ON (c.id_ciudad = cd.id_ciudad)
			  JOIN   ciudad_imagen ci ON (ci.id_ciudad = c.id_ciudad)
			  JOIN   imagen i ON (i.id_imagen = ci.id_imagen)
			  WHERE  id_categoria_padre =$id_categoria_padre";

			$query = $this->conn->query($sql);
			return $query->fetchAll();	 
	}
}
?>