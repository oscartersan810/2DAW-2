<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
    <h1>Ejercicio 1: Adivina la imagen</h1>

    <?php
    if (isset(($_REQUEST['name']))) {
        # code...
    }
    ?>
    <table border="1">
        <tr>
            <td><a href="Ejercicio1.php?name=c1"><img src="ImgEj1/<?= ($c == "c1") ? $c . ".jpg" : "gris.jpg" ?>" alt="i1"></a></td>
            <td><a href="Ejercicio1.php?name=c2"><img src="ImgEj1/<?= ($c == "c2") ? $c . ".jpg" : "gris.jpg" ?>" alt="i2"></a></td>
            <td><a href="Ejercicio1.php?name=c3"><img src="ImgEj1/<?= ($c == "c3") ? $c . ".jpg" : "gris.jpg" ?>" alt="i3"></a></td>
        </tr>
        <tr>
            <td><a href="Ejercicio1.php?name=c4"><img src="ImgEj1/<?= ($c == "c4") ? $c . ".jpg" : "gris.jpg" ?>" alt="i4"></a></td>
            <td><a href="Ejercicio1.php?name=c5"><img src="ImgEj1/<?= ($c == "c5") ? $c . ".jpg" : "gris.jpg" ?>" alt="i5"></a></td>
            <td><a href="Ejercicio1.php?name=c6"><img src="ImgEj1/<?= ($c == "c6") ? $c . ".jpg" : "gris.jpg" ?>" alt="i6"></a></td>
        </tr>
        <tr>
            <td><a href="Ejercicio1.php?name=c7"><img src="ImgEj1/<?= ($c == "c7") ? $c . ".jpg" : "gris.jpg" ?>" alt="i7"></a></td>
            <td><a href="Ejercicio1.php?name=c8"><img src="ImgEj1/<?= ($c == "c8") ? $c . ".jpg" : "gris.jpg" ?>" alt="i8"></a></td>
            <td><a href="Ejercicio1.php?name=c9"><img src="ImgEj1/<?= ($c == "c9") ? $c . ".jpg" : "gris.jpg" ?>" alt="i9"></a></td>
        </tr>
    </table><br>
    <hr>
    <form action="Ejercicio1b.php" method="post">
        <label for="nombreImagen">Adivina la Imagen: </label>
        <input type="text" name="nombre" id="nombre"><br><br>
        <input type="hidden" name="intentos" value="<?= $intentos++ ?>">
        <input type="submit" value="Adivinar">
    </form>
    <?php
    $intentos = 0;
    if ($intentos > 4) {
    ?>
        <table border="1">
            <tr>
                <td><a href="Ejercicio1.php?name=c1"><img src="ImgEj1/1.jpg"></a></td>
                <td><a href="Ejercicio1.php?name=c2"><img src="ImgEj1/2.jpg"></a></td>
                <td><a href="Ejercicio1.php?name=c3"><img src="ImgEj1/3.jpg"></a></td>
            </tr>
            <tr>
                <td><a href="Ejercicio1.php?name=c4"><img src="ImgEj1/4.jpg"></a></td>
                <td><a href="Ejercicio1.php?name=c5"><img src="ImgEj1/5.jpg"></a></td>
                <td><a href="Ejercicio1.php?name=c6"><img src="ImgEj1/6.jpg"></a></td>
            </tr>
            <tr>
                <td><a href="Ejercicio1.php?name=c7"><img src="ImgEj1/7.jpg"></a></td>
                <td><a href="Ejercicio1.php?name=c8"><img src="ImgEj1/8.jpg"></a></td>
                <td><a href="Ejercicio1.php?name=c9"><img src="ImgEj1/9.jpg"></a></td>
            </tr>
        </table><br>
    <?php
    }
    ?>


</body>

</html>