<?php
error_reporting(E_ERROR |  E_PARSE);

//recibe la info
$codigo = $_POST['codigo'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editorial = $_POST['editorial'];
$existencia = $_POST['cantidad'];


$xml = new DomDocument("1.0");  //maneja el esquema de documentos de la WEB
$xml->load('libros.xml');

$biblioteca = $xml->getElementsByTagName("biblioteca")->item(0);  //carga el XML con los nombres de etiqueta
$libro = $xml->createElement("libro");  //crea el nodo hijo


//crear los elementos dentro del nodo hijo
$x_codigo = $xml->createElement("codigo", $codigo);
$x_titulo = $xml->createElement("titulo", $titulo);
$x_autor = $xml->createElement("autor", $autor);
$x_editorial = $xml->createElement("editorial", $editorial);
$x_existencia = $xml->createElement("existencia", $existencia);

//agrego los elementos dentro del XML
$libro->appendChild($x_codigo);
$libro->appendChild($x_titulo);
$libro->appendChild($x_autor);
$libro->appendChild($x_editorial);
$libro->appendChild($x_existencia);

$biblioteca->appendChild($libro); //Agrego nodo padre
$xml->formatOutput = true; //actualizo el XML

$xml->save('libros.xml');
echo "<a href='../index.php'> Regresar  </a>";