<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Carga de archivos</title>
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
			<div class="panel panel-default">
				<div class="panel-heading">Carga de archivos cvs para "combustible"</div>
				<div class="panel-body">
					<div class="row">
					  <div class="col-lg-6">
					    <div class="input-group">
					    	<form action="initCarga" enctype="multipart/form-data" method="post">
						      <input id="archivo" accept=".csv" name="archivo" type="file" class="form-control" placeholder="Seleccionar archivo cvs...">
						      <span class="input-group-btn">
						        <button class="btn btn-default" type="submit">Subir datos.</button>
						      </span>
						    </form>
					    </div><!-- /input-group -->
					  </div><!-- /.col-lg-6 -->
					</div><!-- /.row -->
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">Carga de archivos cvs para "entregas"</div>
				<div class="panel-body">
					<div class="row">
					  <div class="col-lg-6">
					    <div class="input-group">
					    	<form action="initCargaEntregas" enctype="multipart/form-data" method="post">
						      <input id="archivo" accept=".csv" name="archivo" type="file" class="form-control" placeholder="Seleccionar archivo cvs...">
						      <span class="input-group-btn">
						        <button class="btn btn-default" type="submit">Subir datos.</button>
						      </span>
						    </form>
					    </div><!-- /input-group -->
					  </div><!-- /.col-lg-6 -->
					</div><!-- /.row -->
				</div>
			</div>
		</div>



		<!-- Latest compiled and minified JavaScript -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>