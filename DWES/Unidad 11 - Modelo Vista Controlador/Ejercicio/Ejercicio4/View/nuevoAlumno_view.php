<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Alumno</title>
</head>
<body>
    <h1>NUEVO ALUMNO</h1>
    <form action="../Controller/grabaAlumno.php" method="post">
        <label for="Matricula">Matrícula: </label>
        <input type="text" name="matricula"><br><br>
        <label for="Nombre">Nombre: </label>
        <input type="text" name="nombre"><br><br>
        <label for="Apellidos">Apellidos: </label>
        <input type="text" name="apellidos"><br><br>
        <label for="Curso">Curso: </label>
        <input type="text" name="curso"><br><br>
        <input type="submit" value="Grabar">
    </form>
</body>
</html>