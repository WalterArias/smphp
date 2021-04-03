<?php

$datos = file_get_contents("datos.txt") or die('No existe el archivo');
echo '<pre>';
echo $datos;

//manipular el archivo
$agrega ="\n arroz  \na zorra \n abad";
file_put_contents('datos.txt', $agrega, FILE_APPEND) or die('ERROR: No es posible
escribir en el archivo');


$datos = file_get_contents("datos.txt") or die('No existe el archivo');
echo '<pre>';
echo $datos;