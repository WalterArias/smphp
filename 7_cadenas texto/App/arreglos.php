<?php
/*
Recopilación de algunas de las funciones mas representativas para el manejo
de arreglos
*/
//Reordena aleatoriamente una secuencia de elementos dentro de la matriz
/* $frutas = ['mango','papaya','melon','sandia','mango','toronja','pomelo'];
shuffle($frutas);
echo '<pre>';
print_r($frutas); */


 //invierte una secuencia de elementos dentro de la matriz
/* $frutas = ['mango','papaya','melon','sandia','mango','toronja','pomelo'];
$nuevo = array_reverse($frutas);
echo '<pre>';
print_r($nuevo); */


//Extrae elementos dentro de la matriz
/* $frutas = ['mango','papaya','melon','sandia','mango','toronja','pomelo'];
$nuevo = array_slice($frutas, 4, 2);
echo '<pre>';
print_r($nuevo); */


//llenado automatico de matriz
/* $numeros = range(1, 10);
echo '<pre>';
print_r($numeros);
/*   $numeros = [63,5,87,2,1,17,11,8];
echo 'el valor mínimo de la matriz es:'.min($numeros).' '.'el valor máximo de la matriz es:'.max($numeros);

 */
//agregar elementos al principio y al final   ==ojo== solo funciona con matrices indexadas

/* $ciudades =['Cali','Pereira','Tulua','Medellin'];
//array_shift($ciudades);
//array_pop($ciudades);
/* echo '<pre>';
print_r($ciudades);
//array_unshift($ciudades, 'Bucaramanga');
array_push($ciudades, 'Bogota');
echo '<pre>';
print_r($ciudades);
 */
/*
//Elementos duplicados
$ciudades =['Cali','Pereira','Tulua','Medellin','Pereira','Medellin'];
$nuevo = array_unique($ciudades);
echo '<pre>';
print_r($nuevo);
 */

//busquedas DE VALORES dentro del arreglo
 /* $ciudades =['Cali','Pereira','Tulua','Medellin'];
 echo '<pre>';
print_r($ciudades);
//echo in_array('Tulua', $ciudades);  //true o false   1 0 o NULL

if (in_array('Tulua', $ciudades)) {
    echo 'la ciudad buscada SI existe en el arreglo';
} else {
    echo 'la ciudad buscada NO existe en el arreglo';
} */

//busquedas DE INDICES  dentro del arreglo
/*  $colombia = array(
   'Valle' => 'Cali',
   'Risaralda' => 'Pereira',
   'Boyaca' => 'Tunja',
   'Bolivar' => 'Cartagena',
   'Cauca' => 'Popayan'
);
echo '<pre>';
print_r($colombia);
// echo array_key_exists('Boyaca', $colombia);

 if (array_key_exists('Bolivar', $colombia)) {
     echo 'el indice buscado SI existe en el arreglo';
 } else {
     echo 'el indice buscado NO existe en el arreglo';
 } */

//ORDENAMIENTO DE MATRICES

/* $numeros = [63,5,87,2,1,17,11,8];
sort($numeros);
echo '<pre>';
print_r($numeros); */

/* //ORDENAMIENTO DE MATRICES ASOCIATIVAS
 $colombia = array(
    'Valle' => 'Cali',
    'Risaralda' => 'Pereira',
    'Boyaca' => 'Tunja',
    'Bolivar' => 'Cartagena',
    'Cauca' => 'Popayan'
 );
//ksort($colombia);  //por indice o llave
asort($colombia);  //por valor
echo '<pre>';
print_r($colombia); */


//combinando matrices
/* $pasteles = ['rosa','lila','salmon','azul cielo'];
$basicos = ['azul','amarillo','rojo'];
$colores = array_merge($pasteles, $basicos);
echo '<pre>';
print_r($colores); */

//COMPARANDO MATRICES
//encuentra elementos comunes en las matrices
$pasteles = ['rosa','lila','salmon','azul cielo','blanco'];
$basicos = ['azul','amarillo','rojo', 'blanco'];
/* $comunes = array_intersect($pasteles, $basicos);
echo '<pre>';
print_r($comunes); */
//encuentra elementos de la primera matriz que no están en la segunda
/* $unico = array_diff($pasteles, $basicos);
echo '<pre>';
print_r($unico); */
 

//tambien puedo hacer
  if ($pasteles == $basicos) {
      echo 'son iguales';
  } else {
      echo 'NO son iguales';
  }