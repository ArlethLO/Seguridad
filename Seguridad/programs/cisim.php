<?php
	function cifs ($cad, $ll)
	{
		$abc=array('a', 'b', 'c','d', 'e',  'f', 'g', 'h', 'i', 'j','k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'y', 'z', 'a','b', 'c','d');
		$c=str_split($cad);
		$con=count($c);
		$co=$con-1;
		$in=0;
		if($co!=29)
			for($i=$co+1; $i<=24; $i++)
				$c[$i]=' ';
		for($a=0; $a<=24; $a++)
			for($b=0; $b<=24; $b++)
			{
				if($abc[$b]==$c[$a])
				{
					$q=$b+$ll;
					$n[$in]=$abc[$q];
					$in++;
				}
			}
		$cif=implode($n);
		return $cif;
	}
$cad=$_GET['cad'];
$llav=$_GET['ll'];
$ci=cifs($cad, $llav);
echo "<link rel='stylesheet' type='text/css' href='../style/cif.css'/>
			<h1>Cifrado Simetrico</h1>
			<p>El mensaje fue ".$cad."<br/>
			<p>Con  Cifrado Simetrico es <mark>".$ci."</mark></p>
			<a href='../templates/Inicio.html'>Inicio</a><br/>";
?>