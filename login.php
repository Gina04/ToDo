		
		<!DOCTYPE html>
		<html>
		<head>

			<title>Administrado de Tareas</title>
		    <link rel=icon href=favicon.png sizes="16x16" type="image/png">	
			<link rel="stylesheet" type="text/css" href="style.css">
		</head>
		<body>
			
		 <section id="contenido_login">

		 <form method="post">
		  <div class="imgcontainer">
		    <img src="imagenes/avatar2.png" alt="Avatar" class="avatar">
		  </div>

		  <div class="container">
		    <label for="uname"><b>Username</b></label>
		    <input type="text" placeholder="Enter Username" name="usuario" class="inputLogin" required>

		    <label for="psw"><b>Password</b></label>
		    <input type="password" placeholder="Enter Password" name="contrasenia" class="inputLogin" required>

		    <button type="submit" class="botonLogin">Login</button>
		   
		  </div>

		  <div class="container" style="background-color:#f1f1f1">
		    <button type="button" class="cancelbtn"><a href="registroUsuario.php">Registrese</a></button>
		    <span class="psw">Olvido su <a href="#">Contraseña?</a></span>
		  </div>
		</form>
		</section>
		</body>
		</html>

		<?php
		session_start();
		 if (!isset($_POST['usuario'])) {

	        die();
	      }
	      if (!isset($_POST['contrasenia'])) {
	        die();
	      }

	      	$usuario=$_POST['usuario'];
			$contrasenia=$_POST['contrasenia'];

		if (empty($usuario)) {
			echo "Ingrese Usuario<br>";
		}

		if (empty($contrasenia)) {
			echo "Ingrese la contrasenia correcta";
		}
			
	        
	        $conectar=mysqli_connect("localHost","root","","registros");

	        $sql="SELECT*FROM usuarios WHERE usuario='$usuario'";
	        $resultado_consulta=mysqli_query($conectar,$sql);

	        $fila=mysqli_fetch_array($resultado_consulta);

	        if ($fila) {
	        	$coinciden=password_verify($contrasenia, $fila['contrasenia']);

	        

	        if ($coinciden==true) {
	        	$_SESSION['id']=$fila['id'];

	        	header('Location:home.php');
	        	
	        }else{
	        	die("Error de contrasenia");
	        }

	     }
	     die(); 
	     
	 
		?>
