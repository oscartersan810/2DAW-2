<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Paciente</title>
</head>
<body>
    <h1>Información del Paciente</h1>
    <?php
    if (isset($_REQUEST['nombre'])) {
        ?>
        <p>Nombre: <?= $_REQUEST['nombre'] ?></p>
        <p>Sexo: <?= $_REQUEST['sexo'] ?></p>
        <p>Altura: <?= $_REQUEST['altura'] ?>cm</p>
        <p>Fecha Nacimiento: <?= $_REQUEST['fecnac'] ?></p>
        <p>Cita Preferente: <?= $_REQUEST['cita'] ?></p>
        <?php 
        if (!isset($_REQUEST['fumador'])) {
            echo "<p>Fumador: NO</p>";
        } else{
            echo "<p>Fumador: SI</p>";
            echo "<p>Nº Cigarrillos: ".$_REQUEST['cantidadCigarros']. "cigarros </p>";
        }
        ?>
        <p>Observaciones: <?= $_REQUEST['observacion'] ?></p>
        <?php 
    } 
    ?>
    <a href="Activ_5b1.html">Volver atrás</a>
</body>
</html>