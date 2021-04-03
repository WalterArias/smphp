<?php


//arreglo definicion clasica
//$felinos= array('tigre','leon','pantera','puma','lince','gato');
//arreglo definicion moderna
$felinos= ['tigre','leon','pantera','puma','lince','gato'];


//impresion de posicion especifica
echo '<br>';
echo '<hr>';
echo 'IMPRESIÓN POSICIÓN ESPECIFICA: '.'<br>';
echo $felinos[2];
echo '<br>';
echo $felinos[5];
echo '<hr>';
 



//impresion total del arreglo
//echo $frutas;  //genera un error ....
//forma 1
echo '<br>';
echo '<hr>';
echo 'IMPRESIÓN CON PRINT_R : '.'<br>';
print_r($felinos);
echo '<br>';
echo '<hr>';
echo '<br>';
//forma 2
echo '<hr>';
echo 'IMPRESIÓN CON VAR_DUMP : '.'<br>';
var_dump($felinos);
echo '<hr>';