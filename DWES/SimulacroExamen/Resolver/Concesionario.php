<?php
session_start();

//ARRAY DE COCHES AÑADIDOS ALMACENAR EN LA SESIÓN
if (!isset($_SESSION['almacen'])) {
    $almacen = "";
    $_SESSION['almacen'] = [];
    setcookie("almacen", $almacen, time()+ 12*30*24*60*60);

} else if (isset($_COOKIE['almacen'])) {
    $_SESSION['almacen'] = $_COOKIE['almacen'];
}

//BUSCAR CADA TIPO DE VEHICULO EN OTRA PÁGINA
if (!isset($_SESSION['busquedaTipo'])) {
    $_SESSION['busquedaTipo'] = "";
}

if (isset($_REQUEST['busquedaTipo'])) {
    $_SESSION['busquedaTipo'] = $_REQUEST['busquedaTipo'];
}

//VALORES INTRODUCIDOS EN EL FORMULARIO
if (isset($_REQUEST['marca'])) {
    $marca = $_REQUEST['marca'];
    $tipo = $_REQUEST['tipo'];
    $extras = $_REQUEST['extras'];

    $fecha = date("l - d/m/Y");

    $numeroMatricula = rand(100, 999);    
    $letraMatricula = strtoupper(substr($marca,0,2));

    $matricula = "$numeroMatricula-$letraMatricula";

    if (isset($_REQUEST['anadirExtra'])) {
        $listaCoches = [
            $matricula => ["Fecha" => $fecha, "Marca" => $marca, "Tipo" => $tipo, "Extras" => $_REQUEST['masExtras']]
         ];
    } else{
        $listaCoches = [
            $matricula => ["Fecha" => $fecha, "Marca" => $marca, "Tipo" => $tipo, "Extras" => $extras]
         ];
    }

} else {
    $listaCoches = [];
}

if (isset($_REQUEST['anadir'])) {
    if (!isset($_SESSION['almacen'][$matricula])) {
        $_SESSION['almacen'][$matricula] = $listaCoches[$matricula];
    }
}

if (isset($_REQUEST['busqueda'])) {
    header('Location: Categoria.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matricula</title>
</head>
<body>
    <h1>Concesionario</h1>
    
    <form action="" method="post">
        <label for="Marca">MARCA: </label>
        <input type="text" name="marca" id="marca">
        <select name="tipo" id="tipo">
            <option value="turismo">turismo</option>
            <option value="berlina">berlina</option>
            <option value="monovolumen">monovolumen</option>
            <option value="deportivo">deportivo</option>
            <option value="furgoneta">furgoneta</option>
        </select><br><br>
        <label for="Extras">Extras: </label>
        <select name="extras" id="extras">
            <option value="camara Trasera">Cámara Trasera</option>
            <option value="llantas de Aleacion">Llantas de aleación</option>
            <option value="climatizador">Climatizador</option>
        </select><br><br>
        <input type="submit" value="Añadir" name="anadir"><br><br>
        <table border="1">
            <tr>
                <th>MATRÍCULA</th>
                <th>FECHA</th>
                <th>MARCA</th>
                <th>TIPO</th>
                <th>EXTRAS</th>
            </tr>
        <?php
        if (isset($_SESSION['almacen']) && $_SESSION['almacen']) {
            foreach ($_SESSION['almacen'] as $key => $value) {
            ?>
            <tr>
                <td><?= $key ?></td>
                <td><?= $value['Fecha'] ?></td>
                <td><?= $value['Marca'] ?></td>
                <td><?= $value['Tipo'] ?></td>
                <td><?= $value['Extras'] ?></td>
                <td><input type="text" name="masExtras" id="masExtras">
                <input type="submit" value="Añadir Extra" name="anadirExtra">
                </td>
            </tr>
            <?php 
            } 
        }
        ?>
        </table><hr>
        <label for="Seleccion">Selecciona una categoría para ver los coches en el almacen</label><br>
        <select name="busquedaTipo" id="busqueda">
            <option value="turismo">turismo</option>
            <option value="berlina">berlina</option>
            <option value="monovolumen">monovolumen</option>
            <option value="deportivo">deportivo</option>
            <option value="furgoneta">furgoneta</option>
        </select>
        <input type="submit" value="consultar" name="busqueda"><hr>
        <input type="submit" value="BORRAR TODOS LOS VEHÍCULOS" name="eliminar">
    </form><br><br>
    <?php
    if (isset($_REQUEST['eliminar'])) {
        session_destroy();
        setcookie("almacen", "", -1);
    } 
    ?>
</body>
</html>