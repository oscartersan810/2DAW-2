<?php
session_start();
require_once("../Model/Foto.php");
require_once("../Model/Usuario.php");
require_once("../Model/Like.php");

$usuarios = Usuario::getUsuarios();
if (isset($_REQUEST["inicio"])) {
    if (isset($_REQUEST["usuario"])) {
        $user = $_REQUEST["usuario"];
        $isUser = false;
        foreach ($usuarios as $key => $usuario) {
            if ($user == $usuario->getNombre()) {
                $isUser = true;
                $_SESSION["user"] = $user;
                $_SESSION["user_id"] = $usuario->getId();
            }
        }
    }
}

if(isset($_REQUEST["registro"])){
    $newUser = new Usuario(0,$_REQUEST["usuario"]);
    $newUser->insert();
}
$fotos = [];
$usuario_array = [];
$foto = new Foto(0, "", 0);
$fotos = $foto->getFotos();
$likes = [];
foreach ($usuarios as $usuario) {
    $usuario_array[$usuario->getId()] = $usuario;
}

if (isset($_REQUEST["id_usuario"]) && isset($_REQUEST["id_foto"])) {
    if (!Like::exists($_REQUEST["id_foto"], $_REQUEST["id_usuario"])) {
        $likeInsert = new Like($_REQUEST["id_foto"], $_REQUEST["id_usuario"]);
        $likeInsert->insert();
        // Actualizar los likes después de la inserción
        $likes[$_REQUEST["id_foto"]] = Like::getLikeByFotos($_REQUEST["id_foto"]);
    }else{
        echo "<h1>Usuario No registrado o inexistente</h1>";
    }
}

foreach ($fotos as $fotoss) {
    $likes[$fotoss->getId()] = Like::getLikeByFotos($fotoss->getId());
}
include("../View/Inicio_View.php");
?>