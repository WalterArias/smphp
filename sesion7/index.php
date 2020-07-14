<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />

    <title>Seminario PHP</title>
    <link rel="stylesheet" href="Assets/css/style.css" />
</head>

<body>
    <section>
        <?php
        date_default_timezone_set("America/Bogota");  //setea zona horaria
        echo 'hoy es : '. date('Y-m-d h:i:s');  //hora y fecha rfc

      ?>
        <article>
            <h1>FUNCIONES PREDEFINIDAS EN PHP</h1>

            <br />
            <a href="app/cadenas.php">
                FUNCIONES MANIPULAR CADENAS DE TEXTO STRING</a>
            <br />
            <a href="app/sprintf.php">
                FORMATEAR CADENAS DE TEXTO CON SPRINTF O PRINTF</a>
            <br />
            <a href="app/arreglos.php"> FUNCIONES PARA EL MANEJO DE ARREGLOS</a>
            <br />
            <a href="app/fechas.php"> FUNCIONES PARA EL MANEJO DE HORA Y FECHA</a>
            <br />
            <a href="app/xxx.php"> FUNCIONES PARA EL MANEJO IMAGENES</a>
            <br />
            <a href="app/xxx.php">
                FUNCIONES PARA EL MANEJO ARCHIVOS Y SUBDIRECTORIOS</a>
            <br />
            <a href="app/xxx.php">
                FUNCIONES PARA EL MANEJO DE COOKIES Y SESSIONES</a>
            <br />
            <a href="app/xxx.php"> FUNCIONES PARA EL MANEJO DE BASES DE DATOS</a>
            <br />
        </article>

        <article>
            <h1>MATERIAL DE APOYO</h1>
            <br />
            <br />
            <a href="https://www.php.net/manual/es/indexes.functions.php" target="a_blank">
                VER MATERIAL DE APOYO
            </a>
        </article>
    </section>
</body>

</html>