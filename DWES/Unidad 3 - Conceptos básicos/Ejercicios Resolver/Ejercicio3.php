<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 Página</title>
</head>

<body>
    <h1>Ejercicio 3: Personalizar página</h1><br>
    <form action="Ejercicio3b.php" method="post">
        <label for="Color">Color fondo: </label>
        <input type="color" name="color" id="color" value="#ec5353"><br><br>
        <label for="Color">Tipo de letra: </label>
        <select name="tletra" id="tletra">
            <option value="Arial">Arial</option>
            <option value="Times new Roman">Times new Roman</option>
            <option value="Verdana">Verdana</option>
        </select><br><br>
        <label for="alineacion">Alineacion: </label>
        <select name="alineacion" id="alineacion">
            <option value="left">Izquierda</option>
            <option value="center">Centro</option>
            <option value="right">Derecha</option>
        </select><br><br>
        <label for="Tamanio">Tamaño Fuente: </label>
        <select name="tamanio" id="tamanio">
            <option value="14">14</option>
            <option value="16">16</option>
            <option value="20">20</option>
            <option value="22">22</option>
            <option value="32">32</option>
        </select><br><br>
        <label for="Imagen">Imagen: </label>
        <select name="imagen" id="imagen">
            <option value="Ordenador">Ordenador</option>
            <option value="Portatil">Portatil</option>
            <option value="Minipc">Mini-PC</option>
        </select><br><br>
        <input type="submit" value="Personalizar página">
    </form>
</body>

</html>