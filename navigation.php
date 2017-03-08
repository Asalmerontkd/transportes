<?php
	
?>
<!-- Static navbar -->
<nav class="navbar navbar-default">
	<div class="container-fluid">
	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	      <span class="sr-only">Toggle navigation</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
	    <a class="navbar-brand" href="#">
	    	<img id="navLogo" src="img/logo.png">
	    </a>
	  </div>
	  <div id="navbar" class="navbar-collapse collapse">
	    <ul class="nav navbar-nav">
	      <li><a href="inicio">Inicio</a></li>
	      <?php
	      	if (isset($_SESSION["rol"])) {
	      		if ($_SESSION["rol"]==1) //Administrador
	      		{
	      ?>
			      <li><a href="#">Usuarios</a></li>
			      <li><a href="#">Issue</a></li>
			      <li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Captura <span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          <li><a href="#">Agregar datos csv</a></li>
			          <li><a href="#">Consultar datos</a></li>
			          <li><a href="#">Modificar datos</a></li>
			        </ul>
			      </li>
			      <li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reportes <span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          <li><a href="#">Generar reposrte</a></li>
			          <li role="separator" class="divider"></li>
			          <li class="dropdown-header">Estadísticas</li>
			          <li><a href="#">Generar estadística</a></li>
			        </ul>
			      </li>
	      <?php
	      		}
	      		else if ($_SESSION["rol"]==2) //Capturista
	      		{
	      	?>
	      			<li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Captura <span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          <li><a href="#">Agregar datos csv</a></li>
			          <li><a href="#">Consultar datos</a></li>
			        </ul>
			      </li>
			      <li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reportes <span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          <li><a href="#">Generar reposrte</a></li>
			          <li role="separator" class="divider"></li>
			          <li class="dropdown-header">Estadísticas</li>
			          <li><a href="#">Generar estadística</a></li>
			        </ul>
			      </li>
	      	<?php
	      		}
	      		else if ($_SESSION["rol"]==3) //Controlador
	      		{
	      			# code...
	      		}
	      	}
	      ?>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
	      <?php
	      	if (isset($_SESSION["user"])) 
	      	{
	      		echo "<li><a href='#'>".$_SESSION["user"]."</a></li>";
	      		echo "<li><a href='cerrar'>Cerrar sesión</a></li>";
	      	}
	      	else
	      	{
	      		echo "<li><a href='login'>Iniciar sesión</a></li>";
	      	}
	      ?>
	    </ul>
	  </div><!--/.nav-collapse -->
	</div><!--/.container-fluid -->
</nav>