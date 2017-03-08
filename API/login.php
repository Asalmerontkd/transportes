<?php
	header('Content-Type: application/json');
	if (isset($_POST['correo'])) {
		require_once ("../clase/usuario.php");
		$correo = $_POST['correo'];
		$pass = md5($_POST['pass']);

		$user = new Usuario;
		$result = $user->LogIn($correo, $pass);
		if ($result->rowCount() > 0) {
			$ar = array();
			foreach($result as $row)
			{
				$ar = array('id' => $row['id'], 'usuario' => $row['usuario'], 'rol' => $row['rol']);
			}
			$json=json_encode($ar, JSON_FORCE_OBJECT);
			echo $json;
		}
		else
		{
			echo "{\"id\":\"0\",\"usuario\":\"-\",\"rol\":\"0\"}";
		}
	}
	else
	{
		echo "wrong";
	}
?>