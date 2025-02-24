<?php
session_start();
require_once '../Model/Usuario.php';

if (isset($_REQUEST['cerrar'])) {
    unset($_SESSION['usuario']);
    session_destroy();
    header('Location: ../Controller/index.php');
    exit;
}

if (isset($_REQUEST['principal'])) {
    header('Location: ../Controller/index.php');
    exit;
}

include '../View/perfil_view.php';
?>
