<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>

<body>
    <h1>Traducciones de palabras</h1>
    <?php
    if (isset($_REQUEST['palabras'])) {
        $posicionPalabra = $_REQUEST['palabras'];

        $listaPalabras = [
            "mesa" => "table",
            "rojo" => "red",
            "pajaro" => "bird",
            "verde" => "green",
            "cielo" => "sky",
            "gato" => "cat",
            "ordenador" => "computer",
            "cocina" => "kitchen",
            "azul" => "blue",
            "manzana" => "apple",
            "cinco" => "five",
            "coche" => "car",
            "torre" => "tower",
            "castillo" => "castle",
            "agua" => "water",
            "fuego" => "fire",
            "raton" => "mouse",
            "pera" => "pear",
            "pantalla" => "display",
            "perro" =>  "dog"
        ];


        $contadorAcierto = 0;
        $contadorErronea = 0;

        if ($listaPalabras[$posicionPalabra]) {
            $traduccion = $listaPalabras[$posicionPalabra];

            // Mostrar la tabla con las traducciones
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>Español</th>";
            echo "<th>Inglés</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>$posicionPalabra</td>";
            echo "<td>$traduccion</td>";
            echo "</tr>";
            echo "</table>";
        } else {
            echo "Palabra no encontrada.";
        }
    } else {
        echo "Por favor selecciona una palabra.";
    }

    ?>
    <br>
    <form action="" method="post"></form>
    <label for="Nombre">Escribe: </label>
    <?php
    for ($i = 0; $i < 5; $i++) {
    ?>
        <input type="text" name="palabra"><br>
    <?php
    }
    ?>



    <input type="submit" value="Enviar Palabra">
    </form>
</body>

</html>