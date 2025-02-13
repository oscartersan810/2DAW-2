<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Por Alcohol</title>
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
        .formulario{
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .formulario form{
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
            font-size: 19px;
        }
    </style>
</head>
<body>
    <h1 class="title">Cócteles API</h1>
    <div class="formularios">
            <form action="" method="post">
                <h2>POR ALCOHOL</h2>
                <label for="Alcohol">Por Alcohol: </select>
                <select name="alcohol" id="">
                    <option value="default" selected>Seleccionar...</option>
                    <option value="Alcoholic">Con Alcohol</option>
                    <option value="Non_Alcoholic">Sin Alcohol</option>
                </select><br><br>
                <input type="submit" name="buscar" value="Buscar">
            </form><br><br>
            
    </div>
    <?php
    if (isset($_REQUEST['alcohol'])) {
        $direccion_api = "http://www.thecocktaildb.com/api/json/v1/1/filter.php?a=" . $_REQUEST['alcohol'];
        $datos = file_get_contents($direccion_api);
        $cocktails = json_decode($datos, true); 
    
        if (!empty($cocktails['drinks'])) {
            echo "<h3 class='resultado'>Resultados Cócteles</h3>";
            echo "<div class='cocktails'>";
            foreach ($cocktails['drinks'] as $cocktail) {
                echo "<div class='cocktail'>";
                echo "<img src='{$cocktail['strDrinkThumb']}' alt='{$cocktail['strDrink']}' width='200'><br>";
                echo "<p>{$cocktail['strDrink']}</p>";
                echo "</div>";
            }
            echo "</div>";
        } else {
            echo "<p>No se encontraron cócteles por Alcohol</p>";
        }
    }
    
    ?>
</body>
</html>