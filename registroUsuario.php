
<?php
if (!empty($_POST)) {
	$usuario=$_POST['usuario'];
	$contrasenia=$_POST['contrasenia'];
	$mail=$_POST['mail'];
	$nombre=$_POST['nombre'];
	$fecha=date('Y-m-d');
	$contrasenia_encriptada=password_hash($contrasenia,PASSWORD_BCRYPT);
	

	$conectar=mysqli_connect("localHost","root","","registros");

	$sql="INSERT INTO usuarios (usuario,contrasenia,mail,nombre,fecha) VALUES ('$usuario','$contrasenia_encriptada','$mail','$nombre','$fecha')";

	$respuesta_consulta=mysqli_query($conectar,$sql);
}


?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Registro de Usuario</title>
		
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<section id="regUsuario">

		<div class="container">	

		<form method="POST" >
			<h1>Registro de Usuario</h1>
			<p>Complete este formulario para crear una cuenta</p>
			<hr>
			<label><b>Usuario</b>
			<input type="text" name="usuario" class="inputRegistro">
			</label>
			<label><b>Contraseña</b>
			<input type="password" name="contrasenia" class="inputRegistro">
			</label>
			<label><b>Mail</b>
			<input type="text" name="mail" class="inputRegistro">
			</label>
			<label><b>Nombre</b>
			<input type="text" name="nombre" class="inputRegistro">
			</label>
			 <label>
	        <input type="checkbox" checked="checked" name="remember"
	         style="margin-left:10px"> Remember me
	      </label>


		<div class="clearfix">
			<button type="button" class="cancelRegistro">Cancelar</button>

			<button type="submit" class="botonRegistro">Registrarse</button>
		</div>	
		</form>
			
		</div>

		
	</section>
	</body>
	</html>