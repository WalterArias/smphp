<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];




/**
 * Saludar
 *
 * @param  mixed $nombre
 * @param  mixed $apellido
 * @param  mixed $edad
 * @return string
 */
function Saludar(string $nombre, string $apellido, int $edad):string
{
    return 'Hola, cordial saludo :'.$nombre.'  '.$apellido.' le felicito tiene usted: '.$edad.' años';
}

echo Saludar($nombre, $apellido, $edad);   //Invocamos la funcion pasándole los parametros recibidos