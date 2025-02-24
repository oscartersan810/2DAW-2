<?php
session_start();
require_once("../Model/Foto.php");
require_once("../Model/Usuario.php");
require_once("../Model/Like.php");

if (isset($_REQUEST["imagen"])) {
    $imagen = $_REQUEST["imagen"];
    $foto = Foto::getFotoByImagen($imagen);
    $likes = Like::getLikeByFotos($foto->getId());
    $usuarios = [];

    foreach ($likes as $like) {
        $usuarios[] = Usuario::getUsuarioById($like->getId_usuario());
    }

    include_once("../View/Detalles_View.php");
} else {
    header("Location: ../Controller/Inicio_Controller.php");
}
?>