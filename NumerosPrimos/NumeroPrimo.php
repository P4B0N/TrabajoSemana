<?php
$numero;
$numero=7;
$bandera=0;
for($i=2;$i<$numero;$i++)
{
	if($numero%$i==0)
	{
		$bandera++;
	}
}

if($bandera==0)
{
	echo " es primo"."<br>";
}else
{
    echo " no es primo";
}