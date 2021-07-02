	<?php
	$conectar=mysqli_connect("localHost","root","","todo");
	$sql="SELECT * FROM tareas";
	$respuesta_consulta=mysqli_query($conectar,$sql);

	?>
	<!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="icomoon.css">
		<title>Lista de Tareas</title>
	</head>
	<body>
		<header id="cabecera_index">
			<div class="botonera">
				<a href="home.php" class="active"><span class="icon-home3"></span></a>
				<a href="cerrarSesion.php" style="float: right;">Cerrar Sesion</a>
			</div>

		</header>
		<section>
		<table border="slide">
			<tr>
				<th>Tarea</th>
				<th>Estado</th>
				<th>Fecha Limite</th>
			</tr>
	<?php
	while ($fila=mysqli_fetch_array($respuesta_consulta)) {
		$tarea=$fila['tarea'];
		$estado=$fila['estado'];
		$fechaLimite=$fila['fechaLimite'];
		echo "<tr>";
		echo "<td>$tarea</td>";
		echo "<td>$estado</td>";
		echo "<td>$fechaLimite</td>";
		echo "</tr>";
	}

	?>

			</table>
	</section>
	</body>
	</html>