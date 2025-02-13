<?php
include_once 'Empleados.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Empleados</title>
</head>
<body>
    <h1>Ejercicio 1: Gestión de Empleados</h1>

    <?php
    if (isset($_REQUEST['nombre']) && isset($_REQUEST['sueldo'])) {
        $nombre = $_REQUEST['nombre'];
        $sueldo = $_REQUEST['sueldo'];
    
        $empleado = new Empleados($nombre, $sueldo);

        echo "<h3>Información del Empleado ".$empleado->getNombre()."</h3>";
        echo  "<p>Info: ".$empleado -> __tostring()."";
        echo "<br>";
        ?>
        <form action="" method="post">
            <label for="Actualiza Sueldo">Actualizar Sueldo</label>
            <input type="number" id="Actualiza Sueldo" name="actualizaS">
            <input type="submit" value="Actualizar">
        </form>

        <?php
        if (isset($_REQUEST['actualizaS'])) {
            $empleado -> asigna($nombre, $_REQUEST['actualizaS']);
            echo "<h3>El sueldo del empleado ".$empleado->getNombre()." ha sido actualizado a: ".$empleado->getSueldo()."</h3>";
        }
        echo "<p>". $empleado -> impuestos(). "</p>"; 
        ?>
    <?php 
    } else { 
    ?>
    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="sueldos">Sueldo: </label>
        <input type="number" id="sueldos" name="sueldo"><br><br>
        <input type="submit" value="Enviar datos">
    </form>
    <?php
    }
     ?>
</body>
</html>