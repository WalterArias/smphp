<?php


//recibo valores del formulario
$valor1= $_POST['dato1'];
$valor2 = $_POST['dato2'];


 //estructura de decision sencilla
if ($valor1<>$valor2) {
    echo 'Los Valores ingresados SON diferentes !';
} else {
    echo 'Los Valores SON Iguales !';
}

echo "<br>";
echo "<a href='../estruct.html'>  REGRESAR</a>";