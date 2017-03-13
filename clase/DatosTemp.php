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
			$sql = "INSERT INTO temporal(user, fechaTemp, region, idCentro, centro, tarjeta, idVehiculo, descVehiculo, noComprobante, fecha, codPemex, razonSocial, cerCualli, estado, kmAntes, kmTransaccion, capacidad, mercancia, cantMercancia, precioUni, idTerminal, placa) VALUES (:user, :fechaTemp, :region, :idCentro, :centro, :tarjeta, :idVehiculo, :descVehiculo, :noComprobante, :fecha, :codPemex, :razonSocial, :cerCualli, :estado, :kmAntes, :kmTransaccion, :capacidad, :mercancia, :cantMercancia, :precioUni, :idTerminal, :placa)";
			$result = $con->db->prepare($sql);
			$params = array("user" =>$user, "fechaTemp" => $fechaTemp, "region" => $region, "idCentro" => $idCentro, "centro" => $centro, "tarjeta" => $tarjeta, "idVehiculo" => $idVehiculo, "descVehiculo" => $descVehiculo, "noComprobante" => $noComprobante, "fecha" => $fecha, "codPemex" => $codPemex, "razonSocial" => $razonSocial, "cerCualli" => $cerCualli, "estado" => $estado, "kmAntes" => $kmAntes, "kmTransaccion" => $kmTransaccion, "capacidad" => $capacidad, "mercancia" => $mercancia, "cantMercancia" => $cantMercancia, "precioUni" => $precioUni, "idTerminal" => $idTerminal, "placa" => $placa);
			$result->execute($params);
			return ($result);
		}

		public function consultarMiTemporal($userId)
		{
			$con = Database::getInstance();
			$sql = "SELECT region, idCentro, centro, tarjeta, idVehiculo, descVehiculo, noComprobante, fecha, codPemex, razonSocial, cerCualli, estado, kmAntes, kmTransaccion, capacidad, mercancia, cantMercancia, precioUni, idTerminal, placa FROM temporal WHERE user = :userId ORDER BY fechaTemp ASC";
			$result = $con->db->prepare($sql);
			$params = array("userId" => $userId);
			$result->execute($params);
			return ($result);
		}

		public function descartarCambios($userId)
		{
			$con = Database::getInstance();
			$sql = "DELETE FROM temporal WHERE user = :userId";
			$result = $con->db->prepare($sql);
			$params = array("userId" => $userId);
			$result->execute($params);
			return ($result);
		}

		public function consultaRegion($region)
		{
			$con = Database::getInstance();
			$sql = "SELECT id FROM region WHERE UPPER(region) = :region";
			$result = $con->db->prepare($sql);
			$params = array("region" => strtoupper($region));
			$result->execute($params);
			return ($result);
		}

		public function agregaRegion($region)
		{
			$con = Database::getInstance();
			$sql = "INSERT INTO region(region) VALUES(:region)";
			$result = $con->db->prepare($sql);
			$params = array("region" => ucfirst(strtolower($region)));
			$result->execute($params);
			return ($result);
		}

		public function consultaCentro($idCentro)
		{
			$con = Database::getInstance();
			$sql = "SELECT id FROM centro WHERE idCentro = :idCentro";
			$result = $con->db->prepare($sql);
			$params = array("idCentro" => $idCentro);
			$result->execute($params);
			return ($result);
		}

		public function agregaCentro($idCentro, $centro)
		{
			$con = Database::getInstance();
			$sql = "INSERT INTO centro(idCentro, centro) VALUES(:idCentro, :centro)";
			$result = $con->db->prepare($sql);
			$params = array("idCentro" => $idCentro, "centro" => ucfirst(strtolower($centro)));
			$result->execute($params);
			return ($result);
		}

		public function consultaVehiculo($idVehiculo)
		{
			$con = Database::getInstance();
			$sql = "SELECT id FROM vehiculo WHERE idVehiculo = :idVehiculo";
			$result = $con->db->prepare($sql);
			$params = array("idVehiculo" => $idVehiculo);
			$result->execute($params);
			return ($result);
		}

		public function agregarVehiculo($idVehiculo, $placa, $desc)
		{
			$con = Database::getInstance();
			$sql = "INSERT INTO vehiculo(idVehiculo, placa, descripcion) VALUES(:idVehiculo, :placa, :descripcion)";
			$result = $con->db->prepare($sql);
			$params = array("idVehiculo" => $idVehiculo, "placa" => $placa, "descripcion" => ucfirst(strtolower($desc)));
			$result->execute($params);
			return ($result);
		}

		public function consultaGasera($codigo)
		{
			$con = Database::getInstance();
			$sql = "SELECT id FROM gasera WHERE codigo = :codigo";
			$result = $con->db->prepare($sql);
			$params = array("codigo" => $codigo);
			$result->execute($params);
			return ($result);
		}

		public function agregaGasera($codigo, $estado, $razon)
		{
			$con = Database::getInstance();
			$sql = "INSERT INTO gasera(codigo, estado, razonSocial) VALUES(:codigo, :estado, :razon)";
			$result = $con->db->prepare($sql);
			$params = array("codigo" => $codigo, "estado" => $estado, "razon" => $razon);
			$result->execute($params);
			return ($result);
		}

		public function consultaMercancia($mercancia)
		{
			$con = Database::getInstance();
			$sql = "SELECT id FROM mercancia WHERE UPPER(mercancia) = :mercancia";
			$result = $con->db->prepare($sql);
			$params = array("mercancia" => strtoupper($mercancia));
			$result->execute($params);
			return ($result);
		}

		public function agregaMercancia($mercancia)
		{
			$con = Database::getInstance();
			$sql = "INSERT INTO mercancia(mercancia) VALUES(:mercancia)";
			$result = $con->db->prepare($sql);
			$params = array("mercancia" => ucfirst(strtolower($mercancia)));
			$result->execute($params);
			return ($result);
		}

		public function consltaFinal($noComprobante)
		{
			$con = Database::getInstance();
			$sql = "SELECT id FROM combustible WHERE noComprobante = :noComprobante";
			$result = $con->db->prepare($sql);
			$params = array("noComprobante" => $noComprobante);
			$result->execute($params);
			return ($result);
		}

		public function finalTransaccion($usuario, $noComprobante, $idTerminal, $tarjeta, $fecha, $region, $centro, $vehiculo, $kmAntes, $kmTransaccion, $capacidad, $gasera, $mercancia, $cantMercancia, $precioUni)
		{
			$fechaTransaccion = date("Y-m-d H:i:s");
			$con = Database::getInstance();
			$sql = "INSERT INTO combustible(fechaTransaccion, usuario, noComprobante, idTerminal, tarjeta, fecha, region, centro, vehiculo, kmAntes, kmTransaccion, capacidad, gasera, mercancia, cantMercancia, precioUnitario) VALUES(:fechaTransaccion, :usuario, :noComprobante, :idTerminal, :tarjeta, :fecha, :region, :centro, :vehiculo, :kmAntes, :kmTransaccion, :capacidad, :gasera, :mercancia, :cantMercancia, :precioUni)";
			$result = $con->db->prepare($sql);
			$params = array("fechaTransaccion" => $fechaTransaccion, "usuario" => $usuario, "noComprobante" => $noComprobante, "idTerminal" => $idTerminal, "tarjeta" => $tarjeta, "fecha" => $fecha, "region" => $region, "centro" => $centro, "vehiculo" => $vehiculo, "kmAntes" => $kmAntes, "kmTransaccion" => $kmTransaccion, "capacidad" => $capacidad, "gasera" => $gasera, "mercancia" => $mercancia, "cantMercancia" => $cantMercancia, "precioUni" => $precioUni);
			$result->execute($params);
			return ($result);
		}
	}
?>