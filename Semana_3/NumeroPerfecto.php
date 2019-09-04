<?php
$acumanterior=0;
$numero=8129;

for($contador=1;$contador<$numero;$contador++)
{
	if($numero%$contador==0)
	{
		$acumanterior=$acumanterior+$contador;
	}
}
if($numero==$acumanterior)
	{
		echo"Es Perfecto";
	}
else
	{
		echo"No es Perfecto";
	}