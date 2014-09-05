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

	//Obtiene los lugares destacados que pertenecen a la categoria 1.
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
		
		$sql="SELECT c.id_ciudad,c.id_ciudad,c.nombre_ciudad ,c.duracion, c.precio
		FROM   categoria cat
		JOIN   ciudad c ON (c.id_categoria = cat.id_categoria)
		WHERE  id_categoria_padre =$id_categoria_padre";

		$query = $this->conn->query($sql);
		return $query->fetchAll();	 
	}	
	
	public function ObtenerImgsByCategoria($id_categoria_padre){	
		
		$sql="SELECT i.id_imagen,i.path,ci.nombre_ciudad,ci.id_ciudad
		FROM   imagen i
		JOIN   ciudad ci ON (ci.id_ciudad= i.id_ciudad)
		JOIN   categoria cat ON (cat.id_categoria = ci.id_categoria)
		WHERE  cat.id_categoria_padre = $id_categoria_padre";

		$query = $this->conn->query($sql);
		return $query->fetchAll();	 
	}

	public function ObtenerExperienciasByCiudad($id_categoria_padre){	
		
		$sql=" SELECT nombre_persona ,condicion, fecha,texto,nombre_ciudad
		FROM   experiencia e
		JOIN   comentario c ON (c.id_persona = e.id_persona)
		JOIN   ciudad ci ON (ci.id_ciudad= e.id_ciudad)
		JOIN   categoria cat ON (cat.id_categoria = ci.id_categoria)
        WHERE id_categoria_padre =$id_categoria_padre
        ORDER BY nombre_ciudad ASC";

		$query = $this->conn->query($sql);
		return $query->fetchAll();	 
	}
}
?>