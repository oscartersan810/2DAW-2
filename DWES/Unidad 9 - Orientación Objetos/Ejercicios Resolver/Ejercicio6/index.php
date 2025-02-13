<?php
include_once "Coche.php";
include_once "Bicicleta.php"; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehículos</title>
</head>
<body>
    <h1>Vehículos</h1>
    <?php
    if (isset($_REQUEST['tipo'])) {
        $tipo = $_REQUEST['tipo'];
        $kilometros = isset($_REQUEST['kilometros']) ? (int)$_REQUEST['kilometros'] : 0;

        if ($tipo == "bicicleta") {
            $bicicleta = new Bicicleta();
            $bicicleta->hacerCaballito();
            $bicicleta->anda($kilometros);
            echo "Has creado una bicicleta que recorrió $kilometros km.<br>";
        } elseif ($tipo == "coche") {
            $coche = new Coche();
            $coche->quemarRueda();
            $coche->anda($kilometros);
            echo "Has creado un coche que recorrió $kilometros km.<br>";
        } else {
            echo "Por favor, selecciona un tipo de vehículo válido.<br>";
        }
    }

    if (isset($_REQUEST['mostrar'])) {
        echo "<h2>Estadísticas generales</h2>";
        echo "Kilómetros totales recorridos: " . Vehiculo::getKilometrosTotales() . " km<br>";
        echo "Vehículos creados: " . Vehiculo::getVehiculosCreados() . "<br>";
    }

    if (isset($_REQUEST['resetear'])) {
        unset($_SESSION['vehiculos']); // Elimina la variable específica de la sesión
        // session_destroy(); // Opción para destruir toda la sesión
        echo "<p style='color: red;'>Sesión reiniciada correctamente.</p>";
        exit; // Opcional: Detiene la ejecución tras reiniciar la sesión
    }
    ?>

    <form action="" method="post">
        <label for="tipo">Tipo de vehículo: </label>
        <select name="tipo" id="tipo">
            <option value="">Seleccionar...</option>
            <option value="bicicleta">Bicicleta</option>
            <option value="coche">Coche</option>
        </select><br><br>
        <label for="kilometros">Kilómetros recorridos: </label>
        <input type="number" name="kilometros" id="kilometros" min="0"><br><br>
        <input type="submit" value="Mostrar" name="mostrar">
        <input type="submit" value="Resetear" name="resetear">
    </form>
</body>
</html>
