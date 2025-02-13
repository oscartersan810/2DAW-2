<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Cilindro</title>
</head>
<body>
    <h1>Resultado del cilindro</h1>
    <?php
        $altura = $_REQUEST['a'];
        $diametro = $_REQUEST['d'];

        //Cálculo Radio
        $radio = $diametro/2;

        //Cálculo Volumen
        $volumen = pi() * pow($radio, 2) * $altura;

        echo "Altura: $altura";
        echo "<br>";
        echo "Diámetro: $diametro";
        echo "<br>";
        echo "El resultado del volumen es: $volumen";
    ?>
    <br>
    <img src="cilindro.jpg" alt="Cilindro"><br>
    <a href="Ejercicio1.php">Volver</a>
</body>
</html>