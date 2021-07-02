	<?php
		include("validarSesion.php");
		$conectar=mysqli_connect("localHost","root","","todo");
		$sql="SELECT * FROM tareas";
		$respuesta_sql=mysqli_query($conectar,$sql);



		?>

		<!DOCTYPE html>
		<html>
		<head>
			<title>Eliminar Tareas</title>
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
			<section id="seccion_borrado">
		    
			<table class="tabla_borrado">
				<tr>
					<th>Tarea</th>
					<th>Estado</th>
					<th>Fecha Limite</th>
					<th>Accion</th>

				</tr>
		<?php
		while ($filtro=mysqli_fetch_array($respuesta_sql)) {
			$tarea=$filtro['tarea'];
			$estado=$filtro['estado'];
			$fechaLimite=$filtro['fechaLimite'];
			$id=$filtro['id'];
			echo "<tr>";
			echo "<td>$tarea</td>";
			echo "<td>$estado</td>";
			echo "<td>$fechaLimite</td>";
			echo "<td><a href='borrar.php?id=$id'>Eliminar</a></td>";
			echo "</tr>";
		}

		?>
		  </table>
		  
		  </section>
		</body>
		</html>