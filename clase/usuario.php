<?php
	/**
	* 
	*/
	require_once "database.php";
	class Usuario
	{
		
		public function LogIn($correo, $pass)
		{
			$con = Database::getInstance();
			$sql = "SELECT id, usuario, rol FROM usuario WHERE correo = :correo AND pass = :pass";
			$result = $con->db->prepare($sql);
			$params = array("correo" =>$correo, "pass" => $pass);
			$result->execute($params);
			return ($result);
		}

		public function FunctionName($value='')
		{
			# code...
		}
	}
?>