<?php
	$valida='/^[4][0-9]{15}$/';
	function valdi ($v)
	{
		$calcul=($v[0]*2);
		$calculo=array($v[1], $v[3], $v[5], $v[7], $v[9], $v[11], $v[13]);
		$calcula=array($v[2]*2, $v[4]*2, $v[6]*2, $v[8]*2, $v[10]*2 , $v[12]*2, $v[14]*2);
		for($i=0; $i<=6; $i++)
		{
			if($calcula[$i]==10)
				$in[$i]=5;
			else
				if($calcula[$i]==12)
				$in[$i]=3;
				else
					if($calcula[$i]==14)
						$in[$i]=5;
					else
						if($calcula[$i]==16)
							$in[$i]=7;
						else
							if($calcula[$i]==18)
								$in[$i]=9;
							else
								$in[$i]=$calcula[$i];
		}
		$suma=($calcul+$calculo[0]+$calculo[1]+$calculo[2]+$calculo[3]+$calculo[4]+$calculo[5]+$calculo[6]+$in[0]+$in[1]+$in[2]+$in[3]+$in[4]+$in[5]+$in[6]);
		while($suma>9)
			$suma=$suma-10;
		$res=10-$suma;
		return $res;
	}
	echo "<!DOCTYPE html>
			<html lang='es'>
				<head>
					<meta charset='UTF-8'/>
					<title>VISA</title>
					<link rel='stylesheet' type='text/css' href='../style/cfs.css'/>
				</head>
				<body>
					<h1>VISA</h1>
					<p>Introduce tu VISA</p>
					<form method='get' action='Visa.php'>
						<p><input type='text' name='visa'/>
						<input type='submit'/></p>
					</form>";
					if(isset($_GET['visa']))
					{
						$vi=$_GET['visa'];
						$a=preg_match($valida, $vi);
						if($a==1)
						{
							$ar=str_split($vi);
							$s=valdi($ar);
							if($ar[15]==$s)
								echo "<p class='v'>VISA valida</p>";
							else
								echo "<p>Visa incorrecta</p>";
						}
						else
							echo "<p>No valida</p>";
					}
	echo		"<a href='../templates/Inicio.html'>Inicio</a><br/>
				</body>
			</html>";
?>