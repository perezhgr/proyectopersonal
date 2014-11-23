<?php
class ModelAMCiudad
{
	private $conn;

	public function __construct(){
		//Configuración
		include('../configuracion.php');
		//Conexión
		include('../conexion.php');

	}
	
	//FUNCION QUE INSERTA UNA CIUDAD CON 3 IMAGENES.

	public function InsertaCiudad($ciudad){

		$sql = "INSERT INTO `ciudad` (`nombre_ciudad`,`duracion`, `precio`) 
		VALUES (:nombre_ciudad,:duracion,:precio)";

		$resultado = $this->conn->prepare($sql);
		$resultado->execute(array(':nombre_ciudad'=>$ciudad["ciudad"],':duracion'=>$ciudad["duracion"],':precio'=>$ciudad["precio"]));
		
		$id_ciudad= $this->conn->lastInsertId();		

		for ($i=0; $i<3 ; $i++) { 
			$this->insertarImagen($ciudad["imagen".$i],$id_ciudad);
		}

		if (!$resultado)
		{
			die(print($this->conn->errorInfo()[2]));
		}
		return $resultado->fetchAll(PDO::FETCH_ASSOC);
	}



	public function insertarImagen($imagen,$id_ciudad)
	{
		$allowed =  array('gif','png' ,'jpg','jpeg');
		if(!$imagen['error'])
		{
			$filename = $imagen['name'];
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			if(in_array($ext,$allowed) ) {
					$new_file_name = uniqid(); //Generar un uniq id para la foto.
					$path = 'img/'.$new_file_name.'.'.$ext;
					move_uploaded_file($imagen['tmp_name'],"../".$path );
					//echo 'Congratulations!  Your image was uploaded.';

					$sql = "INSERT INTO imagen (`path`,`id_ciudad`)  VALUES (:path,:id_ciudad)";

					$q = $this->conn->prepare($sql);
					$arreglo = array(':path'=>$path,':id_ciudad'=>$id_ciudad);
					$a=$q->execute($arreglo);					
				}
				else
				{
					echo 'Error: Invalid Extension';
				}
			}
			else
			{
				echo 'Error: Fatal Error';
			}		
		}



		public function ObtenerCiudadById($id_ciudad){

			$sql = "SELECT *
			FROM ciudad
			WHERE id_ciudad=$id_ciudad";

			$query = $this->conn->query($sql);
			return $query->fetchAll();
		}


		public function ActualizaCiudad($ciudad){

			$sql= "UPDATE `ciudad` SET nombre_ciudad = '".$ciudad['ciudad']."' ,
			duracion = '".$ciudad['duracion']."' ,
			precio = '".$ciudad['precio']."' 
			WHERE id_ciudad =".$ciudad['id_ciudad'];
			$query = $this->conn->query($sql);
			return $query->fetchAll();	
		}
	}
	?>