<?php
include_once('plantilla/header.php');
?>

<h1>LISTADO DE LIBROS DISPONIBLES</h1>
<table>
    <th>CODIGO</th>
    <th>TITULO</th>
    <th>AUTOR</th>
    <th>EDITORIAL</th>
    <th>CANTIDAD EXISTENTE</th>
    <th>BORRAR</th>
    <th>EDITAR</th>


    <?php
    $xml = simplexml_load_file("app/libros.xml");   //crea variable y carga el archivo
    foreach ($xml->libro as $libro) {
        echo "<tr>";
        echo "<td>";
        echo $libro->codigo;
        echo "</td>";
        echo "<td>";
        echo $libro->titulo;
        echo "</td>";
        echo "<td>";
        echo $libro->autor;
        echo "</td>";
        echo "<td>";
        echo $libro->editorial;
        echo "</td>";
        echo "<td>";
        echo $libro->existencia;
        echo "</td>";
        echo "<td>";
        echo "<a href =app/borrar.php?codigo=$libro->codigo>Borrar</a>";
        echo "</td>";
        echo "</tr>";
    }

    ?>

</table>

<?php
include_once('plantilla/footer.php');
?>