<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Ejercicio 3</h1>
    <h2>Elige una Fecha: </h2>

    <?php
    if (isset($_REQUEST['fecha'])) {
        $fecha_entrada = strtotime($_REQUEST['fecha']);

        $fecha_enviada = date("Y-m-d", $fecha_entrada);
        $dSemana = date("l", $fecha_entrada);
        $nombreSemana = "";
        
        switch ($dSemana) {
            case 'Monday':
                $nombreSemana = "Lunes";
                break;
            case 'Tuesday':
                $nombreSemana ="Martes";
                break;
            case 'Wednesday':
                $nombreSemana = "Miércoles";
                break;
            case 'Thursday':
                $nombreSemana = "Jueves";
                break;
            case 'Friday':
                $nombreSemana = "Viernes";
                break;
            case  'Saturday':
                $nombreSemana = "Sábado";
                break;
            case  'Sunday':
                $nombreSemana = "Domingo";
                break;
            default:
                $nombreSemana = "No hay día de la semana";
                break;
        }

        echo "La fecha $fecha_enviada cae en $nombreSemana";
    } 
    ?>
    <br><br>
    <form action="" method="post">
        <label for="Fecha">Fecha: </label>
        <input type="date" name="fecha" id="fecha"><br><br>
        <input type="submit" value="Ver fecha">
    </form>
</body>
</html>