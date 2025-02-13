<?php
session_start();

if (!isset($_SESSION['mascotas_fecha'])) {
    $_SESSION['mascotas_fecha'] = [];
}

if (file_exists("mascotas.txt")) {
    $fechas = [];
    $fp = fopen("mascotas.txt", "r");

    while (!feof($fp)) {
        $linea = fgets($fp);
        if (str_starts_with($linea, "#")) {
            $fechas[] = $linea;
        }
    }
    fclose($fp);
} else {
    $fechas = [];
}

if (isset($_REQUEST['fecha'])) {
    $fechaSeleccionada = $_REQUEST['fecha'];
    $_SESSION['mascotas_fecha'] = [];

    $fp = fopen("mascotas.txt", "r");
    $leerMascotas = false;

    while (!feof($fp)) {
        $linea = fgets($fp);
        if ($linea == $fechaSeleccionada) {
            $leerMascotas = true;
        }

        if ($leerMascotas) {
            if (str_starts_with($linea, "#")) {
                break;
            }

            $datos = explode("-", $linea);
            if (count($datos) == 3) {
                $_SESSION['mascotas_fecha'][] = ['Nombre' => $datos[0], 'Tipo' => $datos[1], 'Edad' => $datos[2]];
            }
        }
    }
    fclose($fp);
}
// print_r($fechas);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>
    <p>Diseñar una página que muestre un cuadro ‘select’ con todas las fechas disponibles en el fichero del ejercicio anterior,
        de manera que al seleccionar y enviar una fecha,
        se cargue en un array de sesión las mascotas almacenadas en la fecha seleccionada y las muestre en una tabla.
        La opción de elegir una fecha siempre estará disponible para poder mostrar las mascotas de la fecha que interese,
        es decir que se puede ir cambiando de fecha y se actualizan los datos de la tabla.
        Nota: al leer una línea de un fichero se añaden espacios al principio o al final,
        así que para hacer comparaciones debes asegurarte de quitar esos espacios. </p>

    <form action="" method="post">
        <label for="Fecha">Selección de Fecha: </label>
        <select name="fecha" id="fecha">
            <?php foreach ($fechas as $fecha) { ?>
                <option value="<?= $fecha ?>"><?= $fecha ?></option>
            <?php } ?>
        </select>
        <input type="submit" value="Cargar Mascotas">
    </form>
    <hr>
    <?php if (isset($_SESSION['mascotas_fecha']) && !empty($_SESSION['mascotas_fecha'])) { ?>
        <h2>Mascotas Registradas el <?= $fechaSeleccionada ?></h2>
        <table border="1">
            <tr>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Edad</th>
            </tr>
            <?php foreach ($_SESSION['mascotas_fecha'] as $mascota) { ?>
                <tr>
                    <td><?= $mascota['Nombre'] ?></td>
                    <td><?= $mascota['Tipo'] ?></td>
                    <td><?= $mascota['Edad'] ?></td>
                </tr>
            <?php }?>
        </table>
        <?php } ?>
</body>

</html>