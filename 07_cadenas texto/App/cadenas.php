<?php
/*
Funciones PREDEFINIDAS en PHP
para manejo de cadenas (String)
REFERENCIA COMPLETA : https://www.php.net/manual/es/ref.strings.php
*/

//EJEMPLOS MAS USADOS

$texto = '  tres tristes Tigres Comen TRIGO en tres tristes PLATOS ';

echo trim($texto);   //quita espacios en blanco al principio y al final
echo '<br>';
echo strlen($texto);   //cuenta la cantidad de caracteres
echo '<br>';
echo str_replace("tristes", "xxyy", $texto);   //reemplaza una frase por otra en una cadena
echo '<br>';
echo strtolower($texto);   //pone toda la cadena en minuscula
echo '<br>';
echo strtoupper($texto);   //pone toda la cadena en mayuscula
echo '<br>';
echo str_shuffle($texto);
echo '<br>';
echo substr($texto, 15, 5);
echo '<br>';
$arreglo = explode(" ", $texto);
print_r($arreglo);
echo '<br>';
echo '<br>';
$texto2 = 'valentina';
echo ucfirst($texto2);
echo '<br>';
//=================================================================================

$password = 'walter123';
echo password_hash($password, PASSWORD_DEFAULT);
echo '<br>';
echo '<br>';

//==================================================================================

$valor =1000000;
echo number_format($valor, 2);
echo '<br>';
echo '$'.number_format($valor, 2);