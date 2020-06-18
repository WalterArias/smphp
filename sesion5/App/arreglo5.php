<?php

//array o vector
$animales =   array('gato','puma','pantera','leon','tigre de tasmania');
 
echo '<hr>';
echo 'IMPRESION CON EL CONTENIDO DE CADA POSICION';
echo '<hr>';
foreach ($animales as $valor) {
    echo $valor.'<br>';
};

echo '<hr>';
echo 'IMPRESION CON EL CONTENIDO DE CADA POSICION Y SU INDICE';
echo '<hr>';
foreach ($animales as $index =>$valor) {
    echo $index.'=>'.$valor.'<br>';
};