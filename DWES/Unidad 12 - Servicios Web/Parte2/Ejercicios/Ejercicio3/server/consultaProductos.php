<?php
header("Content-Type: application/json");
require_once "serviceUsersDB.php";

// Verifica si el token está presente
if (!isset($_GET['token'])) {
    echo json_encode(["error" => "Token no proporcionado"]);
    exit;
}

$token = $_GET['token'];

// Validar el token en la base de datos
$stmt = $pdo->prepare("SELECT nombre, peticiones FROM clientes WHERE token = ?");
$stmt->execute([$token]);
$cliente = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$cliente) {
    echo json_encode(["error" => "Token inválido"]);
    exit;
}

// Incrementar el número de peticiones
$stmt = $pdo->prepare("UPDATE clientes SET peticiones = peticiones + 1 WHERE token = ?");
$stmt->execute([$token]);

// Manejar la consulta según los parámetros
if (isset($_GET['nombre'])) {
    $nombre = "%" . $_GET['nombre'] . "%";
    $stmt = $pdo->prepare("SELECT nombre, precio, imagen FROM productos WHERE nombre LIKE ?");
    $stmt->execute([$nombre]);
} elseif (isset($_GET['min_precio']) && isset($_GET['max_precio'])) {
    $min = floatval($_GET['min_precio']);
    $max = floatval($_GET['max_precio']);
    $stmt = $pdo->prepare("SELECT nombre, precio, imagen FROM productos WHERE precio BETWEEN ? AND ?");
    $stmt->execute([$min, $max]);
} else {
    echo json_encode(["error" => "Parámetros incorrectos"]);
    exit;
}

$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($productos);
?>
