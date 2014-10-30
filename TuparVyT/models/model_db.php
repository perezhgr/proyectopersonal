<?php
class modelodb
{
	private	$host = "localhost";
	private	$db = "tuparvt";
	private	$user = "root";
	private	$pass = "";

	protected $conn = null;

	protected function connect(){
		$conn = null;
		try{
			$conn = new PDO(
				"mysql:host=$this->host;dbname=$this->db",
				$this->user,
				$this->pass,
				array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\'')
				);
		}
		catch(PDOException $pe){
			die('Error de conexion, Mensaje: ' .$pe->getMessage());
		}
		$this->conn = $conn;
		return $conn;
	}

	public function connection(){
		if ($this->conn == null)
			$this->connect();
		return $this->conn;	
	}

	public function query($sql){
		$conn = $this->connection();
		$resultado = $conn->prepare($sql);
		$resultado->execute();
		if(!$resultado){
			die(print($conn->errorInfo()));
		}
		$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
		return $data;
	}
}
?>