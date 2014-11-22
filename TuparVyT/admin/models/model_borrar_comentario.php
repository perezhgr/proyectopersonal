<?php
class ModelBorrarComentario
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

	public function GetComentarios(){
		
		$sql= "SELECT com.id_comentario,u.nombre,c.condicion,texto,ci.nombre_ciudad 
		FROM usuario u
		JOIN comentario com ON (com.id_usuario =u.id_usuario) 
		JOIN condicion c ON (c.id_condicion =com.id_condicion)
        JOIN ciudad ci ON (ci.id_ciudad = com.id_ciudad)";
		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}
}

?>