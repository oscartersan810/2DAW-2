<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Productos</title>
</head>
<body>
    <h2>Buscar Producto</h2>
    <form method="GET" action="../server/consultaProductos.php">
        <label>Token:</label>
        <input type="text" name="token" required>
        <br><br>
        <label>Nombre:</label>
        <input type="text" name="nombre">
        <br><br>
        <label>Precio mínimo:</label>
        <input type="number" name="min_precio" step="0.01">
        <label>Precio máximo:</label>
        <input type="number" name="max_precio" step="0.01">
        <br><br>
        <input type="submit" value="Consultar">
    </form>
</body>
</html>
