<?php
include_once('plantilla/header.php');
?>

<section>
    <form action="App/agregar.php" method="POST">
        <h2>Agregar Libro</h2>
        <label for="titulo">Ingresa el código:</label>
        <input type="text" name="titulo" placeholder="Ingresa el codigo" />
        <label for="autor">Ingresa la descripción:</label>
        <input type="text" name="autor" placeholder="Ingresa Descripcion del Producto" />
        <label for="editorial">Ingresa el precio de venta;</label>
        <input type="text" name="editorial" placeholder="Ingresa precio de venta del Producto" />
        <label for="fpublica">Ingresa el precio de venta;</label>
        <input type="text" name="fpublica" placeholder="Ingresa precio de venta del Producto" />
        <label for="cantidad">Ingresa el precio de venta;</label>
        <input type="text" name="cantidad" placeholder="Ingresa precio de venta del Producto" />
        <br /><br />
        <input type="submit" class="boton" value="Enviar" />
    </form>
</section>

<?php
include_once('plantilla/footer.php');
?>