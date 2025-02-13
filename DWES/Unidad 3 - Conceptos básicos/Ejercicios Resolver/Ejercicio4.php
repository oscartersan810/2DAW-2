<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Producto en varias tiendas</h1>
    <form action="Ejercicio4b.php" method="post">
    <label for="nombreproducto">Nombre del Producto: </label>
    <input type="text" name="nombre" id="nombre"><br><br>
    <label for="tienda1">Precio Tienda1: </label>
    <input type="number" name="precio1" id="precio1" min="0" required><br><br>
    <label for="tienda1">Precio Tienda2: </label>
    <input type="number" name="precio2" id="precio2" min="0" required><br><br>
    <label for="tienda1">Precio Tienda3: </label>
    <input type="number" name="precio3" id="precio3" min="0" required><br><br>
    <input type="submit" value="Enviar Datos">
    </form>
</body>
</html>