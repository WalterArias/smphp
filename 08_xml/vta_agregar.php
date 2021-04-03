<?php
include_once('plantilla/header.php');
?>

<section>
    <form action="App/agregar.php" method="POST">
        <h2>Agregar Libro</h2>
        <label for="codigo">Codigo:</label>
        <input type="text" name="codigo" placeholder="Ingresa codigo" />
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" placeholder="Ingresa el codigo" />
        <label for="autor">Autor</label>
        <input type="text" name="autor" placeholder="Ingresa Descripcion del Producto" />
        <label for="editorial">Editorial</label>
        <input type="text" name="editorial" placeholder="Ingresa precio de venta del Producto" />
        <label for="cantidad">Cantidad</label>
        <input type="text" name="cantidad" placeholder="Ingresa precio de venta del Producto" />
        <br /><br />
        <input type="submit" class="boton" value="Enviar" />
    </form>
</section>

<?php
include_once('plantilla/footer.php');
?>