<?php


//recibo valores del formulario
$valor1= $_POST['dato1'];
$valor2 = $_POST['dato2'];



if ($valor1>$valor2) {
    echo 'SI SON DIFERENTES !';
} else {
    echo  'SON IGUALES';
}