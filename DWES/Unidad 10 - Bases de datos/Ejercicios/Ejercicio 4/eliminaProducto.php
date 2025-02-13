<?php
try {
    $conexion = new PDO("mysql:host=localhost;dbname=gestisimal;charset=utf8", "root", "");
} catch (PDOException $e) {  
    echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";  
    die ("Error: " . $e->getMessage()); 
}
$consulta = $conexion->query("SELECT * FROM articulos"); 

$eliminar = "DELETE FROM articulos WHERE codigo = '$_REQUEST[codigo]'";
$conexion->exec($eliminar);
$conexion=null;
    
header('Location: Gestisimal.php');
 ?>