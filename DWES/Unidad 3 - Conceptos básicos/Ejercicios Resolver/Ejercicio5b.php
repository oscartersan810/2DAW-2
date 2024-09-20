<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Depósito Cilindro</title>
</head>
<body>
    <?php
    $altura = $_REQUEST['a'];
    $diametro = $_REQUEST['d'];
    $caudal = $_REQUEST['ca'];

    echo "Altura: $altura";
    echo "<br>";
    echo "Diámetro: $diametro";
    echo "<br>";
    ?>
    <br>
    <img src="cilindro.jpg" alt="Cilindro"><br>
    <a href="Ejercicio5.php">Volver</a>
</body>
</html>