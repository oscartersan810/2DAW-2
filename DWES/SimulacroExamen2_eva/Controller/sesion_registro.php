<?php
session_start();
require_once '../Model/Usuario.php';

// Obtener todos los usuarios
$data['usuarios'] = Usuario::getUsuarios();

// Inicializar la sesión del usuario si no existe
if (!isset($_SESSION['usuario'])) {
    $_SESSION['usuario'] = "";
}

// Procesar inicio de sesión
if (isset($_REQUEST['iniciaSesion'])) {
    $nombre = $_REQUEST['usuario'];
    foreach ($data['usuarios'] as $usuario) {
        if ($nombre == $usuario->getNombre()) {
            $_SESSION['usuario'] = $usuario->getNombre();
            header('Location: ../Controller/index.php');
            break;
        }
    }
}

// Procesar registro de nuevo usuario
if (isset($_REQUEST['registraUsuario'])) {
    $nuevoUsuario = new Usuario(null, $_REQUEST['usuario']);
    $nuevoUsuario->insert();
    $_SESSION['usuario'] = $nuevoUsuario->getNombre();
    // Redirigir a la página principal
    header('Location: ../Controller/index.php');
    exit;
}

// Incluir la vista para el formulario de sesión o registro
include '../View/sesion_registroView.php'; 
?>
