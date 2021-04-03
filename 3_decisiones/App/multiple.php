<?php


//recibo valores del formulario
$opcion= $_POST['dato1'];
 //estructura de decision multiple
switch ($opcion) {
        case '1':
           echo ' ORDENASTE PIZZA';
           
            break;
        case '2':
            echo ' ORDENASTE PERRO CALIENTE';
            break;
        case '3':
            echo 'ORDENASTE HAMBURGUESA';
            break;
        case '4':
            echo 'ORDENASTE DESGRANADO';
            break;
        case '5':
            echo ' ORDENASTE ENSALADA';
            break;
                                            
        default:
            echo ' Debe elegir una opción  VALIDA del menu !';
            break;
}

echo "<br>";
echo "<a href='../multiple.html'>  REGRESAR</a>";