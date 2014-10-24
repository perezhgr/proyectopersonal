<?php
class ModelGrabarComentario
{
	private $conn;

	public function __construct(){
		//Configuración
		include('./configuracion.php');
		//Conexión
		include('./conexion.php');

	}		

	public function InsertaComentario($comentario){

		$sql = "INSERT INTO `comentario` (`texto`,`id_usuario`, `id_ciudad`, `id_condicion`) 
		VALUES (:texto,:id_usuario,:id_ciudad,:id_condicion)";

		$resultado = $this->conn->prepare($sql);
		$resultado->execute(array(':texto'=>$comentario["texto"],':id_usuario'=>$comentario["id_usuario"],':id_ciudad'=>$comentario["id_ciudad"],':id_condicion'=>$comentario["id_condicion"]));
		if(!$resultado){
			die(print($this->conn->errorInfo()[2]));
		}
		$resultado=$resultado->fetch(PDO::FETCH_ASSOC);
	}

	public function BuscarComentario($id_ciudad)
	{
		
		$sql = "SELECT DISTINCT u.nombre,c.texto,c.id_ciudad,co.condicion,c.id_comentario  
		FROM   comentario c
		JOIN   ciudad ci ON (ci.id_ciudad = c.id_ciudad)
		JOIN   usuario u ON (u.id_usuario = c.id_usuario)
		JOIN   condicion co ON (co.id_condicion = c.id_condicion)
		WHERE  c.id_ciudad= $id_ciudad	
        ORDER BY c.id_comentario DESC LIMIT 1";
		
		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}
	

		public function ObtenerCountComentarioActualizado($id_ciudad)
	{
		
		$sql = "SELECT COUNT(id_comentario) AS countcoments
		FROM   comentario 
		WHERE  id_ciudad= $id_ciudad";		
		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}


	
	
}
?>