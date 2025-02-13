<?php
//Conexión con la base de datos
try {
    $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "");
} catch (PDOException $e) {  
    echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";  
    die ("Error: " . $e->getMessage()); 
}

//Seleccionar todas las tablas de cliente
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualiza Cliente</title>
</head>
<body>
    <h1>Página Actualizar Cliente</h1>
    <?php
    if(isset($_REQUEST['actualiza'])){
        $update= "UPDATE cliente SET Nombre='$_POST[nombre]', Direccion='$_POST[direccion]', Telefono='$_POST[telefono]' WHERE DNI='$_POST[dni]'"; 
        $conexion->exec($update);
        header('Location: Clientes.php');
    } else{
        $consulta = $conexion->query("SELECT * FROM cliente WHERE DNI='$_REQUEST[dni]'");
        $cliente=$consulta->fetchObject();
    }  
    ?>
    
    <form action="" method="post">
        <input type="text" name="dni" value="<?= $cliente->DNI ?>" readonly>
        <input type="text" name="nombre" value="<?= $cliente->Nombre ?>" required>
        <input type="text" name="direccion" value="<?= $cliente->Direccion ?>" required>
        <input type="text" name="telefono" value="<?= $cliente->Telefono ?>" required>
        <input type="submit" value="Actualizar" name="actualiza">
    </form>
</body>
</html>