<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesa</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $sexo = $_POST["sexo"];
    $altura = $_POST["altura"];
    $fechaNacimiento = $_POST["fechaNacimiento"];
    $semanaPreferente = isset($_POST["semanaPreferente"]) ? $_POST["semanaPreferente"] : "No especificada";
    $fumador = isset($_POST["fumador"]) ? "Sí" : "No";
    $numCigarrillos = isset($_POST["numCigarrillos"]) ? $_POST["numCigarrillos"] : "No especificado";
    $observaciones = isset($_POST["observaciones"]) ? $_POST["observaciones"] : "Sin observaciones";

    echo "<h2>Resumen del Formulario:</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Sexo:</strong> $sexo</p>";
    echo "<p><strong>Altura:</strong> $altura cm</p>";
    echo "<p><strong>Fecha de Nacimiento:</strong> $fechaNacimiento</p>";
    echo "<p><strong>Semana Preferente:</strong> $semanaPreferente</p>";
    echo "<p><strong>Fumador:</strong> $fumador</p>";
    if ($fumador == "Sí") {
        echo "<p><strong>Número de Cigarrillos:</strong> $numCigarrillos</p>";
    }
    echo "<p><strong>Observaciones:</strong> $observaciones</p>";
} else {
    echo "<p>Error al procesar el formulario.</p>";
}
?>
</body>
</html>