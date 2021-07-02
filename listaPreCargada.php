	<?php
	;include("validarSesion.php");
	$conectar=mysqli_connect("localHost","root","","todo");
	$sql="SELECT * FROM tareas";
	$respuesta_sql=mysqli_query($conectar,$sql);

	?>


	<!DOCTYPE html>
	<html>
	<head>
		<title>Tabla Pre Cargada</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="icomoon.css">
	</head>
	<body>
		<header id="cabecera_index">
				<div class="botonera">
					<a href="home.php" class="active"><span class="icon-home3"></span></a>
					<a href="cerrarSesion.php" style="float: right;">Cerrar Sesion</a>
				</div>

			</header>
			<section id="seccion_lstPreCargada">
		<table class="tabla_edicion">
			<tr>
				<th>Tarea</th>
				<th>Estado</th>
				<th>FechaLimite</th>
				<th>Accion</th>
			</tr>
	<?php

	while ($file=mysqli_fetch_array($respuesta_sql)) {
		$tarea=$file['tarea'];
		$estado=$file['estado'];
		$fechaLimite=$file['fechaLimite'];
		$id=$file['id'];

		echo "<tr>";
		echo "<td>$tarea</td>";
		echo "<td>$estado</td>";
		echo "<td>$fechaLimite</td>";
		echo "<td><a href='editar.php?id=$id'>Editar</a></td>";
		echo "</tr>";
	}

	?>



		</table>

		</section>

	</body>
	</html>