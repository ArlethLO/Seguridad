<?php
echo "<!DOCTYPE html>
		<html lang='es'>
			<head>
				<title>Registro</title>
				<meta charset='UTF-8'/>
				<link rel='stylesheet' type='text/css' href='../style/seguridad.css'/>
			</head>
			<body>
				<h1>Registro</h1>
				<form method='POST' action='Registro.php''>
				<p>Nombre Usuario:<input type='text' name='usu' maxlenght=10/></p>
				<p>Contraseña:<input type='password' name='contra' min=4 maxlenght=10/></p>
				<p><input type='submit'/></p>
				</form>";
				if(isset($_POST['usu']))
				if(isset($_POST['contra']))
				{
					$usu=$_POST['usu'];
					$con=$_POST['contra'];
				echo "<p><a href='../templates/Inicio.html'>Iniciar sesion</a></p>";
				}	
echo		"</body>
		</html>";
?>