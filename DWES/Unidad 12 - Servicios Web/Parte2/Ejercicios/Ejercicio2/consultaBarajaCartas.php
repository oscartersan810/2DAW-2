<?php
$metodo = $_SERVER['REQUEST_METHOD'];

if ($metodo !== 'POST') {
    header('HTTP/1.1 405 Method Not Allowed');
    echo json_encode(['error' => 'Método no permitido, usa POST']);
    exit;
}

// Verificar que se ha enviado el número de cartas
if (!isset($_POST['n_cartas'])) {
    echo json_encode(['error' => 'Número de cartas no especificado']);
    exit;
}

$nCartas = intval($_POST['n_cartas']); // Convertir a entero

// Validar rango de cartas
if ($nCartas < 1 || $nCartas > 40) {
    echo json_encode(['error' => 'El número de cartas debe estar entre 1 y 40']);
    exit;
}

// Definir los palos y figuras de la baraja española
$palos = ['Oros', 'Copas', 'Espadas', 'Bastos'];
$figuras = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Crear el mazo completo
$mazo = [];
foreach ($palos as $palo) {
    foreach ($figuras as $figura) {
        $mazo[] = ['figura' => $figura, 'palo' => $palo];
    }
}

// Mezclar y extraer las cartas solicitadas
shuffle($mazo);
$cartasSeleccionadas = array_slice($mazo, 0, $nCartas);

// Devolver las cartas en formato JSON
header('Content-Type: application/json');
echo json_encode($cartasSeleccionadas);
?>
