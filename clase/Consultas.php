<?php
	/**
	* 
	*/
	require_once "database.php";
	class Consultas
	{
		
		public function consultarVehiculos()
		{
			$con = Database::getInstance();
			$sql = "SELECT * FROM vehiculo";
			$result = $con->db->prepare($sql);
			$result->execute();
			return ($result);
		}

		public function consultarGaseras()
		{
			$con = Database::getInstance();
			$sql = "SELECT * FROM gasera";
			$result = $con->db->prepare($sql);
			$result->execute();
			return ($result);
		}

		public function consultarCentros()
		{
			$con = Database::getInstance();
			$sql = "SELECT * FROM centro";
			$result = $con->db->prepare($sql);
			$result->execute();
			return ($result);
		}

		public function consultaCombustible()
		{
			$con = Database::getInstance();
			$sql = "SELECT combustible.noComprobante, combustible.fecha, region.region, centro.centro, vehiculo.placa, combustible.kmAntes, combustible.kmTransaccion, gasera.codigo, mercancia.mercancia, combustible.cantMercancia, combustible.precioUnitario, (combustible.cantMercancia * combustible.precioUnitario) AS 'total'  FROM combustible JOIN region ON(combustible.region = region.id) JOIN centro ON(combustible.centro = centro.id) JOIN vehiculo ON(combustible.vehiculo = vehiculo.id) JOIN gasera ON(combustible.gasera = gasera.id) JOIN mercancia ON(combustible.mercancia = mercancia.id)";
			$result = $con->db->prepare($sql);
			$result->execute();
			return ($result);
		}
	}
?>