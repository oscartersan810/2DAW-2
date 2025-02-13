<?php
session_start();
if (!isset($_SESSION['almacen']) && !isset($_COOKIE['almacen'])) {
    $_SESSION['almacen'] = [];
} else if (isset($_COOKIE['almacen'])) {
    $_SESSION['almacen'] = unserialize($_COOKIE['almacen']);
}

if (isset($_REQUEST['marca'])) {
    $marca = $_REQUEST['marca'];
    $tipo = $_REQUEST['tipo'];
    $extras = isset($_REQUEST['extras']) ? $_REQUEST['extras'] : [];

    // $fecha = time(); //como entero
    $diasSemana = ["Sunday" => "domingo", "Monday" => "lunes", "Tuesday" => "martes", "Wednesday" => "miércoles", "Thursday" => "jueves", "Friday" => "viernes", "Saturday" => "sábado"];
    $diaIngles = date("l");
    $diaEspanol = $diasSemana[$diaIngles];
    $fechaCoche = "$diaEspanol - " . date("d/m/Y");

    $numeroMatricula = rand(100, 999);
    $letraMatricula = strtoupper(substr($marca, -3)); // Tres últimas letras en mayúsculas

    $matricula = "$numeroMatricula-$letraMatricula";

    $listaCoches = [
        $matricula => ["Fecha" => $fechaCoche, "Marca" => $marca, "Tipo" => $tipo, "Extras" => $extras]
    ];
} else {
    $listaCoches = [];
}

if (isset($_REQUEST['agregar'])) {
    $_SESSION['almacen'][$matricula] = $listaCoches[$matricula];
}

// Actualizar cookie
setcookie("almacen", serialize($_SESSION['almacen']), time() + 12 * 30 * 24 * 60 * 60);

if (isset($_REQUEST['eliminar'])) {
    session_destroy();
    setcookie("almacen", "", -1);
    header("refresh: 0;");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matricula</title>
</head>

<body>
    <h1>Concesionario</h1>
    <form action="" method="post">
        <label for="Marca">MARCA: </label>
        <input type="text" name="marca" id="marca"><br><br>
        <label for="Tipo">TIPO: </label>
        <select name="tipo" id="tipo">
            <option value="turismo">Turismo</option>
            <option value="berlina">Berlina</option>
            <option value="monovolumen">Monovolumen</option>
            <option value="deportivo">Deportivo</option>
            <option value="furgoneta">Furgoneta</option>
        </select><br><br>
        <label for="Extras">EXTRAS: </label><br>
        <input type="checkbox" name="extras[]" id="extra" value="camara trasera">Cámara Trasera <br>
        <input type="checkbox" name="extras[]" id="extra" value="llantas de aleación">Llantas de aleación <br>
        <input type="checkbox" name="extras[]" id="extra" value="climatizador">Climatizador <br><br>
        <input type="submit" value="AÑADIR" name="agregar"><br><br>

        <table border="1">
            <tr>
                <th>MATRÍCULA</th>
                <th>FECHA</th>
                <th>MARCA</th>
                <th>TIPO</th>
                <th>EXTRAS</th>
            </tr>
            <?php
            foreach ($_SESSION['almacen'] as $key => $value) {
                ?>
                <tr>
                    <td><?= $key ?></td>
                    <td><?= $value['Fecha'] ?></td>
                    <td><?= $value['Marca'] ?></td>
                    <td><?= $value['Tipo'] ?></td>
                    <td>
                        <?php
                        // Verificar si 'Extras' es un array
                        if (is_array($value['Extras'])) {
                            echo implode(", ", $value['Extras']); // Convierte el array en una cadena separada por comas
                        } else {
                            echo $value['Extras']; // Si no es un array, lo muestra directamente
                        }
                        ?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
        <hr>
        <input type="submit" value="BORRAR TODOS LOS VEHÍCULOS" name="eliminar">
    </form>

</body>

</html>