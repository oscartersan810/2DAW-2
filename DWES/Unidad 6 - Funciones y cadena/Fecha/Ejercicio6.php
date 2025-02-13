<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <h1>Ejercicio 6</h1>
    <h2>Elige la fecha transcurrida: </h2>

    <?php
    if (isset($_REQUEST['dia'])) {
        # code...
    } 
    ?>
    <form action="" method="post">
        <label for="dia">dia: </label>
        <input type="number" name="dia" id="dia" min="1" max="31"><br><br>
        <label for="mes">mes: </label>
        <input type="number" name="mes" id="mes" min="1" max="12"><br><br>
        <label for="año">Año: </label>
        <input type="number" name="anio" id="anio"><br><br>
        <input type="submit" value="Enviar datos">
    </form>
</body>
</html>