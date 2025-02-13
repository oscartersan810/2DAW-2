<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body>
    <h1>Ejercicio 5: Cálculo Cilindro aceite</h1>

    <form action="Ejercicio5b.php" method="post">
        <label for="Altura">Altura: </label>
        <input type="number" name="a" id="a" min="0" required><br><br>
        <label for="Diámetro">Diámetro: </label>
        <input type="number" name="d" id="d" min="0" required><br><br>
        <label for="Caudal Aceite">Caudal Aceite: </label>
        <input type="number" name="ca" id="ca" min="0" required><br><br>
        <input type="submit" value="Cálcular">
    </form>
</body>

</html>