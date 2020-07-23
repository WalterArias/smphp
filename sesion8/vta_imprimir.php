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
    <th>ACCION</th>
    <th>ACCION</th>


    <?php
    $xml = simplexml_load_file("app/libros.xml");

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
        echo "<a href =logica/borrar.php?id=$libro->id><i class='material-icons md-dark'>delete</i></a>";
        echo "</td>";
        echo "<td>";
    
        echo "<a href =logica/editar.php?id=$libro->id> <i class='material-icons md-dark'>edit</i></a>";
        echo "</td>";
        echo "</tr>";
    }

    ?>

</table>

<?php
include_once('plantilla/footer.php');
?>