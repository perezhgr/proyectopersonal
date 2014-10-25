
<?php
class ModelActualizarComentario
{
	private $conn;

	public function __construct(){
		//Configuración
		include('./configuracion.php');
		//Conexión
		include('./conexion.php');

	}		

	public function GetComentarioByIdCiudad($id_ciudad)
	{
		
		$sql = "SELECT COUNT(id_comentario) AS countcoment
		FROM   comentario 
		WHERE  id_ciudad= $id_ciudad";

		$query = $this->conn->query($sql);
		return $query->fetchAll();
	}
}
?>