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

//Comprobar si un cliente tiene asignado el DNI 
$consulta = $conexion->query("SELECT DNI FROM cliente WHERE DNI = '$dni'");

if ($consulta->rowCount() > 0) {
    echo "<p>Ya existe un cliente con el DNI $dni</p>";
    echo "<p>Vaya a la pagina de nuevo <a href='Clientes.php'>página de clientes</p>";
    $conexion =null;
} else {
    $insercion = "INSERT INTO cliente(DNI, Nombre, Direccion, Telefono) VALUES ('$dni' , '$nombre', '$direccion', '$telefono')";
    $conexion->exec($insercion);
    $conexion =null;
}
