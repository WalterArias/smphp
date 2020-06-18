<?php

//arreglo anidado o Matriz

$animales =  array(
array('gato','puma','pantera'),
array('delfin','ballena','tiburon'),
array('aguila','condor','colibri'),
array('escarabajo','cienpies','grillo')
);


//Manipular lA MATRIZ

$animales[0][1]='tigre tazmania';
$animales[1][0]='bagre';
$animales[3][2]='cucaracha';





//impresion del arreglo
echo '<hr>';
echo 'ARREGLO ASOCIATIVO : '.'<br>';
echo '<hr>';
var_dump($animales);
echo '<hr>';
print_r($animales);
echo '<hr>';