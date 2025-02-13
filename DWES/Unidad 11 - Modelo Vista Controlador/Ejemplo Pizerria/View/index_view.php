<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de ofertas</title>
</head>
<body>
    <h1>Pizzeria Peachepe</h1> 
    <a href="../Controller/nuevaOferta.php">Nueva Oferta</a>
    <hr>
    <?php
        foreach ($data['ofertas'] as $oferta) { 
    ?>
        <h3><?= $oferta->getTitulo()?></h3>
        <img src="../View/images/<?=$oferta->getImagen()?>" width="400">
        <br>
        <a style="border: 3px solid black; padding: 5px; border-radius: 7px; margin: 0 15px" href="../Controller/borraOferta.php"></a>
        <a style="border: 3px solid black; padding: 5px; border-radius: 7px; margin: 0 15px" href="../Controller/actualizaOferta.php"></a>
    <?php
        } 
    ?>
</body>
</html>