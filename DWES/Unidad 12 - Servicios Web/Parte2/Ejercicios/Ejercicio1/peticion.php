<?php
if (isset($_REQUEST['euros'])) {
    $euros = $_REQUEST['euros'];
    $parametros = http_build_query(['euros' => $euros]); 
    $data = file_get_contentsPOST("http://localhost/2DAW-2/DWES/Unidad%2012%20-%20Servicios%20Web/Parte2/Ejercicios/Ejercicio1/consultaConversion.php", $parametros);
    echo $data;  
}

if (isset($_REQUEST['pesetas'])) {
    $pesetas = $_REQUEST['pesetas'];
    $parametros = http_build_query(['pesetas' => $pesetas]);
    $data = file_get_contentsPOST("http://localhost/2DAW-2/DWES/Unidad%2012%20-%20Servicios%20Web/Parte2/Ejercicios/Ejercicio1/consultaConversion.php", $parametros);
    echo $data;  
}
function file_get_contentsPOST($url, $parametros) {
    $options = [
        'http' => [
            'method'  => 'POST',
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'content' => $parametros
        ]
    ];
    $context = stream_context_create($options);
    return file_get_contents($url, false, $context);  
}
?>
