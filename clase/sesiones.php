<?php
	session_start();
	@$flag = $_REQUEST['flag'];

	if (isset($flag)) {
		if ($flag == 1) //Intento de inicio de sesión
		{
			require_once ("usuario.php");
			$correo = $_POST['correo'];
			$pass = md5($_POST['pass']);

			$user = new Usuario;
			$result = $user->LogIn($correo, $pass);
			if ($result->rowCount() > 0) {
				foreach($result as $row)
				{
					$_SESSION["id"] = $row['id'];
					$_SESSION["user"] = $row['usuario'];
					$_SESSION["rol"] = $row['rol'];
					print '<script type="text/javascript">window.top.location.href = "inicio";</script>';
				}
			}
			else
			{
				print '<script type="text/javascript">window.top.location.href = "login-fail";</script>';
			}
		}
		elseif ($flag == 2) //cerrar sesiones
		{
			session_unset();
			session_destroy();
			print '<script type="text/javascript">window.top.location.href = "inicio";</script>';
		}
	}
?>