<?php
	$a=$_GET['numa'];
	$b=$_GET['numb'];
	function modulo ($a,$b)
	{
		if($a<0)
		{
			$d=$a%$b;
			$c=$d+$b;
		}
		else
			$c=$a%$b;
	 return $c;
	}
	$c=modulo($a,$b);
	echo "<!DOCTYPE html>
			<html lang='es'>
				<head>
					<meta charset='UTF-8'/>
					<title>Modulo</title>
					<link rel='stylesheet' type='text/css' href='../style/mod.css'/>
				</head>
				<body>
					<h1>Módulo</h1>
					<p>El modulo de ".$a."%".$b." es ".$c."</p>
					<a href='../templates/Inicio.html'>Inicio</a><br/>
				</body>
			</html>";
?>