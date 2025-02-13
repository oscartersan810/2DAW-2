<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        /* Estilo de la tabla */
        table {
            background-image: url('Snorlax.webp');
            background-size: cover;
            /* La imagen cubre toda la tabla */
            background-position: center;
            /* La imagen se centra en la tabla */
            border-collapse: collapse;
            width: 450px;
            height: 450px;
        }

        .transparente {
            background-color: #00000000;
            pointer-events: none
        }

        /* Estilo de las celdas de la tabla */
        td {
            position: relative;
            /* Hace que la celda se convierta en el contenedor de referencia para su contenido posicionado */
            padding: 10px;
            border: 1px solid black;
            background-color: grey;
        }

        .td-link {
            display: block;
            /* Hace que el enlace se comporte como un bloque y no como un elemento en línea */
            width: 100%;
            /* Llena el ancho de la celda */
            height: 100%;
            /* Llena el alto de la celda */
            position: absolute;
            /* Hace que el enlace se posicione en relación a la celda */
            top: 0;
            left: 0;
            z-index: 1;
            /* Asegura que el enlace esté encima de otros contenidos en la celda */
            background: rgba(255, 255, 255, 0);
            /* Un fondo transparente */
        }

    </style>

</head>

<body>
    <div class="container text-center d-flex flex-column align-items-center justify-content-center gap-3 my-3">

        <h1>Ejercicio 1</h1>
        <h5>Vamos a diseñar un juego para adivinar imágenes mostrando solo alguna parte de ellas. Dividir una
            imagen en un mosaico de 3x3, y mostrar una cuadrícula en la página principal con todos los cuadrados
            del mosaico dados la vuelta. Debajo de la cuadrícula habrá una caja de texto para que el usuario intente
            adivinar el nombre de lo que aparece en la imagen, junto a un botón comprobar.
            Cada vez que el usuario pulse en un cuadrado de la cuadrícula se mostrará el contenido solo de esa
            cuadrícula durante 2 segundos y posteriormente se volverá a ocultar.
            Cuando el usuario escriba algo y pulse el botón comprobar ocurrirá lo siguiente:
            -Si ha acertado se mostrará la imagen completa y un mensaje de felicitación por acertar.
            -Si no ha acertado se mostrará un mensaje indicando que ha fallado y un botón de volver para seguir
            intentándolo.
            </h4>

            <!-- Tabla 3x3 con la imagen de Snorlax como fondo -->

            <?php if (isset($_POST['nombre']) &&  strtolower($_POST['nombre']) == "snorlax"){ ?>
                <h4>¡Has acertado, se trata del pokemon Snorlax!</h4>
            <?php 
                } else if(isset($_POST['nombre']) && strtolower($_POST['nombre']) != "snorlax") {
            ?>
                <h4>¡Has fallado, intentalo de nuevo!</h4>
            <?php
                }
            ?>

            <form method="POST" action="">
                <table>
                    <?php
                    $revelar = isset($_POST['revelar'] ) ? $_POST['revelar'] : null;
                    $intentos = isset($_POST['intentos']) ? $_POST['intentos'] + 1 : 0;

                    for ($i = 0; $i < 3; $i++) {
                    ?>
                        <tr>
                            <?php
                            for ($j = 0; $j < 3; $j++) {
                            ?>
                                <td <?php
                                    if ($revelar == $i . $j) {
                                        // Si el parametro que nos llega es el mismo que la posicion de esa celda añade la clase transparente
                                        echo "class='transparente'";
                                    }
                                    ?>>
                                    <button name="revelar" value="<?= $i . $j ?>" class="td-link"></button>
                                    <input type="hidden" name="intentos" value="<?= $intentos ?>">
                                </td>
                            <?php
                            }
                            ?>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </form>


            <h2>Intentos: <?= $intentos ?></h2>

            <form action="" method="post" class="d-flex flex-column gap-2">
                <label for="nombre" class="d-block">¿Cuál es la imagen detras de los cuadrados?</label>
                <input type="text" name="nombre" id="nombre">
                <input type="hidden" name="intentos" value="<?= $intentos ?>">
                <input type="submit" value="Comprobar resultado">
            </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>