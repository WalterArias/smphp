<?php

//arreglo anidado o Matriz

//arreglo anidado o Matriz

$animales =  array(
    array('gato','puma','pantera'),
    array('delfin','ballena','tiburon'),
    array('aguila','condor','colibri'),
    array('escarabajo','cienpies','grillo')
    );
    
    foreach ($animales as $clave=>$fila) {
        print '<br/>';
        foreach ($fila as $dato2=>$columna) {
            print $columna.' | ';
        }
    }