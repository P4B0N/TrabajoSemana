/*Numeros Primos:mostrar todos los numeros primos del 1 al 1000
<?php
$numero=0;
$bandera=0;

for ($numero=1;$numero<1000;$numero++)
{
	for($i=2;$i<$numero;$i++)
	{
		if($numero%$i==0)
		{
			$bandera++;
		}	
	}
}

if($bandera==0)
{
	echo "es primo"."<br>";
}else
{
    echo "no es primo";
}
}