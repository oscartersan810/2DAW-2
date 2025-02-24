<?php
require_once "config.php"; 
require_once "Comunidad.php";

sleep(3);

try {
    // Crear una nueva conexión PDO usando las variables del archivo de configuración
    $conexion = new PDO("mysql:host=$db_host;dbname=$db_nombre;charset=$db_charset", $db_usuario, $db_contraseña);
    // Configurar el modo de error de PDO
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die ("Error en la conexión: " . $e->getMessage());
}

$comVec = [];
$consulta = $conexion->query("SELECT id,nombre FROM comunidades_autonomas");

while ($reg = $consulta->fetchObject()) {
  $comVec[] = new Comunidad($reg->id,$reg->nombre);
}

header('Content-Type: application/json; charset=utf-8');
print json_encode($comVec); 

?>