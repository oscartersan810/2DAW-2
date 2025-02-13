<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Por Nombre Cocteles</title>
    <style>
        body{
            background-color: blueviolet;
        }
        .title{
            background-color: rosybrown;
            color: white;
            font-size: 50px;
            text-align: center;
        }
        .formularios{
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .formularios form{
            border: 1px solid black;
            
        }

        .resultado{
            background-color: rosybrown;
            margin-top: 30px;
            text-align: center;
            font-size: 27px;
            color: white;
        }
        .cocktails{
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }
        .cocktail{
            border: 1px solid black;
            padding: 10px;
            background-color: tan;
        }

        .cocktail p{
            text-align: center;
            text-decoration: none;
            color: black;
            font-size: 19px;
        }

        .cocktail img{
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <h1 class="title">Cócteles API</h1>
    <form action="" method="post">
            <h2>FILTRO POR NOMBRE</h2>
            <label for="Nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre"><br><br>
            <input type="submit" name="buscar" value="Buscar">
    </form>
    <?php
     if (isset($_REQUEST['nombre'])) {
        $direccion_api = "http://www.thecocktaildb.com/api/json/v1/1/search.php?s=" . $_REQUEST['nombre'];
        $datos = file_get_contents($direccion_api);
        $cocktails = json_decode($datos, true); 
    
        if (!empty($cocktails['drinks'])) {
            echo "<h3 class='resultado'>Resultados Cócteles</h3>";
            echo "<div class='cocktails'>";
            foreach ($cocktails['drinks'] as $cocktail) {
                echo "<div class='cocktail'>";
                echo "<img src='{$cocktail['strDrinkThumb']}' alt='{$cocktail['strDrink']}' width='200'><br>";
                echo "<p>{$cocktail['strDrink']}</>";
                ?>
                <form action="detalleCocktail.php" method="post">
                    <input type="hidden" name="id" value="<?= $cocktail['idDrink']; ?>">
                    <input type="submit" value="Ver Detalles">
                </form>
                <?php 
                echo "</div>";
            }
            echo "</div>";
        } else {
            echo "<p>No se encontraron cócteles por Nombre</p>";
        }
    }
    ?>
</body>
</html>