	<?php
	/*obtengo el registro cuyo id=$_GET["id"]*/
	include("validarSesion.php");

	;$conectar=mysqli_connect("localHost","root","","todo");
	/*Este id es el que me envia la tablaPreCargada*/
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
		<title>Editar tareas</title>
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
		<section id="seccion_editar">
		<form method="post">
			<label>Tarea
			<input type="text" name="tarea" value="<?php echo $tareaNueva ?>" class="inputEditar">
			</label>
			<label>Estado
			<input type="text" name="estado" value="<?php echo $estadoNuevo ?>" class="inputEditar">
			</label>
			<label>Fecha Limite
			<input type="date" name="fechaLimite" value="<?php echo $fechaLimite  ?>" class="inputEditar">
			</label>
			<button type="submit">Actualizar</button>

		</form>
		</section>

	</body>
	</html>

	<?php
	/*verifico que no se ingrese formulario vacio, sin datos a editar*/
	if (!empty($_POST)) {
		$tareaNueva=$_POST['tarea'];
		$estadoNuevo=$_POST['estado'];
		$fechaLimite=$_POST['fechaLimite'];


	/*actualizo registro con las nuevas tareas. estado,etc..*/

	$sql="UPDATE tareas set tarea='$tareaNueva', estado='$estadoNuevo', fechaLimite='$fechaLimite' where id=$id";

	$respuesta_sql=mysqli_query($conectar, $sql);

	if ($respuesta_sql) {
		echo "Update exitoso";
		header("Location:listaPreCargada.php");
	}else{
		echo "No se puede hacer el Update";
		header("Location:error.php");
	}

	}
?>