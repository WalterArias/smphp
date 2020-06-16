<?php

//inicializacion de variables
 $contador =0;
 $bandera =$_POST['bandera'];

 while ($contador <= $bandera) {
     echo $contador.'<br>';
     $contador = $contador+1;
     //$contador++;
 }

 echo"<br>";
 echo "<a href='../mientras.html'>  REGRESAR</a>";
