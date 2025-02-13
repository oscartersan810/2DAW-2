<?php
try { 
    $conexion = new PDO("mysql:host=localhost;dbname=gestisimal;charset=utf8", "root", ""); 
} catch (PDOException $e) { 
    echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>"; 
    die ("Error: ". $e->getMessage()); 
} 

if (isset($_REQUEST['codigo']) && isset($_REQUEST['descripcion'])) {
    $codigo = $_REQUEST['codigo'];
    $descripcion = $_REQUEST['descripcion'];
    $precio_compra = $_REQUEST['precio_compra'];
    $precio_venta = $_REQUEST['precio_venta'];
    $margen = $_REQUEST['precio_venta'] - $_REQUEST['precio_compra'];
    $stock = $_REQUEST['stock'];
}

$consulta = $conexion->query("SELECT codigo FROM articulos WHERE codigo = '$codigo'");

if ($consulta->rowCount() > 0) {
    echo "<p>Ya existe un articulo con el codigo $codigo</p>";
    echo "<p>Vaya a la pagina de nuevo <a href='Gestisimal.php'>página de Artículos</p>";
    $conexion =null;
} else {
    $insercion = "INSERT INTO articulos(codigo, descripcion, precio_compra, precio_venta, margen, stock) VALUES ('$codigo' , '$descripcion', '$precio_compra', '$precio_venta', '$margen', '$stock')";
    $conexion->exec($insercion);
    $conexion =null;
    header('Location: Gestisimal.php');
}

?>