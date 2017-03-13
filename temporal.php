<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mis temporales</title>
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
		<div class="container">
			<div class="panel panel-primary">
				<div class="panel-heading">Es correcta la carga de archivos?</div>
				<div class="panel-body">
					<div class="row">
					  <div class="col-lg-6">
					    <div class="input-group">
					    	<div class="table-responsive">
						    	<table class="table .table-sm table-hover table-bordered">
						    		<tr>
						    			<th>Region</th>
						    			<th>ID centro</th>
						    			<th>Centro</th>
						    			<th>Tarjeta</th>
						    			<th>ID vehículo</th>
						    			<th>Descripción del vehículo</th>
						    			<th>Número de comprobante</th>
						    			<th>Fecha</th>
						    			<th>Código gasolinera</th>
						    			<th>Razón social</th>
						    			<th>cerCualli</th>
						    			<th>Estado</th>
						    			<th>Km anterior</th>
						    			<th>Km durante transacción</th>
						    			<th>Capacidad</th>
						    			<th>Mercancia</th>
						    			<th>Cantidad de mercancia</th>
						    			<th>Precio unitario</th>
						    			<th>ID terminal</th>
						    			<th>Placa</th>
						    		</tr>
						    		<?php
						    			require_once ("clase/DatosTemp.php");
										$user = new DatosTemp;
										$result = $user->consultarMiTemporal($_SESSION["id"]);
										if ($result->rowCount() > 0) {
											foreach($result as $row)
											{
												echo "<tr>";
												echo "<td>".$row['region']."</td>";
												echo "<td>".$row['idCentro']."</td>";
												echo "<td>".$row['centro']."</td>";
												echo "<td>".$row['tarjeta']."</td>";
												echo "<td>".$row['idVehiculo']."</td>";
												echo "<td>".$row['descVehiculo']."</td>";
												echo "<td>".$row['noComprobante']."</td>";
												echo "<td>".$row['fecha']."</td>";
												echo "<td>".$row['codPemex']."</td>";
												echo "<td>".$row['razonSocial']."</td>";
												echo "<td>".$row['cerCualli']."</td>";
												echo "<td>".$row['estado']."</td>";
												echo "<td>".$row['kmAntes']."</td>";
												echo "<td>".$row['kmTransaccion']."</td>";
												echo "<td>".$row['capacidad']."</td>";
												echo "<td>".$row['mercancia']."</td>";
												echo "<td>".$row['cantMercancia']."</td>";
												echo "<td>".$row['precioUni']."</td>";
												echo "<td>".$row['idTerminal']."</td>";
												echo "<td>".$row['placa']."</td>";
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
				<div class="panel-footer">
					<div class="btn-group" role="group" aria-label="...">
					  <button type="button" class="btn btn-success" onclick="post('transaccionCombustible', {flag: 1})">Aprobar cambios</button>
					  <button type="button" class="btn btn-default" onclick="post('carga', {flag: 0})">Cargar CSV</button>
					  <button type="button" class="btn btn-danger" onclick="post('transaccionCombustible', {flag: 2})">Descartar cambios</button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script type="text/javascript">
			function post(path, params, method) {
			    method = method || "post";
			    var form = document.createElement("form");
			    form.setAttribute("method", method);
			    form.setAttribute("action", path);

			    for(var key in params) {
			        if(params.hasOwnProperty(key)) {
			            var hiddenField = document.createElement("input");
			            hiddenField.setAttribute("type", "hidden");
			            hiddenField.setAttribute("name", key);
			            hiddenField.setAttribute("value", params[key]);

			            form.appendChild(hiddenField);
			         }
			    }

			    document.body.appendChild(form);
			    form.submit();
			}
		</script>
	</body>
</html>