<?php 
require_once 'config.php';
require_once 'Jugador.php';

sleep(2);

try {
    // Crear una nueva conexión PDO usando las variables del archivo de configuración
    $conexion = new PDO("mysql:host=$db_host;dbname=$db_nombre;charset=$db_charset", $db_usuario, $db_contraseña);
    // Configurar el modo de error de PDO
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die ("Error en la conexión: " . $e->getMessage());
}

$vec=[]; 

$consulta = $conexion->query("SELECT id,nombre,apellidos,partidas_ganadas FROM jugador");
while ($reg = $consulta->fetchObject()) {

  $vec[] = new Jugador($reg->id,$reg->nombre,$reg->apellidos, $reg->partidas_ganadas);
}

header('Content-Type: application/json; charset=utf-8');
print json_encode($vec); 
?>