<?php
require_once '../Model/Usuario.php';

$codEstado=400;
$metodo = $_SERVER['REQUEST_METHOD'];
$mensaje = "Solicitud incorrecta";

if ($metodo == 'GET') {
    $mensaje = "Peticion no válida";
    $codEstado=400;   
} else if ($metodo == 'POST') {
    
}

function setCabecera($codEstado, $mensaje) {  
    header("HTTP/1.1 $codEstado $mensaje");  
    header("Content-Type: application/json;charset=utf-8");  
  }
?>