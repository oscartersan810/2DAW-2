<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Página</title>

    <?php
    $color = $_REQUEST['color'];
    $tletra = $_REQUEST['tletra'];
    $alineacion = $_REQUEST['alineacion'];
    $tamanio = $_REQUEST['tamanio'];
    $imagen = $_REQUEST['imagen'];
    echo "<img src='imagenesEj3/$imagen.jpg'>";
    ?>

    <style>
        body{
            background-color: <?=$color?>;
            text-align: <?=$alineacion?>;
        }
        p{
            font-family: <?=$tletra?>;
            font-size: <?=$tamanio?>px;
            margin: 2.5rem;
        }
        img{
            max-width: 30%;
        }
    </style>
</head>

<body>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex temporibus, animi quibusdam aut id labore assumenda dolorum esse incidunt sequi fugit, repellat iusto asperiores cum tempore cupiditate delectus expedita veritatis!
    Quibusdam nesciunt aut illo, laboriosam fugit sed distinctio! Asperiores, possimus nulla quisquam ab, nisi at blanditiis illo sint ratione laborum veniam magnam fuga, perspiciatis sit consequatur pariatur aperiam sequi totam.
    Accusantium sit omnis velit. Aut ab quibusdam rerum laboriosam doloremque nam velit, eius quasi, optio porro voluptatum incidunt reiciendis hic beatae vero, quidem eaque explicabo nulla perferendis quaerat tenetur reprehenderit?
    Autem dolorem repudiandae deleniti praesentium nemo voluptates non exercitationem nisi dolorum facere pariatur, rerum itaque, in tempore explicabo eos ad ea modi quibusdam velit sapiente sint minus architecto? Veniam, quam!
    A eius doloremque commodi debitis consectetur asperiores vel suscipit dolorum. Dignissimos excepturi sint cupiditate recusandae delectus doloremque quas nihil doloribus ad, ex placeat minima nesciunt voluptatum unde quasi provident maiores?
    Nam, inventore iusto magni molestias rerum exercitationem rem ad, assumenda pariatur repellendus praesentium soluta quia doloremque natus commodi nisi iste esse velit? Voluptatibus rerum rem nesciunt non quibusdam odio commodi?
    Accusamus voluptates aspernatur tempora minus sapiente illo vitae inventore aperiam error repellat recusandae explicabo fugit magni, numquam perspiciatis quibusdam expedita unde asperiores modi est doloribus! Ab earum dignissimos odit aspernatur.
    Harum distinctio fugit amet doloribus inventore, consequuntur eum? Adipisci possimus eveniet inventore ullam, consequatur deleniti earum voluptatum distinctio voluptate officiis provident. Aspernatur iste hic ipsum mollitia animi praesentium minima inventore?
    Rerum, corrupti illum perferendis ipsam, ex illo dolore veritatis quis delectus animi officia a sint at corporis ut adipisci pariatur voluptatum molestias. Porro officia quam fugiat minus! Praesentium, similique. Quae.
    Aspernatur optio cumque odit magni repudiandae recusandae molestiae harum soluta error ducimus! Delectus sequi accusamus in alias tempora quibusdam placeat, esse nesciunt cumque rerum libero aperiam maiores illo dolor ab!</p>
</body>

</html>