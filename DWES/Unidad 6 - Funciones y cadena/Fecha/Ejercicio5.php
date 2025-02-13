<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Ejercicio 5</h1>
   <h2>Elige un dia de la semana: </h2>

    <?php
    if (isset($_REQUEST['diaSemana'])) {
        
    } 
    ?>

   <form action="" method="post">
    <label for="Dia de semana">Dia de semana: </label>
    <select name="diaSemana">
        <option value="lunes" selected>Lunes</option>
        <option value="martes">Martes</option>
        <option value="miercoles">Miércoles</option>
        <option value="jueves">Jueves</option>
        <option value="viernes">Viernes</option>
        <option value="sabado">Sábado</option>
        <option value="domingo">Domingo</option>
    </select>
   </form> 
</body>
</html>