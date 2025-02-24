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

$xmlstr = "<?xml version='1.0' encoding='UTF-8'?>\n<comunidades></comunidades>";
$xml = new SimpleXMLElement($xmlstr);

foreach ($comVec as $comp) { // Se usa $vec en lugar de $componentes
    $item = $xml->addChild('comunidad');
    $item->addChild('id', $comp->id);
    $item->addChild('nombre', $comp->nombre);
}

header('Content-Type: application/xml; charset=utf-8');
echo $xml->asXML();

?>