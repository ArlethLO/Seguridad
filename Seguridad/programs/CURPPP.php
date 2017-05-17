<?php
	echo "<link rel='stylesheet' type='text/css' href='../style/curp.css'/>";
	function substrae (&$variable1, $variable, $inicio, $valores)
	{
		$variable1=substr($variable,$inicio,$valores);
		return $variable1;
	}
	function acentos ($acen)
	{
		$acent=array('á', 'é', 'í', 'ó', 'ú');
		$valid=array('a', 'e', 'i', 'o', 'u');
		$nombr=str_ireplace($acent,$valid,$acen);
	return $nombr;
	}
	function consmed ($cadena)
	{
		$i=1;//aqui
		while($cadena[$i]=='A'|$cadena[$i]=='E'|$cadena[$i]=='I'|$cadena[$i]=='O'|$cadena[$i]=='U')
				$i++;
		$prueba=$cadena[$i];
		return $prueba;
	}
	/*function edad ($año, $mes)
	{
		$ed=2017-$año;
		if ($mes>5)
		{
			$eda=$ed-1;
			return $eda;
		}
		else
		return $ed;
	}*/
	function penul ($año)
	{
		if($año>=2000)
			return $pe="A";	
		else
			return $pe="0";
	}
	function ultver ($a, $b)
	{
		$equival=array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'Ñ', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
		for($i=0; $i<=36; $i++)
			if($a==$equival[$i])
				$al=(array_keys($equival,$a));
			$an=$al[0]*$b;
		return $an;
	}
	echo "<h1>CURP</h1>";
	//Nombre
	$name=$_GET['nom'];
	$nombr=strtoupper(acentos($name));
	$nomv=$nombr;
	echo "<br/><h2>Nombre:</h2>".$nombr."<br/><br/><br/>";
	echo "<h2>Curp:</h2>";
	$nomap=strstr($nombr, ' ', TRUE);
	echo substrae($nom1 ,$nomap, 0,1);
	$a1=ultver($nom1, 18);
	//echo "<br/>".$a1;
	$i=1;
	while($nomv[$i]!='A'&& $nomv[$i]!='E' && $nomv[$i]!='I' && $nomv[$i]!='O' && $nomv[$i]!='U')
				$i++;
		$voc=$nomv[$i];
	echo $voc;
	$a2=ultver($voc, 17);
	$nomat=trim(strstr($nombr, ' '));
	$nomnom=trim(strstr($nomat, ' '));
	substrae($nom2,$nomat,0,1);
		echo $nom2;
	$a3=ultver($nom2, 16);
	substrae($nom3,$nomnom,0,1);
		echo $nom3;
	$a4=ultver($nom3, 15);
	//Año
	$fec=$_GET['fechnac'];
	echo substrae($fecaño,$fec,2,2);
	$a5=ultver(substr($fecaño, 0,1), 14);
	$a6=ultver(substr($fecaño, 1,1), 13);
	echo substrae($fecmes,$fec,5,2);
	$a7=ultver(substr($fecmes, 0,1), 12);
	$a8=ultver(substr($fecmes, 1,1), 11);
	echo substrae($fecdia,$fec,8,2);
	$a9=ultver(substr($fecdia, 0,1), 10);
	$a10=ultver(substr($fecdia, 1,1), 9);
	if(isset($_GET['sexo']))
	{
		$sex=$_GET['sexo'];
		if($sex=='hombre')
			$sex='H';
			else
				$sex='M';
		echo $sex;
		$a11=ultver($sex, 8);
	}
	else
		echo "Falta dato de sexo";
	$est=$_GET['estados'];
	echo $est;
	$a12=ultver(substr($est, 0,1), 7);
	
	$a13=ultver(substr($est, 1,1), 6);
	//AQui
	$nomapl=consmed($nomap);
	echo $nomapl;
	$a14=ultver($nomapl, 5);
	$nomatl= consmed($nomat);
	echo $nomatl;
	$a15=ultver($nomatl, 4);
	$nomnoml= consmed($nomnom);
	echo $nomnoml;
	$a16=ultver($nomnoml, 3);
	$pe=penul(substrae($fecaño,$fec,0,4));//Penultima
	echo $pe;
	$a17=ultver($pe, 2);
	//Letrs de enmedio
	substrae($fechmes,$fec,5,2);
	substrae($año,$fec,0,4);
	//echo "<h2>Edad:</h2>".edad($año, $fechmes);
	$ve=($a1+$a2+$a3+$a4+$a6+$a7+$a8+$a9+$a10+$a11+$a12+$a13+$a14+$a15+$a16+$a17);
	$va=$ve%10;
	if(substrae($fecpru,$fec,0,4)>=2000)
		$dv=abs($va-10);
	else
		$dv=abs($va-2);
	if($dv==10)
			$dv=0;
	echo $dv."<br/><a href='../templates/Inicio.html'>Inicio</a><br/>";
?>