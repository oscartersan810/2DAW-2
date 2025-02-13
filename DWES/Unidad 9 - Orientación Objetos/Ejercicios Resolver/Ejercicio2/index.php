<?php
include_once 'Menu.php'; 
session_start();
if (!isset($_SESSION['menu'])) {
    $_SESSION['menu'] = new Menu();
}

if (!isset($_SESSION['listaMenus'])) {
    $_SESSION['listaMenus'] = [];
}

$menu = $_SESSION['menu'];
$listaMenus = $_SESSION['listaMenus'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <?php
    if (isset($_REQUEST['titulo']) && isset($_REQUEST['enlace'])) {
        $titulo = $_REQUEST['titulo'];
        $enlace = $_REQUEST['enlace'];

        if (isset($_REQUEST['anadir'])) {
            $menu->addMenu($titulo, $enlace);
            $listaMenus = ["Titulo"=> $menu->getTitulo(), "Enlace"=> $menu->getEnlace()];
            print_r($listaMenus);
        }
    }

    if (isset($_REQUEST['eliminar'])) {
        session_destroy();
        header('Refresh: 0');
    }

    if (!isset($_REQUEST['mostrar'])) {
    ?>
    <h1>Prueba Menús</h1>
    <form action="#" method="post">
        <label for="Titulo">Titulo: </label>
        <input type="text" name="titulo" id="titulo"><br><br>
        <label for="Precio">Enlace: </label>
        <input type="text" name="enlace" id="enlace"><br><br>
        <input type="submit" value="Añadir" name="anadir"><br>
        <input type="submit" value="Mostrar Enlaces" name="mostrar">
        <input type="submit" value="Borrar Enlaces" name="eliminar">
    </form>
    <?php
    } else{
        foreach ($listaMenus as $key => $value) {
            $menu->mostrarHorizontal();
        }

    } 
    ?>
</body>
</html>