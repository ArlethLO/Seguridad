<?php
	$n=$_GET['num'];
	$cad=$_GET['cad'];
	echo "<link rel='stylesheet' type='text/css' href='../style/playf.css'/>
		<h1>PlayFair n</h1>
		<p>La cadnea inicial es ".$cad."</p>";
	$a=str_split($cad);
	$newa=array_chunk($a, $n);
	$contarr=count($a);
	$ren=ceil($contarr / $n);
	echo "<p>Aplicando el Payfair n es ";
	for($i=0; $i<$n; $i++)
		foreach($newa as $lq)
			if(isset($lq[$i]))
				print_r($lq[$i]);
	echo "<br/><img src='../resources/images/pla.jpg'></p>
	<a href='../templates/Inicio.html'>Inicio</a>";
?>
