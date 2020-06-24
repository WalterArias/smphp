<?php


/**
 * Saludar : Funcion que devuelve un saludo
 *
 * @return string
 **/
function Saludar(string $nombre, string $apellido, int $edad):string
{
    return 'Hola, cordial saludo :'.$nombre.$apellido.$edad;
}

echo Saludar('Juan', 'Perez', 35);   //Invocamos la funcion pasandole los parametros recibidos