<?php
session_start();
if (!isset($_SESSION['suma'])) {
    $_SESSION['suma'] = 0;
}

if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
    <?php
    $fin = false;
    if (isset($_REQUEST['numero'])) {
        if ($_REQUEST['numero']>=0) {
            $_SESSION['suma']+=$_REQUEST['numero'];
            $_SESSION['contador']++;
        } else {
            $media = $_SESSION['suma']/$_SESSION['contador'];
            echo "<h1>La media de todos los numeros es $media</h1>";
            $fin = true;
        }
    }

        if (!$fin) {
    ?>
    <form action="" method="post">
        Numero(negativo para terminar) <input type="number" name="numero"><br>
        <input type="submit" value="Añadir">
    </form>
    <?php
    } 
    ?>

</body>

</html>