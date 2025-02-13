<?php
//Conexión con la base de datos
try {
    $conexion = new PDO("mysql:host=localhost;dbname=banco;charset=utf8", "root", "");
} catch (PDOException $e) {  
    echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";  
    die ("Error: " . $e->getMessage()); 
}
$consulta = $conexion->query("SELECT * FROM cliente"); 

$eliminar = "DELETE FROM cliente WHERE DNI= '$_REQUEST[dni]'";
$conexion->exec($eliminar);
$conexion=null;
    
header('Location: Clientes.php');
?>