<?php
//Conexión con la base de datos
try {
    $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "");
} catch (PDOException $e) {  
    echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";  
    die ("Error: " . $e->getMessage()); 
}


//Seleccionar todas las tablas de cliente
$consulta = $conexion->query("SELECT * FROM cliente");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mantenimiento de clientes</title>
    <style>

        h1, h3{
            text-align: center;
        }
        table{
            text-align: center;
            margin: 0px auto;
        }
        #agregar{
            background-color: green;
            color: white;
        }
        #eliminar{
            background-color: red;
            color: white;
        }
        #modificar{
            background-color: goldenrod;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Mantenimiento de clientes</h1>
    <table border="1">
    <tr>
        <th>DNI</th>
        <th>Nombre</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th colspan="2">Acciones</th>
    </tr>
    <?php
    while ($cliente = $consulta->fetchObject()){
        ?>
        <tr>
            <td><?= $cliente->DNI ?></td>
            <td><?= $cliente->Nombre ?></td>
            <td><?= $cliente->Direccion ?></td>
            <td><?= $cliente->Telefono ?></td>
            <td><form action="bajaCliente.php" method="post">
                <input type="hidden" name="dni" value="<?= $cliente->DNI ?>">
                <input type="submit" value="Eliminar" name="eliminar" id="eliminar">
            </form></td>
            <td><form action="actualizaCliente.php" method="post">
                    <input type="hidden" name="dni" value="<?= $cliente->DNI ?>">
                    <input type="submit" value="Modificar" name="modificar" id="modificar">
                </form></td>
        </tr>
        <?php 
    }
    ?>
    <tr>
        <form action="altaCliente.php" method="post">
            <td><input type="text" name="dni" id="dni" required></td>
            <td><input type="text" name="nombre" id="nombre" required></td>
            <td><input type="text" name="direccion" id="dirección" required></td>
            <td><input type="text" name="telefono" id="telefono" required></td>
            <td colspan="2"><input type="submit" value="Nuevo Cliente" name="agregar" id="agregar"></td>
        </form>
    </tr>
    </table>
    <h3>Número de clientes: <?= $consulta->rowCount() ?></h3>
    <?php
    $conexion=null; 
    ?>
</body>
</html>