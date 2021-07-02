<?php
include("validarSesion.php");
/*obtengo el registro $id=$_GET[id]*/
$conectar=mysqli_connect("localHost","root","","todo");
	/*Este id es el que me envia la lstPreCargada*/
	$id=$_GET['id'];
	$sql="SELECT * FROM tareas WHERE id=$id "; 
	$respuesta_sql=mysqli_query($conectar,$sql);

	$registro=mysqli_fetch_array($respuesta_sql);

		if ($registro==NULL) {
				echo "El id no fue encontrado";
				die();
				
			}
			$id=$registro['id'];
			$tareaNueva=$registro['tarea'];
			$estadoNuevo=$registro['estado'];
			$fechaLimite=$registro['fechaLimite'];


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
<?php

//borro la tarea con 
	$sql="DELETE FROM tareas where  id=$id";

	$respuesta_sql=mysqli_query($conectar, $sql);

	if ($respuesta_sql) {
		echo "Delete exitoso";
		header("Location:lstPreCargada.php");//aca lo dirigo directo a la lista pre cargada 
	}else{
		echo "No se puede hacer el Delete";
		header("Location:error.php");
	}

	
?>