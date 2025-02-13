<?php
session_start();
require_once '../Model/Usuario.php';

$data['usuarios'] = Usuario::getUsuarios();

if (!isset($_SESSION['usuario'])) {
    $_SESSION['usuario'] = "";
}

if (isset($_REQUEST['iniciaSesion'])) {
    $nombre = $_REQUEST['usuario'];
    foreach ($data['usuarios'] as $usuario) {
        if ($nombre==$usuario->getNombre()) {
        } 
    }
} 

if (isset($_REQUEST['registraUsuario'])) {
    $nuevoUsuario = new Usuario(null, $_REQUEST['usuario']);
    $nuevoUsuario->insert();
    $_SESSION['usuario'] = $nuevoUsuario->getNombre();
    header('index.php');
}

include '../View/sesion_registroView.php'; 
?>