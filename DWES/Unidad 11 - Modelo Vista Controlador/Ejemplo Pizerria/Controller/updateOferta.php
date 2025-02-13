<?php
require_once '../Model/Oferta.php';

$oferta = Oferta::getOfertaById($_REQUEST['id']);

if ($oferta->getImagen()!=$_FILES['imagen']['name']) {
    //sube la imagen al servidor
    move_uploaded_file($_FILES['imagen']['tmp_name'], '../View/images/'.$_FILES['imagen']['name']);   
    $imagen = $_FILES['imagen']['name'];
} 

//inserta la oferta en la base de datos
$ofertaAux = new Oferta($_REQUEST['id'], $_REQUEST['titulo'], $imagen, $_REQUEST['descripcion']);
$ofertaAux->update();
header("Location: ../Controller/index.php");
?>