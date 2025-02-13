<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 1: Múltiplicación</h1>
    <?php 
    if (isset($_REQUEST['n1']) && isset($_REQUEST['n2'])) {
        $n1 = $_REQUEST['n1'];
        $n2 = $_REQUEST['n2'];

        $mul = $n1*$n2;

        echo "El resultado de la multiplicación es: $mul";
    }
    ?>
    <form action="" method="post">
        <input type="number" name="n1" id="n1" min="0" required><br>
        <input type="number" name="n2" id="n2" min="0" required><br>
        <input type="submit" value="Multiplicar">
    </form>
</body>
</html>