<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Conversión de Euros y de Pesetas</h1>
    <div class="contenedor">
        <form action="peticion.php" method="post">
            <h3>Euros a Pesetas</h3>
            <input type="number" name="euros" placeholder="Euros" min="0" required>
            <input type="submit" value="Convertir">
        </form><br><br>
        <form action="peticion.php" method="post">
            <h3>Pesetas a Euros</h3>
            <input type="number" name="pesetas" placeholder="Pesetas" min="0" required>
            <input type="submit" value="Convertir">
        </form>
    </div>
</body>
</html>