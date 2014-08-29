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
		
		$sql = "SELECT  nombre_categoria,descripcion
				FROM  	categoria 
				WHERE   (id_categoria <>$id_categoria_padre) AND (id_categoria_padre =$id_categoria_padre)";


		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

	public function ObtenerContenidoById($id_categoria_padre){	
		
		$sql="SELECT c.id_ciudad,c.nombre_ciudad ,c.duracion, c.precio,i.path
			  FROM   categoria cat
			  JOIN   ciudad c ON (c.id_categoria = cat.id_categoria)
			  JOIN   imagen i ON (i.id_ciudad = c.id_ciudad)
			  WHERE  id_categoria_padre =$id_categoria_padre";

			$query = $this->conn->query($sql);
			return $query->fetchAll();	 
	}

		public function ObtenerCiudadesByCategoria($id_categoria_padre){	
		
		$sql="SELECT c.id_ciudad,c.nombre_ciudad ,c.duracion, c.precio
			  FROM   categoria cat
			  JOIN   ciudad c ON (c.id_categoria = cat.id_categoria)
			  WHERE  id_categoria_padre =$id_categoria_padre";

			$query = $this->conn->query($sql);
			return $query->fetchAll();	 
	}

	public function ObtenerCiudadById($id_ciudad){	
		
		$sql="SELECT id_ciudad,nombre_ciudad ,duracion,precio
			  FROM   ciudad
			  WHERE  id_ciudad =$id_ciudad";

			$query = $this->conn->query($sql);
			return $query->fetchAll();	 
	}
}
?>