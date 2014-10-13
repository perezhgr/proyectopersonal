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

		$sql = "INSERT INTO `tuparvt`.`comentario` (`texto`,`id_usuario`, `id_ciudad`, `id_condicion`) 
		VALUES (:texto,:id_usuario,:id_ciudad,id_condicion)";

		$resultado = $this->conn->prepare($sql);
		$resultado->execute(array(':texto'=>'aa',':id_usuario'=>2,':id_ciudad'=>63,':id_condicion'=>218));

/*		$sql = "INSERT INTO  `autosbd`.`consulta` (`nombre` ,`email` ,`telefono` ,`texto`,`id_auto`) VALUES ( :nombre, :email, :telefono, :texto, :id_auto)";
		$q = $this->conn->prepare($sql);
		$q->execute(array(':nombre'=>$consulta["nombre"],':email'=>$consulta["email"],':telefono'=>$consulta["telefono"],':texto'=>$consulta["texto"],':id_auto'=>$consulta["id_auto"]));
*/
	}
}
?>