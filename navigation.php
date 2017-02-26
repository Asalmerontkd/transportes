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
	      <li><a href="#">About</a></li>
	      <li><a href="#">Contact</a></li>
	      <li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
	        <ul class="dropdown-menu">
	          <li><a href="#">Action</a></li>
	          <li><a href="#">Another action</a></li>
	          <li><a href="#">Something else here</a></li>
	          <li role="separator" class="divider"></li>
	          <li class="dropdown-header">Nav header</li>
	          <li><a href="#">Separated link</a></li>
	          <li><a href="#">One more separated link</a></li>
	        </ul>
	      </li>
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