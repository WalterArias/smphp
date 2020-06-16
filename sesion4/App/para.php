<?php

//inicializacion de variables
 $contador =0;
 $bandera =$_POST['bandera'];

for ($i=0; $i < $bandera; $i++) {
    $contador++;
    echo $contador.'<br>';
}


 echo"<br>";
 echo "<a href='../para.html'>  REGRESAR</a>";
