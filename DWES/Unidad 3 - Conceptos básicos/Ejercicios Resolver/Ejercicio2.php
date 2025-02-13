<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 Loteria</title>
</head>
<body>
    <h1>Ejercicio 2: Lotería Primitiva</h1>
    <form action="Ejercicio2b.php" method="post">
        <input type="number" name="n1" id="n1" min="1" max="49" required><br>
        <input type="number" name="n2" id="n2" min="1" max="49" required><br>
        <input type="number" name="n3" id="n3" min="1" max="49" required><br>
        <input type="number" name="n4" id="n4" min="1" max="49" required><br>
        <input type="number" name="n5" id="n5" min="1" max="49" required><br>
        <input type="number" name="n6" id="n6" min="1" max="49" required><br><br>
        <label for="numeroSerie">Numero de Serie:</label>
        <input type="number" name="nserie" id="nserie" min="1" max="999" required><br><br>
        <input type="submit" value="Realizar Suerte">
    </form>
</body>
</html>