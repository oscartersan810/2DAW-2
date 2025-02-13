<?php
require_once '../Model/Foto.php';
require_once '../Model/Usuario.php';

if (isset($_REQUEST['insertar'])) {
    move_uploaded_file($_FILES["imagen"]["tmp_name"], "../View/imagen/" . $_FILES["imagen"]["name"]);

    $nuevaFoto = new Foto(null, $_FILES["imagen"]["name"], null);
    $nuevaFoto->insert();
}
