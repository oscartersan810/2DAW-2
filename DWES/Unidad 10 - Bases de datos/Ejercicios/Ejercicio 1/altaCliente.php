<?php
//Conexión con la base de datos
try {
    $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "");
} catch (PDOException $e) {
    echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
    die("Error: " . $e->getMessage());
}

$dni = $_REQUEST['dni'];
$nombre = $_REQUEST['nombre'];
$direccion = $_REQUEST['direccion'];
$telefono = $_REQUEST['telefono'];

$insercion = "INSERT INTO cliente(DNI, Nombre, Direccion, Telefono) VALUES ('$dni' , '$nombre', '$direccion', '$telefono')";

$conexion->exec($insercion);
$conexion =null;
header('Location: Clientes.php');
