<?php
//Sesion
session_start();
if (!isset($_SESSION['contadorSi'])) {
    $_SESSION['contadorSi'] = 0;
    // echo "no existe la sesion Si";
} 

if (!isset($_SESSION['contadorNo'])) {
    $_SESSION['contadorNo'] = 0;
    // echo "no exise la sesion No";
}
$contadorSi = $_SESSION['contadorSi'];
$contadorNo = $_SESSION['contadorNo'];

//Cookie
if (isset($_REQUEST['botonSi'])) {
    $_SESSION['contadorSi']++;
    setcookie("contadorSi", $contadorSi, time() + 3 * 30 * 24 * 60 * 60);
    
} 

if (isset($_REQUEST['botonNo'])) {
    $_SESSION['contadorNo']++;
    setcookie("contadorNo", $contadorNo, time() + 3 * 30 * 24 * 60 * 60);

}

if (isset($_COOKIE['contadorSi']) || isset($_COOKIE['contadorNo'])) {
    $contadorSi = $_COOKIE['contadorSi'];
    $contadorNo = $_COOKIE['contadorNo'];
    // echo "existe la cookie";
}

//Opcional: Reiniciar votos

if (isset($_REQUEST['botonReiniciar'])) {
    //Destruir la sesion
    session_destroy();

    //Destruir cookies
    setcookie("contadorSi", NULL, -1);
    setcookie("contadorNo", NULL, -1);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <style>
        body{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <br>
    <h3>¿Crees que actualmente hay corrupción en el gobierno?</h3>
    <h2>SI: <?= $contadorSi?> votos</h2>
    <h2>NO: <?= $contadorNo?> votos</h2>
    <form action="" method="post">
        <input type="submit" value="SI" name="botonSi">
        <input type="submit" value="NO" name="botonNo">
    </form><br>
    <form action="" method="post">
        <input type="submit" value="Reiniciar Votos" name="botonReiniciar">
    </form>
</body>
</html>