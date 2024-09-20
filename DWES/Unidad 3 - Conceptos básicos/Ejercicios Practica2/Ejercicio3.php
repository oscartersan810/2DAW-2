<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Ejercicio 3: Conversor de pesetas a euros</h1>
    <br>
    <?php
        if (isset($_REQUEST["pesetas"])) {
            $pesetas = $_REQUEST["pesetas"];

            $euros = 166.386;
            $conversor = $pesetas/ $euros;

            echo "$pesetas pesetas = $conversor €";
        }
    ?><br>
    <form action="" method="post">
        <input type="number" name="pesetas" id="pesetas" min="0" required>
        <input type="submit" value="Convertir a euros">
    </form>
</body>
</html>