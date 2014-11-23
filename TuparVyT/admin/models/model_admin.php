<?php
class ModelAdmin
{
	private $conn;

	public function __construct(){
		//Configuración
		include('../configuracion.php');
		//Conexión
		include('../conexion.php');

	}
	
	//OBTIENE TODAS LAS CIUDADES (PARA LUEGO MOSTRARLAS EN LA TABLA)
	public function ObtenerCiudad(){
		
		$sql = "SELECT id_ciudad,nombre_ciudad,duracion,precio
		FROM ciudad";


		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

	public function ObtenerTestimonio(){
		
		$sql = "SELECT com.id_comentario,u.nombre,c.condicion,texto,ci.nombre_ciudad 
		FROM usuario u
		JOIN comentario com ON (com.id_usuario =u.id_usuario) 
		JOIN condicion c ON (c.id_condicion =com.id_condicion)
        JOIN ciudad ci ON (ci.id_ciudad = com.id_ciudad)";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}


	public function ObtenerCondicion(){
		
		$sql = "SELECT *
		FROM condicion";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

	public function ObtenerUsuario(){
		
		$sql = "SELECT *
		FROM usuario";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}
	
}
?>