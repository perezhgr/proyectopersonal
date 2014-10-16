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
	//Obtiene las categorias
	public function ObtenerCategorias(){
		
		$sql = "SELECT * 
		FROM categoria";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}


	//Obtiene las subcategorias
	public function ObtenerContenidoByCategoria(){
		
		$sql = "SELECT c.*,s.*
		FROM  ciudad c
		JOIN  subcategoria_ciudad sc ON (sc.id_ciudad = c.id_ciudad)
		JOIN  subcategoria  s ON (s.id_subcategoria = sc.id_subcategoria)
		JOIN  categoria cat ON (cat.id_categoria = s.id_categoria)";


		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

	
	/*/Obtiene todas las ciudades 
	public function ObtenerCiudades(){	
		$sql="SELECT c.*
		FROM  ciudad c
		JOIN  subcategoria_ciudad sc ON (sc.id_ciudad = c.id_ciudad)
		JOIN  subcategoria  s ON (s.id_subcategoria = sc.id_subcategoria)";
		$query = $this->conn->query($sql);
		return $query->fetchAll();	 
	}*/
}
?>