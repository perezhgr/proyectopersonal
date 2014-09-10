<?php
class ModelosDB{
	private $user='root';
	private $pass='mysqlpass';
	private $host='localhost';
	private $db='lplavisoft';
	protected $conn=null;
}

protected function connect(){
	$conn=null;

	try{

		$conn = new PDO("mysql:host=$this->host;dbname=$this->db",$this->user,$this->pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));		
		}
		catch(PDOException $pe)
		{
		  die('Error de conexion, Mensaje: ' -$pe->getMessage());
		}

}
?>