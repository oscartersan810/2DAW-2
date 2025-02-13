<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>
    <h1>Ejercicio 2: Fecha y Hora</h1>
    <?php 
    if (isset($_REQUEST['formato'])) {

        $horas = $_REQUEST['hora'];
        $minutos = $_REQUEST['minuto'];
        $segundos = $_REQUEST['segundo'];

        $ts = "$horas:$minutos:$segundos";

        $hora = strtotime($ts);

        if ($hora!= false) {
            echo "La hora es: ".date($_REQUEST['formato'],  $hora);
        } else{
            echo "Formato de hora incorrecto";
        }
        
    } else {
        echo "No hay Hora introducida";
    }
    ?>
    <br><br>
    <form action="" method="post">
        <label for="Hora">Hora: </label>
        <input type="number" name="hora" id="hora" min="0" max="23"><br>
        <label for="Mes">Minuto/s: </label>
        <input type="number" name="minuto" id="minuto" min="0" max="59"><br>
        <label for="Segundo">Segundo/s: </label>
        <input type="number" name="segundo" id="segundo" min="0" max="59"><br>
        <select name="formato" id="formato">
            <option value="h:i:s A" selected>HH:mm:ss 12h</option>
            <option value="H:i:s">HH:mm:ss 24h</option>
        </select><br>
        <input type="submit" value="Enviar Hora">
    </form>
</body>
</html>