<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orientado a Objetos con PHP</title>
</head>

<body>
    <pre>
    <?php
      require_once('Vehiculo.php');
      $camion = new Vehiculo(2, 2500, 18, 'XYZ85');
      echo $camion ->mostrarInformacion();
    
    ?>
</pre>
</body>

</html>