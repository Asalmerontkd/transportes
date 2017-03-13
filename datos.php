<?php
	session_start();
	require_once ("clase/Consultas.php");
	$consulta = new Consultas;
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Transportes</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="style.css">
		
	</head>
	<body>
		<div class="container">
			<?php
				include "navigation.php";
			?>
		</div>

		<?php
			if (isset($_SESSION["id"])) {
		?>
		<div class="container">
			<div class="panel panel-primary">
				<div class="panel-heading">Vehículos</div>
				<div class="panel-body">
					<div class="row">
					  <div class="col-lg-6">
					    <div class="input-group">
					    	<div class="table-responsive">
						    	<table class="table .table-sm table-hover table-bordered">
						    		<tr>
						    			<th>ID Vehículo</th>
						    			<th>Placa</th>
						    			<th>Descripción</th>
						    		</tr>
						    		<?php
										$result = $consulta->consultarVehiculos();
										if ($result->rowCount() > 0) {
											foreach($result as $row)
											{
												echo "<tr>";
												echo "<td>".$row['idVehiculo']."</td>";
												echo "<td>".$row['placa']."</td>";
												echo "<td>".$row['descripcion']."</td>";
												echo "</tr>";
											}
										}
										else
										{
											//No hay registros
										}
						    		?>
						    	</table>
						    </div>
					    </div><!-- /input-group -->
					  </div><!-- /.col-lg-6 -->
					</div><!-- /.row -->
				</div>
			</div>
		</div>

		<div class="container">
			<div class="panel panel-primary">
				<div class="panel-heading">Gaseras</div>
				<div class="panel-body">
					<div class="row">
					  <div class="col-lg-6">
					    <div class="input-group">
					    	<div class="table-responsive">
						    	<table class="table .table-sm table-hover table-bordered">
						    		<tr>
						    			<th>Código</th>
						    			<th>Estado</th>
						    			<th>Razón social</th>
						    		</tr>
						    		<?php
										$result = $consulta->consultarGaseras();
										if ($result->rowCount() > 0) {
											foreach($result as $row)
											{
												echo "<tr>";
												echo "<td>".$row['codigo']."</td>";
												echo "<td>".$row['estado']."</td>";
												echo "<td>".$row['razonSocial']."</td>";
												echo "</tr>";
											}
										}
										else
										{
											//No hay registros
										}
						    		?>
						    	</table>
						    </div>
					    </div><!-- /input-group -->
					  </div><!-- /.col-lg-6 -->
					</div><!-- /.row -->
				</div>
			</div>
		</div>


		<div class="container">
			<div class="panel panel-primary">
				<div class="panel-heading">Centros</div>
				<div class="panel-body">
					<div class="row">
					  <div class="col-lg-6">
					    <div class="input-group">
					    	<div class="table-responsive">
						    	<table class="table .table-sm table-hover table-bordered">
						    		<tr>
						    			<th>ID centro</th>
						    			<th>Centro</th>
						    		</tr>
						    		<?php
										$result = $consulta->consultarCentros();
										if ($result->rowCount() > 0) {
											foreach($result as $row)
											{
												echo "<tr>";
												echo "<td>".$row['idCentro']."</td>";
												echo "<td>".$row['centro']."</td>";
												echo "</tr>";
											}
										}
										else
										{
											//No hay registros
										}
						    		?>
						    	</table>
						    </div>
					    </div><!-- /input-group -->
					  </div><!-- /.col-lg-6 -->
					</div><!-- /.row -->
				</div>
			</div>
		</div>

		<div class="container">
			<div class="panel panel-primary">
				<div class="panel-heading">Centros</div>
				<div class="panel-body">
					<div class="row">
					  <div class="col-lg-6">
					    <div class="input-group">
					    	<div class="table-responsive">
						    	<table class="table .table-sm table-hover table-bordered">
						    		<tr>
						    			<th>noComprobante</th>
						    			<th>fecha</th>
						    			<th>region</th>
						    			<th>centro</th>
						    			<th>placa</th>
						    			<th>kmAntes</th>
						    			<th>kmTransaccion</th>
						    			<th>codigo</th>
						    			<th>mercancia</th>
						    			<th>cantMercancia</th>
						    			<th>precioUnitario</th>
						    			<th>total</th>

						    		</tr>
						    		<?php
										$result = $consulta->consultaCombustible();
										if ($result->rowCount() > 0) {
											foreach($result as $row)
											{
												echo "<tr>";
												echo "<td>".$row['noComprobante']."</td>";
												echo "<td>".$row['fecha']."</td>";
												echo "<td>".$row['region']."</td>";
												echo "<td>".$row['centro']."</td>";
												echo "<td>".$row['placa']."</td>";
												echo "<td>".$row['kmAntes']."</td>";
												echo "<td>".$row['kmTransaccion']."</td>";
												echo "<td>".$row['codigo']."</td>";
												echo "<td>".$row['mercancia']."</td>";
												echo "<td>".$row['cantMercancia']."</td>";
												echo "<td>$ ".$row['precioUnitario']."</td>";
												echo "<td>$ ".$row['total']."</td>";
												echo "</tr>";
											}
										}
										else
										{
											//No hay registros
										}
						    		?>
						    	</table>
						    </div>
					    </div><!-- /input-group -->
					  </div><!-- /.col-lg-6 -->
					</div><!-- /.row -->
				</div>
			</div>
		</div>



		<?php
			}
			else {
				print '<script type="text/javascript">window.top.location.href = "inicio";</script>';
			}
		?>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>