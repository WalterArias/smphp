<?php


//recibo valores del formulario
$valor1= $_POST['dato1'];
$valor2 = $_POST['dato2'];


 //estructura de decision sencilla
if ($valor1>$valor2) {
    echo 'El Valor 1 es mayor que el Valor 2!';
}

echo "<br>";
echo "<a href='../simple.html'>  REGRESAR</a>";