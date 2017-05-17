<?php
	function decode ($cad)
	{
		$morsar=array('.'=>'a', '%'=>'b', '↔'=>'c','*'=>'d', '°'=>'e', '∟'=>'f', '|'=>'g', '↑'=>'h', '-'=>'i', '↨'=>'j','¿'=>'k', '+'=>'l', '='=>'m', '('=>'n', '$'=>'o', '!'=>'p', '#'=>'q', '/'=>'r', '"'=>'s', ')'=>'t', '?'=>'u', 'x'=>'v', '@'=>'w', '§'=>'y');
		$a=strtr($cad, $morsar);
	return $a;
}
	function encode ($cad)
	{
		$morsar=array('a'=>'.', 'b'=>'%', 'c'=>'↔','d'=>'*', 'e'=>'°',  'f'=>'∟', 'g'=>'|', 'h'=>'↑', 'i'=>'-', 'j'=>'↨','k'=>'¿', 'l'=>'+', 'm'=>'=', 'n'=>'(', 'o'=>'$', 'p'=>'!', 'q'=>'#', 'r'=>'/', 's'=>'"', 't'=>')', 'u'=>'?', 'v'=>'x', 'w'=>'@', 'y'=>'§');
		$b=strtr($cad, $morsar);
	return $b;
}
		$dev=$_GET['mor'];
		$dec=strtolower($dev);
		$en=encode($dec);
	
		$de=decode($dec);

 echo "<!DOCTYPE html>
          <html lang='es'>
		<head>
			<meta charset='UTF-8'/>
			<title>Sistema codificacion</title>
			<link rel='stylesheet' type='text/css' href='../style/sist.css'/>
		</head>
		<body>
			<h1>Sistema de codificacion</h1>
			<p>La decodificacion de la palabra es ".$de."</p>
			<p>La codificacion de la palabra es ".$en."</p>
			<a href='../templates/Inicio.html'>Inicio</a><br/>
		</body>
	</html>";
?>