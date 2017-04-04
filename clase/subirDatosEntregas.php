<?php
	session_start();
	if (isset($_SESSION["id"])) {
		require_once ("EntregaTemp.php");
		$tipo = $_FILES['archivo']['type'];
		$tamanio = $_FILES['archivo']['size'];
		$archivotmp = $_FILES['archivo']['tmp_name'];
		//cargamos el archivo
		$lineas = file($archivotmp);
		$data = new DatosTemp;
		if (isset($lineas)) {
			$i=0;
			foreach ($lineas as $linea_num => $linea)
			{ 
			   if($i != 0 && $i>10) 
			   { 
			       //La funcion explode nos ayuda a delimitar los campos
			       $datos = explode(";",$linea);
			       $aprobado = trim($datos[35]);
			       if (strtoupper($aprobado) == "APROBADA") {
						$region = trim($datos[3]);
				       $idCentroCosto = trim($datos[4]);
				       $centroCosto = trim($datos[5]);
				       $tarjeta = trim($datos[6]);
				       $idVehiculo = trim($datos[7]);
				       $descVehiculo = trim($datos[8]);
				       $noComprobante = trim($datos[9]);
				       $fecha = str_replace("/", "-", trim($datos[10]));

				       $dia = substr($fecha, 0, 2);
				       $mes = substr($fecha, 3,2);
				       $anio = substr($fecha, 6, 4);
				       $hora = substr($fecha, 11);

				       $fecha = $anio."-".$mes."-".$dia." ".$hora;

				       $codPemex = trim($datos[12]);
				       $razonSocial = trim($datos[13]);
				       $cerCualli = trim($datos[14]);
				       $estado = trim($datos[15]);
				       $kmAntes = str_replace(",", "", trim($datos[17]));
				       $kmTransaccion = str_replace(",", "", trim($datos[18]));
				       $capacidad = trim($datos[22]);
				       $mercancia = trim($datos[24]);
				       $cantMercancia = trim($datos[25]);
				       $precioUni = str_replace("$", "", trim($datos[26]));
				       $idTerminal = trim($datos[38]);
				       $placa = trim($datos[39]);


				       $result = $data->insertarDatos($_SESSION["id"], $region, $idCentroCosto, $centroCosto, $tarjeta, $idVehiculo, $descVehiculo, $noComprobante, $fecha, $codPemex, $razonSocial, $cerCualli, $estado, $kmAntes, $kmTransaccion, $capacidad, $mercancia, $cantMercancia, $precioUni, $idTerminal, $placa);
			       }
			   }
			   $i++;
			}
			print '<script type="text/javascript">window.top.location.href = "datosTemporales";</script>';
		}
		else
		{
			print '<script type="text/javascript">window.top.location.href = "carga";</script>';
		}
	}
	else
	{
		print '<script type="text/javascript">window.top.location.href = "login";</script>';
	}
?>