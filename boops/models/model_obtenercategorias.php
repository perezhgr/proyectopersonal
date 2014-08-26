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
	public function ObtenerSubcategoriaById($id_categoria){
		
		$sql = "SELECT  nombre_categoria,descripcion
				FROM  	categoria 
				WHERE   (id_categoria_padre = id_categoria_padre) AND 
				(id_categoria <>id_categoria_padre)";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

	/*public function ObtenerConsejosByIdCategoria($id_categoria){
		
		$sql = "SELECT nombre_consejo,descripcion
				FROM   consejo";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}*/
}
?>