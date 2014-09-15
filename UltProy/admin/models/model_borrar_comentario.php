<?php
class Model
{
	private $conn;

	public function __construct(){
		//Configuración
		include('../configuracion.php');
		//Conexión
		include('../conexion.php');

	}

	public function EliminarComentario($id_comentario){
		
		$sql= "DELETE FROM comentario
				WHERE id_comentario = $id_comentario";				
		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}
}
?>