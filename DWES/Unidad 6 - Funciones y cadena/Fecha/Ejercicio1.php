<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    <h1>Ejercicio 1: fechas</h1>
    <?php 
    if (isset($_REQUEST['formato'])) {

        $dia = $_REQUEST['dia'];
        $mes = $_REQUEST['mes'];
        $anio = $_REQUEST['anio'];

        if ($dia<=0 && $dia>31) {
            echo "Dia incorrecto";
            
        } else if ($mes<=0 && $mes>12) {
            echo "Mes incorrecto";

        } else {
            if ($_REQUEST['formato'] == "f1") {
                $fecha=date("$dia-$mes-$anio");
                echo "Fecha: $fecha";
            }

            if ($_REQUEST['formato'] == "f2") {
                $fecha=date("$dia/$mes/$anio");
                echo "Fecha: $fecha";
            }

            if ($_REQUEST['formato'] == "f3") {
                $fecha=date("$dia,$mes,$anio");
                echo "Fecha: $fecha";
            }
        }
    } else {
        echo "No hay fecha introducida";
    }
    ?>
    <br><br>
    <form action="" method="post">
        <label for="Dia">Dia: </label>
        <input type="number" name="dia" id="dia" min="1" max="31"><br>
        <label for="Mes">Mes: </label>
        <input type="number" name="mes" id="mes" min="1" max="12"><br>
        <label for="Año">Año: </label>
        <input type="number" name="anio" id="anio"><br>
        <select name="formato" id="formato">
            <option value="f1">DD-MM-AAAA</option>
            <option value="f2" selected>DD/MM/AAAA</option>
            <option value="f3">DD,MM,AAAA</option>
        </select><br>
        <input type="submit" value="Enviar Fecha">
    </form>
</body>
</html>