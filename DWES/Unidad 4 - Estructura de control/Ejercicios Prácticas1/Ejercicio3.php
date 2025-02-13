<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
    if (isset($_REQUEST["dia"])) {
        $dia = $_REQUEST["dia"];

        if ($dia==1) {
            echo "LUNES";
        }
        if ($dia==2) {
            echo "MARTES";
        }
        if ($dia==3) {
            echo "MIÉRCOLES";
        }
        if ($dia==4) {
            echo "JUEVES";
        }
        if ($dia==5) {
            echo "VIERNES";
        }
        if ($dia==6) {
            echo "SÁBADO";
        }
        if ($dia==7) {
            echo "DOMINGO";
        }
    } 
    ?>
    <form action="" method="post">
        <label for="Semana">Numero día</label>
        <input type="number" name="dia" id="dia" min="1" max="7" required><br><br>
        <input type="submit" value="Enviar dia Semana">
    </form>
</body>
</html>