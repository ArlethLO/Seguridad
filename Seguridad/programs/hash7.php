<?php
	function playf ($cad)
	{
		$per=substr($cad, 2, -2);
		return "3odf".$per."la";
	}
	$cad=$_GET['contra'];
	$cade=playf($cad);
	echo "<!DOCTYPE html>
          <html lang='es'>
		<head>
			<meta charset='UTF-8'/>
			<title>HASH</title>
		<link rel='stylesheet' type='text/css' href='../style/hash.css'/>
		</head>
		<body>
		<h1>HASH</h1>";
	echo "<p>Su hash es <mark>".$cade."</mark></p>
	<a href='../templates/Inicio.html'>Inicio</a><br/>
	</body>
	</html>";
?>