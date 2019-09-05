<?php
//echo "hola"
//var_dump($_GET)
echo"Su nomre es ".$_GET["Nombre"];
echo"<br>Su apellido es ".$_GET["Apellido"];


$miobjeto=new stdClass();
$miobjeto->Nombre=$_GET['Nombre'];
//$miobjeto->Apellido=$_GET['Apellido'];
var_dump(json_encode($miobjeto));
$archivo=fopen('usuarios.txt','w');
fwrite($archivo,json_encode($miobjeto)."\n");
//fwrite($archivo,$_GET['Apellido']."\n");
fclose($archivo);
var_dump($miobjeto);
?>