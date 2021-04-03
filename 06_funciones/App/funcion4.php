<?php
error_reporting(E_ERROR | E_PARSE);

DEFINE(PI, 3.1416);   // definición de una constante en PHP


$radio =$_POST['radio'];  //valor que envia el formulario


/**
 * calcularArea
 *
 * @param  mixed $radio
 * @return float
 */
function calcularArea(float $radio) : float
{
    $area = PI*pow($radio, 2);   //PI *RADIO AL CUADRADO
    return $area;
}

/**
 * calcularPerimetro
 *
 * @param  mixed $radio
 * @return float
 */
function calcularPerimetro(float $radio) : float
{
    $perimetro = 2*PI*$radio;
    return $perimetro;
}


echo 'el Area del circulo es:'.calcularArea($radio);
echo '<br>';
echo 'el Perimetro del circulo es:'.calcularPerimetro($radio);