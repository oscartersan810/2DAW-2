<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
    <h1>Ejercicio 1: Adivina la imagen</h1>

    <?php
    if (isset($_REQUEST['nombre'])) {
        $nombre = $_REQUEST['nombre'];
        $resultado = "Ordenador";
    ?>
    <img src="ImgEj1/ordenador.jpg" alt="Ordenador">
    <?php

        if ($nombre == $resultado) {
            echo "<h3 style='color: green;'>¡Correcto es un Ordenador!</h3>";
        } else {
            echo "<h3 style='color: red;'>¡Incorrecto!, es un Ordenador</h3>";
        }
    }
    ?>
</body>

</html>