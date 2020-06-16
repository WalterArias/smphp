<?php

//inicializacion de variables
 $contador =0;
 $bandera =$_POST['bandera'];

do {
    echo $contador.'<br>';
    $contador = $contador + 1;
    //$contador++;
} while ($contador <= $bandera);




 echo"<br>";
 echo "<a href='../hagamientras.html'>  REGRESAR</a>";
