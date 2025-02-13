<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
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
    <form action="" method="post">
        <label for="Nombre">Selecciona una palabra: </label>
        <select name="palabras" id="">
            <option value="mesa">Mesa</option>
            <option value="rojo">Rojo</option>
            <option value="pajaro">Pájaro</option>
            <option value="verde">Verde</option>
            <option value="cielo">Cielo</option>
            <option value="gato">Gato</option>
            <option value="ordenador">Ordenador</option>
            <option value="cocina">Cocina</option>
            <option value="azul">Azul</option>
            <option value="manzana">Manzana</option>
            <option value="cinco">Cinco</option>
            <option value="coche">Coche</option>
            <option value="torre">Torre</option>
            <option value="castillo">Castillo</option>
            <option value="agua">Agua</option>
            <option value="fuego">Fuego</option>
            <option value="raton">Ratón</option>
            <option value="pera">Pera</option>
            <option value="pantalla">Pantalla</option>
            <option value="perro">Perro</option>
        </select>
        <input type="submit" value="Enviar Palabra">
    </form>
</body>

</html>