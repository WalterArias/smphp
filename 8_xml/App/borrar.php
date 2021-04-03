<?php

$xml = new DOMDocument("1.0");
$xml->load('libros.xml');
$codigo = $_GET['codigo'];

$arbol = new DOMXPath($xml);    //Carga la estructura del xml

foreach ($arbol->query("/biblioteca/libro[codigo = $codigo]") as $nodo) {
    $nodo->parentNode->removeChild($nodo);
}
$xml->formatOutput = true;
$xml->save('libros.xml');
echo "registro Eliminado !";
echo "<a href='../index.php'> Regresar  </a>";