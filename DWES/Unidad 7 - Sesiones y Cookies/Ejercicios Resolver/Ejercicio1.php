<?php
session_start();
if (!isset($_SESSION['paleta'])) {
    $_SESSION['paleta'] = [];
} 

if (isset($_REQUEST['genera'])) {
    $color = "rgb(".rand(0, 255). ",".rand(0, 255). ",".rand(0, 255).")";
    $_SESSION['paleta'] = $color;
    print_r($color);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>

    <style>
        body{
            background-color: <?= $color ?>;
        }
    </style>

</head>
<body>
    <form action="" method="post">
        <label for="color">Generar color:</label>
        <input type="submit" value="Generar" name="genera">
    </form><br><br>

    <form action="ejercicio1b.php" method="post">
        <label for="paletagenerada">Ver paletas Generadas: </label>
        <input type="submit" value="Ver Paletas">
    </form>
</body>
</html>