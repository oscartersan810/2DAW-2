<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
    if (isset($_REQUEST['horasExtras']) && ($_REQUEST['salario'])) {
        $horasExtras = $_REQUEST['horasExtras'];
        $salario = $_REQUEST['salario'];

        $calculo = $salario * $horasExtras;
        if ($horasExtras<=40) {
            $calculo = ($salario*$horasExtras) * 12;
        }

    } 
    ?>
    <h1>Ejercicio 4: Horas Extras Empleado</h1>
    <form action="" method="post">
        <label for="Salario">Salario: </label>
        <input type="number" name="salario" id="salario" required><br><br>
        <label for="Horas Extras">Horas Extras: </label>
        <input type="number" name="horasExtras" id="horasExtras" required><br><br>
        <input type="submit" value="Calcular Salario">
    </form>
</body>
</html>