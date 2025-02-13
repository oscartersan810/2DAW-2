<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Cóctel</title>
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
        </style>
</head>
<body>
    <h1 class="title">Detalles</h1>

    <?php
    if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
        $direccion_api = "http://www.thecocktaildb.com/api/json/v1/1/lookup.php?i=" . $id;
        $datos = file_get_contents($direccion_api);
        $cocktails = json_decode($datos, true); 

        foreach ($cocktails['drinks'] as $cocktail) {
            echo "<div class='cocktail'>";
            echo "<img src='{$cocktail['strDrinkThumb']}' alt='{$cocktail['strDrink']}' width='200'><br>";
            echo "<p>Nombre: {$cocktail['strDrink']}</p>";
            echo "<p>Etiqueta: {$cocktail['strTags']}</p>";
            echo "<p>Categoria: {$cocktail['strCategory']}</p>";
            echo "<p>Alcohol: {$cocktail['strAlcoholic']}</p>";
            echo "<p>Vaso: {$cocktail['strGlass']}</p>";
            echo "<p>Instrucciones: {$cocktail['strInstructionsES']}</p>";
            echo "</div>";
        }
    } 
    
    ?>
</body>
</html>