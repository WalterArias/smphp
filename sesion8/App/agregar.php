<?php
error_reporting(E_ERROR |  E_PARSE);

$codigo = $_POST['codigo'];
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editorial = $_POST['editorial'];
$existencia = $_POST['cantidad'];


$xml = new DomDocument("1.0");
$xml->load('libros.xml');

$biblioteca = $xml->getElementsByTagName("biblioteca")->item(0);
$libro = $xml->createElement("libro");

$x_codigo = $xml->createElement("codigo", $codigo);
$x_titulo = $xml->createElement("titulo", $titulo);
$x_autor = $xml->createElement("autor", $autor);
$x_editorial = $xml->createElement("editorial", $editorial);
$x_existencia = $xml->createElement("existencia", $existencia);


$libro->appendChild($x_codigo);
$libro->appendChild($x_titulo);
$libro->appendChild($x_autor);
$libro->appendChild($x_editorial);
$libro->appendChild($x_existencia);
$biblioteca->appendChild($libro);
$xml->formatOutput = true;

$xml->save('libros.xml');
echo "<a href='../index.php'> Regresar  </a>";