<?php

$numero=8129;
for ($i=2;$i==$numero;$i++)

$acumanterior=0;
$contador=1;

{ 
	
	for($contador=1;$contador<$i;$contador++)
	{
		if($numero%$contador==0)
		{
			$acumanterior=$acumanterior+$contador;
		}
	}
	if($i==$acumanterior)
		{
			echo $i;
			echo"Es Perfecto";
		}
	else
		{
			echo $i;
			echo"No es Perfecto";
		}
}		