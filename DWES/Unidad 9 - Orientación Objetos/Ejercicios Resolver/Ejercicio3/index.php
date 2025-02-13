<?php
include_once 'Cubo.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal Cubo</title>
</head>
<body>
    <?php
    if (isset($_REQUEST['capacidad']) || isset($_REQUEST['capacidad2'])) {
        $cubo1 = new Cubo($_REQUEST['capacidad'], $_REQUEST['contenido']);
        $cubo2 = new Cubo($_REQUEST['capacidad2'], $_REQUEST['contenido2']);

        echo "<h3>CUBO 1</h3>";
        echo "<p>Capacidad: ".$cubo1->getCapacidad()."</p>";
        echo "<p>Contenido: ".$cubo1->getContenido()."</p>";
        echo "<br>";

        echo "<h3>CUBO 2</h3>";
        echo "<p>Capacidad: ".$cubo2->getCapacidad()."</p>";
        echo "<p>Contenido: ".$cubo2->getContenido()."</p>";
        echo "<br>";
        
        if ($cubo1->getCapacidad() > $cubo2->getCapacidad()) {
            ?>
            <p><?= $cubo2->verter($cubo1) ?></p>
            <?php 
        } else{
            ?>
            <p><?= $cubo1->verter($cubo2) ?></p>
            <?php 
        }

    } else{
    ?>
    <h1>Ejercicio 3: Llenar cubos</h1>
    <form action="" method="post">
        <label for="Cubo1">Cubo 1:</label><br><br>
        <label for="Capacidad">Capacidad: </label>
        <input type="number" name="capacidad" id="capacidad"><br>
        <label for="Contenido">Contenido: </label>
        <input type="number" name="contenido" id="contenido"><br><br>
        <label for="Cubo2">Cubo 2: </label><br><br>
        <label for="Capacidad2">Capacidad: </label>
        <input type="number" name="capacidad2" id="capacidad2"><br>
        <label for="Contenido2">Contenido: </label>
        <input type="number" name="contenido2" id="contenido2"><br><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
    } 
    ?>
</body>
</html>