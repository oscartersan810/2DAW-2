<?php
$codEstado = 200;
$metodo = $_SERVER['REQUEST_METHOD'];

if ($metodo == 'GET') {
    $codEstado = 405;
    header('HTTP/1.1 405 Method Not Allowed');
    echo "<h1>Método no permitido</h1>";
} else if ($metodo == 'POST') {
    
    if (isset($_POST['euros'])) {
        $euros = $_POST['euros'];  
        $pesetas = $euros * 166.386;  
        echo "<h2>$euros euros son $pesetas pesetas</h2>";
    }

    if (isset($_POST['pesetas'])) {
        $pesetas = $_POST['pesetas'];  
        $euros = $pesetas / 166.386;  
        echo "<h2>$pesetas pesetas son $euros euros</h2>";
    }
}

// var_dump($_POST);
echo "<a href='index.php'>Volver al Convertidor</a>"
?>