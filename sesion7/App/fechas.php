<?php
/*
===SELLO CRONOLOGIO O TIMESTAMP DE UNIX ====

el valor de sello cronológico de UNIX para cualquier punto en el tiempo, representa
la cantidad de segundos que han transcurrido desde la medianoche del 1 de enero de
1970 y el momento actual. De esa manera, por ejemplo, el punto del tiempo ubicado el 5 de
enero de 2008 a las 10:15:00 a.m. se representa en formato de sello cronológico de UNIX con
el formato 1199508300.
PHP puede convertir automáticamente un valor de fecha en el formato de sello cronológico
de UNIX con la función mktime() o time(), que acepta argumentos para día, mes, año, hora,
minuto y segundo, para regresar el sello cronológico correspondiente a ese instante.
UNIX fue uno de los primeros sistemas operativos del mundo */

//echo mktime();  //depreciada a partir de la version 7

//echo time();
//date_default_timezone_set("Pacific/Rarotonga");
date_default_timezone_set("America/Bogota");
echo '<br>';
//echo date('Y-m-d');
//echo date('Y-m-d h:i:s');
/* echo date("l");


echo date(DATE_RFC2822);
echo '<br>';
echo '<hr>'; */

//============  FORMATEO GENERAL DE FECHAS  ==============

//$hoy = date("F j, Y, g:i A");
//$hoy = date("m.d.y");
//$hoy = date("j, n, Y");
//$hoy = date("Ymd");
//$hoy = date('\E\s \e\l jS \d\i\a.');
//$hoy = date("D M j G:i:s T Y");
//$hoy = date("H:i:s");

echo $hoy;