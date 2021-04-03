<?php
$datos = file_get_contents("inventario.txt") or die('No existe el archivo');
echo '<pre>';
date_default_timezone_set("America/Bogota");
echo "Consulta de Inventarios\n";
echo 'Fecha de Consulta : '.date('Y-m-d h:i:s');
echo '<pre>';
echo $datos;