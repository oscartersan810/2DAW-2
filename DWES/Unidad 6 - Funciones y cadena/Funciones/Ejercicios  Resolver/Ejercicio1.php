<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Loteria primitiva</h1>
    <h3>Genera tu combinación ganadora</h3>

    <form action="" method="post">
        <label for="Titulo">Título combinacion:</label>
        <input type="text" name="titulo" id="titulo"><br><br>
        <?php
        for ($i=0; $i < 6; $i++) { ?>
            <label for="num<?=$i?>"></label>
            <input type="number" name="num[]" size="6">
        
        <?php
        } 
        ?>
    </form>
</body>
</html>