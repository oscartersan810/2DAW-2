<?php
session_start();
require_once '../Model/Foto.php';
require_once '../Model/Usuario.php';

if (isset($_REQUEST['insertar'])) {
    move_uploaded_file($_FILES["imagen"]["tmp_name"], "../View/imagen/" . $_FILES["imagen"]["name"]);
    $usuario = Usuario::getUsuarioByNombre($_SESSION['usuario']);
    $nuevaFoto = new Foto(null, $_FILES["imagen"]["name"], $usuario->getid());
    $nuevaFoto->insert();
    header("Location: ../index.php"); // Redirigir tras la subida
}
include '../View/perfil_view.php';
?>