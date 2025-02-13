<?php
session_start();
if (!isset($_SESSION['sumaPares'])){
    $_SESSION['sumaPares'] = 0;
} 
if (!isset($_SESSION['sumaImpares'])) {
    $_SESSION['sumaImpares'] = 0;
}
if (!isset($_SESSION['contImpar'])) {
    $_SESSION['contImpar'] = 0;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>
<?php
    $fin = false;
    if (isset($_REQUEST['numero'])) {
        if ($_REQUEST['numero']>=0) {
            if ($_REQUEST['numero'] % 2 == 0) {
                $_SESSION['sumaPares']+=$_REQUEST['numero'];
            } else{
                $_SESSION['sumaImpares']+=$_REQUEST['numero'];
                $_SESSION['contImpar']++;
            }
        } else {
            $mediaImpar = $_SESSION['sumaImpares']/$_SESSION['contImpar'];
            $sumaPares = $_SESSION['sumaPares'];
            echo "<h1>La suma de todos los numeros pares es $sumaPares</h1>";
            echo "<br>";
            echo "<h1>La media de todos los numeros impares es $mediaImpar</h1>";
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