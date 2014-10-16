<?php
class ModelHome
{
	private $conn;

	public function __construct(){
		//Configuración
		include('./configuracion.php');
		//Conexión
		include('./conexion.php');

	}		

	public function GrabarUsuario($usuario){
		
		$sql = "INSERT INTO `usuario` (`nombre`,`mail`,`pass`,`es_admin`) 
		VALUES (:nombre,:mail,:pass,:es_admin)";

		$resultado = $this->conn->prepare($sql);
		$resultado->execute(array(':nombre'=>$usuario["nombre"],':mail'=>$usuario["mail"],':pass'=>$usuario["pass"],':es_admin'=>NULL));

		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}

	public function ObtenerDescripcionEmpresa(){
		
		$sql = "SELECT *
		FROM   empresa ";

		$query = $this->conn->query($sql);
		return $query->fetchAll();

		//print_r($query->fetchAll());
		//die();
	}


	public function ObtenerCiudades(){
		
		$sql = "SELECT c.id_ciudad,nombre_ciudad,i.path
		FROM   ciudad c
		JOIN   imagen i ON (i.id_ciudad = c.id_ciudad)
		GROUP BY c.id_ciudad ";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}


	public function GetUsuario($mail){
		
		$sql = "SELECT *
		FROM usuario
		WHERE mail='$mail'";
		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}

	public function GetPass($pass){
		
		$sql = "SELECT *
		FROM usuario
		WHERE pass='$pass'";
		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}	
}
?>