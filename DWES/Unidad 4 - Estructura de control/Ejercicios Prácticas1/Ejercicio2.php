<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Ejercicio 2: Control Horas</h1>
    <?php
        if (isset($_REQUEST['hora'])) {
            $hora = $_REQUEST['hora'];

            if ($hora>=6 && $hora<= 12) {
                echo "Buenos días";
            } else if ($hora>=13 && $hora<=20) {
                echo "Buenas tardes";
            } else if (($hora>=21 && $hora<=23) || ($hora>= 0 && $hora<= 5)) {
                echo "Buenas noches";
            } else {
                echo "Esa hora no existe";
            }
        }
    ?>

    <form action="" method="post">
        <label for="Hora">¿Qué hora es?: </label>
        <input type="number" name="hora" id="hora" min="0" max="23" required>
        <input type="submit" value="Enviar Dato">
    </form>
</body>
</html>