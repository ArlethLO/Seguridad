<?php
  function strToBin($input)
  {
    if (!is_string($input))
      return false;
  $value = unpack('H*', $input);
    return bindec(base_convert($value[1], 16, 2));
  }
  function xorr ($dec, $llave)
  {
	  $deci=str_split($dec);
	  echo "<br/>";
	  $decc=implode($deci);
	  echo "<label>".$dec."</label>";
	  $llav=str_split($llave);
	  echo "<br/>";
	  $lal=implode($llav);
	  echo "<label>".$lal."</label>";
	  for($i=0; $i<7; $i++)
	  {
		  if($deci[$i]==$llav[$i])
			  $xo[$i]=0;
		  else
			  $xo[$i]=1;
	  }
	  echo "<br/>";
	  echo "<br/>";
	  $xx=implode($xo);
	  echo "<label> ".$xx."</label>";
  }
  $e=$_GET['let'];
  $l=$_GET['llav'];	  
  $letra=strToBin($e);
  echo "<h1>Cifrado XOR</h1>";
  echo "<link rel='stylesheet' type='text/css' href='../style/xor.css'/>
		<label>La letra en decimal es ".$letra."<label>";
  $de=decbin($letra);
  xorr($de, $l);
  echo "<br/><a href='../templates/Inicio.html'>Inicio</a>";
?>