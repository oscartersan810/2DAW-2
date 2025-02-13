<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Ejercicio 5: Cálculo area rectángulo</h1>
    <?php
    if (isset(($_REQUEST['b'])) && isset( $_REQUEST['a'])) {
        $base = $_REQUEST['b'];
        $altura = $_REQUEST['a'];

        //Calculo Área
        $area = $base*$altura;

        echo "Base: $base";
        echo "<br>";
        echo "Altura: $altura";
        echo "<br>";
        echo "El área es: $area";
        echo "<br>";
    } 
    ?>
    <form action="" method="post">
        <label for="Base">Base: </label>
        <input type="number" name="b" id="base" min="0" required><br>
        <label for="Altura">Altura: </label>
        <input type="number" name="a" id="altura" min="0" required><br>
        <input type="submit" value="Cálcular Área">
    </form>
</body>
</html>