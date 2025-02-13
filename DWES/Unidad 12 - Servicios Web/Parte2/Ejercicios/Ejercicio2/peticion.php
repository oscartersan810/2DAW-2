<?php
if (isset($_POST['n_cartas'])) {
    $nCartas = intval($_POST['n_cartas']); // Convertir a entero para evitar errores

    // Enviar petición POST a consultaBarajaCartas.php
    $parametros = http_build_query(['n_cartas' => $nCartas]);
    $opciones = [
        'http' => [
            'method'  => 'POST',
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'content' => $parametros
        ]
    ];
    $contexto = stream_context_create($opciones);
    $respuesta = file_get_contents("http://localhost//2DAW-2/DWES/Unidad%2012%20-%20Servicios%20Web/Parte2/Ejercicios/Ejercicio2/consultaBarajaCartas.php", false, $contexto);

    // Decodificar JSON y mostrar resultado
    $cartas = json_decode($respuesta, true);

    if (isset($cartas['error'])) {
        echo "<h2>Error: {$cartas['error']}</h2>";
    } else {
        echo "<h2>Cartas generadas:</h2><ul>";
        foreach ($cartas as $carta) {
            echo "<li>{$carta['figura']} de {$carta['palo']}</li>";
        }
        echo "</ul>";
    }
}
?>
