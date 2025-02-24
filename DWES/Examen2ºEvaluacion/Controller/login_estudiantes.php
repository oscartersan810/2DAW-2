<?php 
session_start();
require_once '../Model/Usuario.php';

$data['usuarios'] = Usuario::getUsuarios();

if (isset($_SESSION['usuario'])) {
    header('Location: pg_estudiante.php');
}
// else{
//     header('Location: pg_estudiante.php');
// }

if (isset($_REQUEST['nombre'])) {
    $nombre = $_REQUEST['nombre'];
    $clave = $_REQUEST['clave'];
    foreach ($data['usuarios'] as $usuario) {
        if (($nombre==$usuario->getNombre()) && ($clave==$usuario->getClave()) && ($usuario->getPerfil()=="estudiante")) {
            $_SESSION['usuario'] = $usuario->getNombre();
            header('Location: pg_estudiante.php');
        }
    }   
}

include '../View/login.php';
?>