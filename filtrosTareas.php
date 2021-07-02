     <?php

		include("validarSesion.php");

		$filtro = "";
		if (!empty($_GET['tarea'])) {
			$filtro=$_GET['tarea'];
		}

		$conectar=mysqli_connect("localHost","root","","todo");
		$sql="SELECT * FROM tareas where tarea like '%$filtro%'";
			$respuesta_consulta=mysqli_query($conectar, $sql);
			
		?>


		<!DOCTYPE html>
		<html>
		<head>
			<title>Filtrar Tareas</title>
			<link rel="stylesheet" type="text/css" href="style.css">
			<link rel="stylesheet" type="text/css" href="icomoon.css">
		</head>
		<body>
			<header id="cabecera_index">
				<div class="botonera">
					<a href="home.php" class="active"><span class="icon-home3"></span></a>
					<a href="login.php" style="float: right;">Cerrar Sesion</a>
				</div>

			</header>
			<SECTION id="seccion_filtro">
			<form method="GET" class="form_filtro" class="form_filtro">
			
					<input type="text" name="tarea" class="inputFiltro" placeholder="Filtre aca sus tareas" required>
					<button type="submit" class="buttonFiltro">Filtrar</button>


			</form>
			

			<table border="solid" class="table_filtro">
				<tr>
					<th>Tarea</th>	
					<th>Estado</th>
					<th>Fecha Limite</th>	

				</tr>
				
				<?php

				while($fila=mysqli_fetch_array($respuesta_consulta)) {
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

			</SECTION>	

		</body>
		</html>