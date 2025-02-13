<?php
session_start();
if (!isset($_SESSION['mascotas'])) {
    $_SESSION['mascotas'] = [];
}

if (isset($_REQUEST['nombre'])) {
    $nombre = $_REQUEST['nombre'];
    $tipo = $_REQUEST['tipo'];
    $edad = $_REQUEST['edad'];

     $_SESSION['mascotas'][$nombre] = [
        'Tipo' => $tipo,
        'Edad' => $edad
     ];    
}

$fecha = date("\#d-m-Y\#");

// print_r($_SESSION['mascotas']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 Index</title>
</head>
<body>
    <h1>Tienda de Mascotas</h1><br><hr>
    <h3>Fecha de hoy: <?= $fecha ?></h3>
    <form action="" method="post">
        <label for="Nombre">Nombre de la Mascota: </label>
        <input type="text" name="nombre" id="nombre"><br><br>
        <label for="tipo">Tipo de Animal: </label>
        <select name="tipo" id="tipo">
            <option value="Perro" selected>Perro</option>
            <option value="Gato">Gato</option>
            <option value="Canario">Canario</option>
            <option value="Hamster">Hamster</option>
            <option value="Loro">Loro</option>
            <option value="Nutria">Nutria</option>
            <option value="Tortuga">Tortuga</option>
        </select><br><br>
        <label for="Edad">Edad: </label>
        <input type="number" name="edad" id="edad"><br><br>
        <input type="submit" name="agregar" value="Agregar Animal"><br><br>
    </form><hr>

    <form action="" method="post">
        <label for="Mas Opciones">MAS OPCIONES: </label><br><br>
        <input type="submit" name="grabarArchivo" value="Grabar al Texto"><br><br>
        <input type="submit" name="ver" value="Ver animales Registrados"><br><br>
        <input type="submit" name="eliminar" value="Eliminar Animales Registrados"> 
    </form><br><br>

    <?php

    if (isset($_REQUEST['grabarArchivo'])) {
        $fp = fopen("mascotas.txt", "a");

        if (!strpos("mascotas.txt", "Fecha: $fecha")) {
            fwrite($fp, $fecha. PHP_EOL);
        } 

        foreach ($_SESSION['mascotas'] as $key => $value) {
            fwrite($fp, $key."-".$value['Tipo']."-".$value['Edad']. PHP_EOL);
        }

        fclose($fp);
    } 

    if (isset($_REQUEST['ver'])) {
        header("Location: mascotas.txt");
    }
    
    if (isset($_REQUEST['eliminar'])) {
        echo "Animales eliminados con éxito";
        session_destroy();
     }
    
    ?>
</body>
</html>