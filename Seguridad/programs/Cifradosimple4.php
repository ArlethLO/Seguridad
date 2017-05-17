<?php
	function cifsim ($cad)
	{
		$c=substr($cad, 4);
		$cd=strrev(substr($cad, 0,4));
		return $c."5".$cd;
	}
	$valida='/^[0-9]{9}$/';
	echo "<!DOCTYPE html>
			<html lang='es'>
				<head>
					<meta charset='UTF-8'/>
					<title>Cifrado Simple</title>
					<link rel='stylesheet' type='text/css' href='../style/cfs.css'/>
				</head>
				<body>
					<h1>Número de cuenta</h1>
					<form method='get' action='Cifradosimple4.php'>
						<p><input type='text' maxlength='9' name='nocta'/>
						<input type='submit'/></p>
					</form>";
					if(isset($_GET['nocta']))
					{
						$cs=$_GET['nocta'];
						$a=preg_match($valida, $cs);
						if($a==1)
						{
							$cad=cifsim($cs);
		echo 				"<h1>Cifrado simple</h1>
							<p>El número de cuenta es ".$cs."</p>
							<p class='v'>Número de cuenta con cifrado simple es 345".$cad."45</p>";
						}
						else
							echo "<p>Solo numeros</p>";
					}
	echo		"<a href='../templates/Inicio.html'>Inicio</a><br/>
					</body>
			</html>";
?>