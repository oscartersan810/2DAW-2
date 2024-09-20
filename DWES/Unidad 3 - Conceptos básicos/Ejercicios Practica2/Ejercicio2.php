<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
<h1>Ejercicio 2: Convertidor de euros a pesetas</h1>
<br>
    <?php
        if (isset($_REQUEST["euros"])) {
            $euros = $_REQUEST["euros"];

            $pesetas = 166.386;
            $conversor = $euros * $pesetas;

            echo "$euros € = $conversor pesetas";
        }
    ?><br>
    <form action="" method="post">
        <input type="number" name="euros" id="euros" min="0" required>
        <input type="submit" value="Convertir a pesetas">
    </form>
</body>
</html>