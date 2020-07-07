<?php

$n =  43951789;
$u = -43951789;
$c = 65; // ASCII 65 es 'A'

// observar el doble %%, esto muestra un carácter '%' literal
printf("%%b = '%b'\n", $n); // representación binaria
echo '<br>';
printf("%%c = '%c'\n", $c); // muestra el carácter ascii, igual que la función chr()
echo '<br>';
printf("%%d = '%d'\n", $n); // representación estándar de un entero
echo '<br>';
printf("%%e = '%e'\n", $n); // notación científica
echo '<br>';
printf("%%u = '%u'\n", $n); // representación sin signo de un entero positivo
echo '<br>';
printf("%%u = '%u'\n", $u); // representación sin signo de un entero negativo
echo '<br>';
printf("%%f = '%f'\n", $n); // representación de punto flotante
echo '<br>';
printf("%%o = '%o'\n", $n); // representación octal
echo '<br>';
printf("%%s = '%s'\n", $n); // representación en una cadena
echo '<br>';
printf("%%x = '%x'\n", $n); // representación hexadecimal (minúsculas)
echo '<br>';
printf("%%X = '%X'\n", $n); // representación hexadecimal (mayúsculas)
echo '<br>';
printf("%%+d = '%+d'\n", $n); // especificador de signo sobre un entero positivo
echo '<br>';
printf("%%+d = '%+d'\n", $u); // especificador de signo sobre un entero negativo