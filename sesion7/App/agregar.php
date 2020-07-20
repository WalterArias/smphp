<?php
$codigo = $_POST['codigo'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];

$agrega = "$codigo\n"."$descripcion\n"."$precio\n";
file_put_contents('inventario.txt', $agrega, FILE_APPEND) or die('ERROR: No es posible
escribir en el archivo');
header('Location:..\inventario.html');