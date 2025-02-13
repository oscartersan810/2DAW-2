<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Notas del alumno</h1>
    <form action="recogearray.php" method="post">
        Nota1: <input type="number" name="notas[]"><br>
        Nota2: <input type="number" name="notas[]"><br>
        Nota3: <input type="number" name="notas[]"><br>
        Nota4: <input type="number" name="notas[]"><br>
        Nota5: <input type="number" name="notas[]"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>