<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baraja Española</title>
</head>
<body>
    <h1>Baraja Española</h1>
    <form action="peticion.php" method="post">
        <label for="n_cartas">Número de Cartas: </label>
        <input type="number" name="n_cartas" id="n_cartas" min="1" max="40" required><br><br>
        <input type="submit" value="Obtener Cartas">
    </form>
</body>
</html>
