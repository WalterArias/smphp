<?php
$saludar = fn () => 'Hola que tal !<br>';


$sumar = fn (int $x, int $y) => $x+$y;

$operaciones = fn(int $x, int $y)=>
[
   $x+$y;
   $x-$y;
   $x*$y;
   $x/$y;

];



echo $saludar();
echo $sumar(8, 3);
echo $operaciones(5,2);