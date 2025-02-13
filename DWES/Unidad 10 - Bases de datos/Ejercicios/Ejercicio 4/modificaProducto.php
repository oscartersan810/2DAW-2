<?php
//Conexión con la base de datos
try {
    $conexion = new PDO("mysql:host=localhost;dbname=gestisimal;charset=utf8", "root", "");
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
    <title>Modificar Articulo</title>
</head>
<body>
    <h1>Página Actualizar Artículo</h1>
    <?php
    if(isset($_REQUEST['modificar'])){
        $margen = $_REQUEST['precio_venta'] - $_REQUEST['precio_compra'];

        $update= "UPDATE articulos SET descripcion='$_POST[descripcion]', precio_compra='$_POST[precio_compra]', precio_venta='$_POST[precio_venta]' ,
         margen='$margen' , precio_venta='$_POST[precio_venta]' WHERE codigo='$_POST[codigo]'"; 

        $conexion->exec($update);
        header('Location: Gestisimal.php');
    } else{
        $consulta = $conexion->query("SELECT * FROM articulos WHERE codigo='$_REQUEST[codigo]'");
        $articulo=$consulta->fetchObject();
    }  
    ?>
    
    <form action="" method="post">
        <input type="text" name="codigo" value="<?= $articulo->codigo ?>" readonly>
        <input type="text" name="descripcion" value="<?= $articulo->descripcion ?>" required>
        <input type="text" name="precio_compra" value="<?= $articulo->precio_compra ?>" required>
        <input type="text" name="precio_venta" value="<?= $articulo->venta ?>" required>
        <input type="text" name="stock" value="<?= $articulo->stock ?>" required>
        <input type="submit" value="Actualizar" name="actualiza">
    </form>
</body>
</html>