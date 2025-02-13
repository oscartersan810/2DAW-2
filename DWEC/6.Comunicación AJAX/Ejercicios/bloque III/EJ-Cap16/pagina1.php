<?php
require_once 'config.php';
require_once 'Componentes.php';

sleep(2); // Retardo de la página 2 segundos

try {
    // Crear una nueva conexión PDO usando las variables del archivo de configuración
    $conexion = new PDO("mysql:host=$db_host;dbname=$db_nombre;charset=$db_charset", $db_usuario, $db_contraseña);
    // Configurar el modo de error de PDO
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}

$vec = [];

$consulta = $conexion->query("SELECT * FROM componentes");
while ($reg = $consulta->fetchObject()) {
    $vec[] = new Componentes($reg->id, $reg->nombre, $reg->descripcion, $reg->imagen);
}

// Construcción del XML con SimpleXMLElement
$xmlstr = "<?xml version='1.0' encoding='UTF-8'?>\n<componente></componente>";
$xml = new SimpleXMLElement($xmlstr);

foreach ($vec as $comp) { // Se usa $vec en lugar de $componentes
    $item = $xml->addChild('componente');
    $item->addChild('id', $comp->id);
    $item->addChild('nombre', $comp->nombre);
    $item->addChild('descripcion', $comp->descripcion);
    $item->addChild('imagen', $comp->imagen);
}

// Configurar el encabezado para devolver XML
header('Content-Type: application/xml; charset=utf-8');
echo $xml->asXML();
?>
