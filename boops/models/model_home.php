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
		
	public function ObtenerSecciones(){
		
		$sql = "SELECT nombre_seccion
				FROM seccion ";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}
}
?>