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

	public function ObtenerComentarioByIdCiudad($id_ciudad){
		
		$sql = "SELECT u.nombre,c.texto,co.condicion 
		FROM   comentario c
		JOIN   ciudad ci ON (ci.id_ciudad = c.id_ciudad)
		JOIN   usuario u ON (u.id_usuario = c.id_usuario)
		JOIN   condicion co ON (co.id_condicion = c.id_condicion)
		WHERE  c.id_ciudad= $id_ciudad";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}
}
?>