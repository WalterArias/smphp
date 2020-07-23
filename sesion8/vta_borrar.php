<?php
include_once('plantilla/header.php');
?>

<section>
    <form action="App/agregar.php" method="POST">
        <h2>Agregar Libro</h2>
        <label for="codigo">Ingresa el código:</label>
        <input type="text" name="codigo" placeholder="Ingresa el codigo" />
        <label for="descripcion">Ingresa la descripción:</label>
        <input type="text" name="descripcion" placeholder="Ingresa Descripcion del Producto" />
        <label for="precio">Ingresa el precio de venta;</label>
        <input type="text" name="precio" placeholder="Ingresa precio de venta del Producto" />
        <br /><br />
        <input type="submit" class="boton" value="Enviar" />
    </form>
</section>

<?php
include_once('plantilla/footer.php');
?>