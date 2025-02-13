<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Oferta</title>
</head>
<body>
    <form action="../Controller/updateOferta.php" enctype="multipart/form-data" method="post">
        <input type="hidden" name="id" value="<?=$data['oferta']->getId()?>">
        <h3>Título</h3>
        <input type="text" size="40" name="titulo" value="<?=$data['oferta']->getTitulo()?>">
        <h3>Imagen</h3>
        <img src="../View/images/<?= $data['oferta']->getImagen()?>" width="150px">
        <input type="file" name="imagen" id="imagen" value="<?=$data['oferta']->getImagen()?>">
        <br><h3>Descripción</h3>
        <textarea name="descripcion" cols="60" rows="6" <?= $data['oferta']->getDescripcion()?>></textarea><hr>
        <input type="submit" value="Aceptar">
    </form>
</body>
</html>