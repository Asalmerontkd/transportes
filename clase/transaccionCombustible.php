<?php
	session_start();
	if (isset($_SESSION["id"])) {
		require_once ("DatosTemp.php");
		$flag = $_POST['flag'];
		$data = new DatosTemp;
		if ($flag == 1) //agregar 
		{
			$result = $data->consultarMiTemporal($_SESSION["id"]);
			if ($result->rowCount() > 0) {
				foreach($result as $row)
				{
					$idRegion = 0;
					$idCentro = 0;
					$idVehiculo = 0;
					$idGasera = 0;
					$idMercancia = 0;
					
					$innerResult = $data->consultaRegion($row['region']);
					if ($innerResult->rowCount() > 0) {
						foreach($innerResult as $inrow){
							$idRegion = $inrow['id'];
						}
					}
					else{
						$data->agregaRegion($row['region']);
						
						$innerPost = $data->consultaRegion($row['region']);
						if ($innerPost->rowCount() > 0) {
							foreach($innerPost as $inPost){
								$idRegion = $inPost['id'];
							}
						}
					}

					$innerResult = $data->consultaCentro($row['idCentro']);
					if ($innerResult->rowCount() > 0) {
						foreach($innerResult as $inrow){
							$idCentro = $inrow['id'];
						}
					}
					else{
						$data->agregaCentro($row['idCentro'], $row['centro']);

						$innerPost = $data->consultaCentro($row['idCentro']);
						if ($innerPost->rowCount() > 0) {
							foreach($innerPost as $inPost){
								$idCentro = $inPost['id'];
							}
						}
					}

					$innerResult = $data->consultaVehiculo($row['idVehiculo']);
					if ($innerResult->rowCount() > 0) {
						foreach($innerResult as $inrow){
							$idVehiculo = $inrow['id'];
						}
					}
					else{
						$data->agregarVehiculo($row['idVehiculo'], $row['placa'], $row['descVehiculo']);

						$innerPost = $data->consultaVehiculo($row['idVehiculo']);
						if ($innerPost->rowCount() > 0) {
							foreach($innerPost as $inPost){
								$idVehiculo = $inPost['id'];
							}
						}
					}

					$innerResult = $data->consultaGasera($row['codPemex']);
					if ($innerResult->rowCount() > 0) {
						foreach($innerResult as $inrow){
							$idGasera = $inrow['id'];
						}
					}
					else{
						$data->agregaGasera($row['codPemex'], $row['estado'], $row['razonSocial']);

						$innerPost = $data->consultaGasera($row['codPemex']);
						if ($innerPost->rowCount() > 0) {
							foreach($innerPost as $inPost){
								$idGasera = $inPost['id'];
							}
						}
					}

					$innerResult = $data->consultaMercancia($row['mercancia']);
					if ($innerResult->rowCount() > 0) {
						foreach($innerResult as $inrow){
							$idMercancia = $inrow['id'];
						}
					}
					else{
						$data->agregaMercancia($row['mercancia']);

						$innerPost = $data->consultaMercancia($row['mercancia']);
						if ($innerPost->rowCount() > 0) {
							foreach($innerPost as $inPost){
								$idMercancia = $inPost['id'];
							}
						}
					}

					$innerResult = $data->consltaFinal($row['noComprobante']);
					if ($innerResult->rowCount() > 0) {
						echo "exite";
					}
					else{
						$data->finalTransaccion($_SESSION["id"], $row['noComprobante'], $row['idTerminal'], $row['tarjeta'], $row['fecha'], $idRegion, $idCentro, $idVehiculo, $row['kmAntes'], $row['kmTransaccion'], $row['capacidad'], $idGasera, $idMercancia, $row['cantMercancia'], $row['precioUni']);
					}
				}

				$data->descartarCambios($_SESSION["id"]);
			}
			else
			{
				//No hay registros
			}
			print '<script type="text/javascript">window.top.location.href = "datos";</script>';
		}
		elseif ($flag == 2) //eliminar temporales
		{
			$result = $data->descartarCambios($_SESSION["id"]);

			print '<script type="text/javascript">window.top.location.href = "carga";</script>';
		}
	}
?>