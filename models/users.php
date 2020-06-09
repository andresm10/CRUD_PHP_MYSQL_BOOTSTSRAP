<?php
	include dirname(__file__,2)."/config/conexion.php";
	/**
	*
	*/
	class Users
	{
		private $conn;
		private $link;

		function __construct()
		{
			$this->conn   = new Conexion();
			$this->link   = $this->conn->conectarse();
		}

		//Trae todos los usuarios registrados
		public function getUsers()
		{
			$query  ="SELECT * FROM users";
			$result =mysqli_query($this->link,$query);
			$data   =array();
			while ($data[]=mysqli_fetch_assoc($result));
			array_pop($data);
			return $data;
		}

		//Crea un nuevo usuario
		public function newUser($data){
			$query  ="INSERT INTO users (name, last_name, email) VALUES ('".$data['name']."','".$data['last_name']."','".$data['email']."')";
			$result =mysqli_query($this->link,$query);
			if(mysqli_affected_rows($this->link)>0){
				return true;
			}else{
				return false;
			}
		}

		//Obtiene el usuario por id
		public function getUserById($id=NULL){
			if(!empty($id)){
				$query  ="SELECT * FROM users WHERE id=".$id;
				$result =mysqli_query($this->link,$query);
				$data   =array();
				while ($data[]=mysqli_fetch_assoc($result));
				array_pop($data);
				return $data;
			}else{
				return false;
			}
		}

		//Obtiene el usuario por id
		public function setEditUser($data){
			if(!empty($data['id'])){
				$query  ="UPDATE users SET name='".$data['name']."',last_name='".$data['last_name']."', email='".$data['email']."' WHERE id=".$data['id'];
				$result =mysqli_query($this->link,$query);
				if($result){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}

		//Borra el usuario por id
		public function deleteUser($id=NULL){
			if(!empty($id)){
				$query  ="DELETE FROM users WHERE id=".$id;
				$result =mysqli_query($this->link,$query);
				if(mysqli_affected_rows($this->link)>0){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}

		//Filtro de busqueda
		public function getUsersBySearch($data=NULL){
			if(!empty($data)){
				$query  ="SELECT * FROM users WHERE name LIKE'%".$data."%' OR last_name LIKE'%".$data."%' OR email LIKE'%".$data."%'";
				$result =mysqli_query($this->link,$query);
				$data   =array();
				while ($data[]=mysqli_fetch_assoc($result));
				array_pop($data);
				return $data;
			}else{
				return false;
			}
		}
	}
