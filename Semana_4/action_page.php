<?php
//echo "hola"
//var_dump($_GET)
echo"Su nomre es ".$_GET["Nombre"];
echo"<br>Su apellido es ".$_GET["Apellido"];
$archivo=fopen('usuarios.txt','w');
fwrite($archivo,$_GET['Nombre']."\n");
?>