<?php
	include("validarSesion.php");
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="icomoon.css">
	</head>
	<body>
	<header id="cabecera_index">
			<div class="botonera">
				<a href="cerrarSesion.php" style="float: right;">Cerrar Sesion</a>
			</div>

	</header>

	<section id="seccion_home">
	<div id="opcIzq">
		<a href="darAltaTarea.php"><div class=" logo alta_tarea ">
			<span class="icon-table"></span>
			
		</div></a>
		<div class="texto_logo">
			<h4><a href="darAltaTarea.php">Dar de alta tareas</a></h4>
		</div>
		<a href="listaPreCargada.php"><div class=" logo edicion_tarea">
			<span class="icon-cogs"></span>
			
		</div></a>
		<div class="texto_logo">
			<h4><a href="listaPreCargada.php">Edicion de Tarea</a></h4>
		</div>
	</div>	

	<div id="opcDer">
		<a href="filtrosTareas.php"><div class="logo lstFil_tarea">
			<span class="icon-search"></span>
			
		</div></a>
		<div class="texto_logo">
			<h4><a href="filtrosTareas.php">Listar y Filtrar tareas</a></h4>
			
		</div>

		<a href="lstPreCargada.php"><div class="logo borrar_tarea ">
			<span class="icon-trash"></span>
			
		</div></a>
		<div class="texto_logo">
			<h4><a href="lstPreCargada.php">Borrar tarea</a></h4>
		</div>
		
	</div>
	</section>

</body>
</html>