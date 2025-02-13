<?php
session_start();
if (!isset($_SESSION['suma'])) {
    $_SESSION['suma'] = 0;
    $_SESSION['contador'] = 0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
<?php
    $fin = false;
    if (isset($_REQUEST['numero'])) {
        if ($_SESSION['suma'] < 10000) {
            $_SESSION['suma']+=$_REQUEST['numero'];
            $_SESSION['contador']++;
        } else {
            $sumaTotal = $_SESSION['suma'];
            $contadorNumeros = $_SESSION['contador'];
            echo "<h1>Numeros totales introducidos: $contadorNumeros</h1>";
            echo "<br>";
            echo "<h1>Suma total: $sumaTotal</h1>";
            $fin = true;
        }
    } 

        if (!$fin) {
    ?>
    <form action="" method="post">
        Numero a sumar (hasta 10000):  <input type="number" name="numero"><br>
        <input type="submit" value="Añadir">
    </form>
    <?php
    } 
    ?>
</body>
</html>