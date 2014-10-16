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
	
	//Obtiene las subcategorias de cada una de las categorias
	public function ObtenerSubcategoriaById($id_categoria_padre){
		
		$sql = "SELECT  *
		FROM  	categoria 
		WHERE   (id_categoria <>$id_categoria_padre) AND (id_categoria_padre =$id_categoria_padre)";


		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

	//Obtiene los lugares destacados que pertenecen a la categoria 1.
	public function ObtenerLugaresDestacados($id_categoria_padre){	
		
		$sql="SELECT c.id_ciudad,c.nombre_ciudad ,c.duracion, c.precio,i.path
		FROM   categoria cat
		JOIN   categoria_ciudad_imagen cci ON (cat.id_categoria = cci.id_categoria)
		JOIN   ciudad c ON (c.id_ciudad = cci.id_ciudad)
		JOIN   imagen i ON (i.id_imagen = cci.id_imagen)
		WHERE  id_categoria_padre = $id_categoria_padre";
		$query = $this->conn->query($sql);
		return $query->fetchAll();	 
	}

	public function ObtenerCiudades(){	
		
		$sql="SELECT  id_ciudad,nombre_ciudad ,duracion, precio
		FROM   ciudad c ";

		$query = $this->conn->query($sql);
		return $query->fetchAll();	 
	}

	public function ObtenerExperiencias(){	
		
		$sql=" SELECT  DISTINCT nombre_persona ,condicion, fecha,texto,nombre_ciudad
		FROM   experiencia e
		JOIN   comentario c ON (c.id_persona = e.id_persona)
		JOIN   ciudad ci ON (ci.id_ciudad= e.id_ciudad)
		JOIN   categoria_ciudad_imagen cci ON (cci.id_ciudad= ci.id_ciudad)
        JOIN   categoria cat ON (cat.id_categoria = cci.id_categoria)";

		$query = $this->conn->query($sql);
		return $query->fetchAll();	 
	}
}
?>