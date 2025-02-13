<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>

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
    <h1>Ejercicio 1</h1>
    <h4>Vamos a diseñar un juego para adivinar imágenes mostrando solo alguna parte de ellas. Dividir una
        imagen en un mosaico de 3x3, y mostrar una cuadrícula en la página principal con todos los cuadrados
        del mosaico dados la vuelta. Debajo de la cuadrícula habrá una caja de texto para que el usuario intente
        adivinar el nombre de lo que aparece en la imagen, junto a un botón comprobar.
        Cada vez que el usuario pulse en un cuadrado de la cuadrícula se mostrará el contenido solo de esa
        cuadrícula durante 2 segundos y posteriormente se volverá a ocultar.
        Cuando el usuario escriba algo y pulse el botón comprobar ocurrirá lo siguiente:
        -Si ha acertado se mostrará la imagen completa y un mensaje de felicitación por acertar.
        -Si no ha acertado se mostrará un mensaje indicando que ha fallado y un botón de volver para seguir
        intentándolo.
        - Indicar acierto o falla
        - 4 oportunidades como máximo
        - Mostrar imagen al acertar
        - Botón que al finalizar te permita volver a empezar (Solo visible con 3 fallos o al acertar)
    </h4>
    <!-- Tabla 3x3 con la imagen de Snorlax como fondo -->
    <table>
        <?php
        $revelar = isset($_REQUEST['revelar']) ? $_REQUEST['revelar'] : null;

        // Esto es lo mismo que arriba
        // if (isset($_REQUEST['revelar'])) {
        //     $revelar = $_REQUEST['revelar'];
        // }else{
        //     $revelar = null;
        // }

        $intentos = isset($_REQUEST['intentos']) ? $_REQUEST['intentos'] + 1 : 0;
        
        $nombre = isset($_REQUEST['nombre']) ? $_REQUEST['nombre'] : null;
        // if (isset($_REQUEST['intentos'])) {
        //     $intentos = $_REQUEST['intentos'] + 1;
        // } else {
        //     $intentos = 0;
        // }

        if ($intentos != 4 && $nombre!="Snorlax") {
            for ($i = 0; $i < 3; $i++) {
        ?>
            <tr>
                <?php
                for ($j = 0; $j < 3; $j++) {
                ?>
                    <td <?php
                        if ($revelar == $i . $j) {
                            echo "class='transparente'";
                        }
                            ?>>
                            <a href="?revelar=<?= $i . $j ?>&intentos=<?= $intentos ?>" class="td-link"></a>
                        </td>
                    <?php
                    }
                    ?>
                </tr>
            <?php
            }
            ?>
             </table>
            <h2>Intentos: <?= $intentos ?></h2>
            <form action="" method="post">
                Nombre de la imagen: <input type="text" name="nombre">
                <input type="hidden" name="intentos" value=<?= $intentos ?>>
                <input type="submit" value="Enviar Respuesta">
            </form>
        <?php
        } else {
            if ($intentos == 4) {
        ?>
            <h2>¡Has Fallado inténtalo de nuevo! El nombre correcto es Snorlax</h2>
            <form action="index.php" method="post">
                <input type="submit" value="Empezar de nuevo">
            </form>
        <?php
            }
            if ($nombre == "Snorlax") {
                ?>
                <h2>¡Enhorabuena has acertado! El nombre es <?=$nombre?></h2>
                <form action="index.php" method="post">
                    <input type="submit" value="Volver a empezar">
                </form>
                <?php 
            }
        }
    ?>
</body>

</html>