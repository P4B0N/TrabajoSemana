<?php
$miobjeto=new stdClass();
$miobjeto->Nombre=$_GET['Nombre'];
$miobjeto->Apellido=$_GET['Apellido'];

$archivo=fopen('usuarios.txt','a');
fwrite($archivo,json_encode($miobjeto)."\n");
fclose($archivo);
?>