<?php

//arreglo definicion moderna
$felinos= ['tigre','leon','pantera','puma','lince','gato','jaguar'];

 //manipulacion del arreglo
$felinos[2] = 'gato de porcelana';
$felinos[5] = 'chetah';



//borrado de posicion
unset($felinos[0]);
 


//impresion del arreglo
echo '<hr>';
echo 'ARREGLO MODIFICADO : '.'<br>';
print_r($felinos);
echo '<hr>';
echo 'el arreglo tiene '.count($felinos) .' posiciones';