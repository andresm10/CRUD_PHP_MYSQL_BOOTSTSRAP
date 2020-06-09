<?php
	class Conexion{
		private $host;
		private $user;
		private $password;
		private $dataBase;

		public function __construct(){
			$this->host     ="localhost"; //
			$this->user     ="root"; //Usuario Base de datos
			$this->password =""; //Contraseña de usuario de base de datos
			$this->dataBase ="crud"; //Nombre de la base de datos
		}

		public function conectarse(){
			$enlace = mysqli_connect($this->host, $this->user, $this->password, $this->dataBase);
			if($enlace){
				// echo "Conexion exitosa";	//si la conexion fue exitosa nos muestra este mensaje como prueba, despues lo puedes poner comentarios de nuevo: //
			}else{
				die('Error de Conexión (' . mysqli_connect_errno() . ') '.mysqli_connect_error());
			}
			return($enlace);
			// mysqli_close($enlace); //cierra la conexion a nuestra base de datos, un ounto de seguridad importante.
		}
	}