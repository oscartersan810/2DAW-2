<?php 
include_once 'MonstruoDeLasGalletas.php';//Debe estar antes del session_start, o provocará error
session_start();
if (!isset($_SESSION['coco'])) {
    $_SESSION['coco'] = new MonstruoDeLasGalletas();
}
$coco = $_SESSION['coco'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php
    if (isset($_POST['numeroDeGalletas'])) {
        $numeroDeGalletas = $_POST['numeroDeGalletas'];
        $coco->come($numeroDeGalletas);
        $_SESSION['coco'] = $coco;
    }
    ?>
    <h2>Soy Coco y he comido <?= $coco->getGalletas(); ?> galletas.</h2>
    <form action="" method="POST"> Nº de galletas:
        <input type="number" name="numeroDeGalletas" min="1">
        <input type="submit" value="Comer">
    </form>
</body>

</html>