<?php
	include("validarSesion.php");
	if (!empty($_POST)) {
		$tarea=$_POST['tarea'];
		$estado=$_POST['estado'];
		$fechaLimite=$_POST['fechaLimite'];
		$fecha=date('Y-m-d');


		$conectar=mysqli_connect("localHost","root","","todo");
		$sql="INSERT INTO tareas (tarea,estado,fechaRealizada,fechaLimite) VALUES ('$tarea', '$estado','$fecha','$fechaLimite')";
		$respuesta_sql=mysqli_query($conectar,$sql);

	}


?>

<!DOCTYPE html>
	<html>
		<head>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1.0">
		  <meta http-equiv="X-UA-Compatible" content="ie=edge" >
			<title>Agregar Tareas</title>
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

			<section id="seccion_altaTarea">
			<form method="POST" class="form_alta" > 
				
				<label>Tarea
					<input type="text" name="tarea" placeholder="Ingrese tarea" class="inputAlta">
				</label>
				<label>Estado 
					<input type="text" name="estado" placeholder="Realizada o sin realizar" class="inputAlta">
				</label>
				<label>Fecha Limite
				 <input type="date" name="fechaLimite" placeholder="fecha a terminar tarea" class="inputDate">
				</label>
				
				<button type="submit" class="submitAlta">Ingrese Tarea</button>

			</form>

			</section>
		</body>
	</html>