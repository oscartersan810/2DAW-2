<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 1 - Asignatura a Primera hora</h1>
    <?php
    if (isset(($_REQUEST['dia']))) {
        $dia = $_REQUEST['dia'];

        if ($dia==1) {
            echo "<h5>EL LUNES TIENES DWEC (Desarrollo web entorno cliente)</h5>";
        }

        if ($dia==2) {
            echo "<h5>EL MARTES TIENES DWES (Desarrollo web entorno servidor)</h5>";
        }

        if ($dia==3) {
            echo "<h5>EL MIÉRCOLES TIENES DWEC (Desarrollo web entorno cliente)</h5>";
        }

        if ($dia==4) {
            echo "<h5>EL JUEVES TIENES DWEC (Desarrollo web entorno cliente)</h5>";
        }
        if ($dia==5) {
            echo "<h5>EL VIERNES TIENES DAW (Despliegue de aplicaciones web)</h5>";
        }
        if ($dia==6 || $dia==7) {
            echo "<h5>FiN DE SEMANA</h5>";
        }
    }
    ?>

    <form action="" method="post">
        <label for="Semana">Dia de Semana: </label>
        <input type="number" name="dia" id="dia" min="1" max="7">
        <input type="submit" value="Enviar Día">
    </form><br><br>
    <p>1: Lunes</p>
    <p>2: Martes</p>
    <p>3: Miércoles</p>
    <p>4: Jueves</p>
    <p>5: Viernes</p>
    <p>6: Sábado</p>
    <p>7: Domingo</p>
</body>
</html>