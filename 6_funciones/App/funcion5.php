<?php
error_reporting(E_ERROR | E_PARSE);
DEFINE(PI, 3.1416);   // definición de una constante en PHP

$radio =$_POST['radio'];  //valor que envia el formulario

$calcularArea = function (float $radio) : float {
    $area = PI*pow($radio, 2);
    return $area;
};

$calcularPerimetro = function (float $radio) : float {
    $perimetro = 2*PI*$radio;
    return $perimetro;
};


echo 'el Area del circulo es:'.$calcularArea($radio);
echo '<br>';
echo 'el Perimetro del circulo es:'.$calcularPerimetro($radio);