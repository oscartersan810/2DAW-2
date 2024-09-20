<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Ejercicio 4: Operaciones</h1><br>
    <?php 
    if (isset($_REQUEST['n1']) && isset($_REQUEST['n2'])) {
        $n1 = $_REQUEST['n1'];
        $n2 = $_REQUEST['n2'];

        //Operaciones
        $suma = $n1+$n2;
        $resta = $n1-$n2;
        $mul = $n1*$n2;
        $division = $n1/$n2;

        echo "Operador1: $n1 <br>";
        echo "Operador2: $n2 <br>";
        echo "<br>";
        echo "Suma: $suma <br>";
        echo "Multiplicacion: $mul <br>";
        if ($n2>$n1) {
            echo "Resta negativa";
            echo "<br>";
            echo "Division Cero";
        } else {
            echo "Resta: $resta <br>";
            echo "Division: ",(int)$division, "<br>";
        }
        echo "<br>";
    }
    ?>

    <form action="" method="post">
        <input type="number" name="n1" id="n1" min="0" required><br>
        <input type="number" name="n2" id="n2" min="0" required><br>
        <input type="submit" value="Hacer cálculos">
    </form>
</body>
</html>