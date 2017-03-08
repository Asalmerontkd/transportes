<?php
	/**
	* 
	*/
	require_once "database.php";
	class DatosTemp
	{
		
		public function insertarDatos($user, $region, $idCentro, $centro, $tarjeta, $idVehiculo, $descVehiculo, $noComprobante, $fecha, $codPemex, $razonSocial, $cerCualli, $estado, $kmAntes, $kmTransaccion, $capacidad, $mercancia, $cantMercancia, $precioUni, $idTerminal, $placa)
		{
			$fechaTemp = date("Y-m-d H:i:s");
			$con = Database::getInstance();
			$sql = "INSERT INTO temporal(user, fechaTemp, region, idCentro, centro, tarjeta, idVehiculo, descVehiculo, noComprobante, fecha, codPemex, razonSocial, cerCualli, estado, kmAntes, kmTransaccion, capacidad, mercancia, cantMercancia, precioUni, idTerminal, placa) VALUES (:user, :fechaTemp, :region, :idCentro, :centro, :tarjeta, :idVehiculo, :descVehiculo, :noComprobante, :fecha, :codPemex, :razonSocial, :cerCualli, :estado, :kmAntes, :kmTransaccion, :capacidad, :mercancia, :cantMercancia, :precioUni, :idTerminal, :placa)"
			$result = $con->db->prepare($sql);
			$params = array("user" =>$user, "fechaTemp" => $fechaTemp, "region" => $region, "idCentro" => $idCentro, "centro" => $centro, "tarjeta" => $tarjeta, "idVehiculo" => $idVehiculo, "descVehiculo" => $descVehiculo, "noComprobante" => $noComprobante, "fecha" => $fecha, "codPemex" => $codPemex, "razonSocial" => $razonSocial, "cerCualli" => $cerCualli, "estado" => $estado, "kmAntes" => $kmAntes, "kmTransaccion" => $kmTransaccion, "capacidad" => $capacidad, "mercancia" => $mercancia, "cantMercancia" => $cantMercancia, "precioUni" => $precioUni, "idTerminal" => $idTerminal, "placa" => $placa);
			$result->execute($params);
			return ($result);
		}
	}
?>