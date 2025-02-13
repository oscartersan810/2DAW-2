<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Ejercicio 4</h1>
    <h2>Elige una Fecha: </h2>

    <?php
    if (isset($_REQUEST['fecha'])) {
        $fecha_entrada = strtotime($_REQUEST['fecha']);

        $fecha_enviada = date("Y-m-d", $fecha_entrada);

        $dia = date("d", $fecha_entrada);
        $mes = date("n", $fecha_entrada);
        $anio = date("Y", $fecha_entrada);
        $nombreMes = "";
        
        switch ($mes) {
            case 1:
                $nombreMes = "Enero";
                break;
            case 2:
                $nombreMes ="Febrero";
                break;
            case 3:
                $nombreMes = "Marzo";
                break;
            case 4:
                $nombreMes = "Abril";
                break;
            case 5:
                $nombreMes = "Mayo";
                break;
            case 6:
                $nombreMes = "Junio";
                break;
            case 7:
                $nombreMes = "Julio";
                break;
            case 8:
                $nombreMes = "Agosto";
                break;
            case 9:
                $nombreMes = "Septiembre";
                break;
            case 10:
                $nombreMes = "Octubre";
                break;
            case 11:
                $nombreMes = "Noviembre";
                break;
            case 12:
                $nombreMes = "Diciembre";
                break;
            default:
                $nombreMes = "No existe el mes";
                break;
        }

        echo "La fecha $fecha_enviada <br><br>";
        echo "Fecha formateada: $dia de $nombreMes del $anio";
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