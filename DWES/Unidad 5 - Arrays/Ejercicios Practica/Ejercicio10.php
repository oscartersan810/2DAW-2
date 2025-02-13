<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio10</title>
</head>

<body>
    <?php
    if (isset($_REQUEST['cantidad'])) {

        $valorCarta = [
            "as" => 11,
            "dos" => 0,
            "tres" => 10,
            "cuatro" => 0,
            "cinco" => 0,
            "seis" => 0,
            "siete" => 0,
            "sota" => 2,
            "caballo" => 3,
            "rey" => 4
        ];
        $vpalos = ["oro", "espada", "copa", "basto"];
        $figura = ["as", "dos", "tres", "cuatro", "cinco", "seis", "siete", "sota", "caballo", "rey"];

        $cartas = [];
        $puntosT = 0;


        for ($i = 0; $i < $_REQUEST['cantidad']; $i++) {
            do {
                $pCarta = $vpalos[rand(0, 3)];
                $fCarta = $figura[rand(0, 9)];
                $nomCarta = "$fCarta de $pCarta";
            } while (in_array($nomCarta, $cartas));
        }
        $carta[] = $nomCarta;
        echo "$nomCarta - $puntuacion[$fCarta] puntos<br>";
        $puntosT += $puntuacion[$fCarta];
    }

    ?>
    <form action="" method="post">
        <label for="Numero Cartas">Cantidad: </label>
        <input type="number" name="cantidad" min="1" max="48" required>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>