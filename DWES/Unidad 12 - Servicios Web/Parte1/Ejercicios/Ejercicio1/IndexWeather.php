<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiempo Ciudades</title>
</head>

<body>
    <h2>El Tiempo</h2>
    <?php 
    $apikey = "b95807a162a7968d6d1cd1fa1e779b87";
    if (isset($_REQUEST['ciudad'])) {
        $datos = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".$_REQUEST['ciudad']."&units=metric&appid=".$apikey);
        echo "<h3>Datos en bruto (en formato JSON): </h3>$datos<hr>";
        $tiempo = json_decode($datos);
        echo "<h3>Datos en un objeto: </h3>";
        echo "<pre>".print_r($tiempo)."</pre";
        echo "<hr>";
        echo "<h3>Datos sueltos: </h3>";
        echo "Ciudad: " . $tiempo->name. "<br>";
        echo "Temperatura: " . $tiempo->main->temp . "ºC<br>";
        echo "Humedad: " . $tiempo->main->humidity . "%<br>";
        echo "Presión: " . $tiempo->main->pressure . "mb<br>";  
        echo "Longitud: " . $tiempo->coord->lon . " Longitud<br>";  
        echo "Latitud: " . $tiempo->coord->lat . " Latitud<br>";  
    }
    ?>
    <h3>Elige Ciudad Disponible</h3>
    <form action="" method="post">
        <label for="ciudad">Ciudad: </label>
        <input type="text" name="ciudad" id="ciudad">
        <input type="submit" value="Consultar" name="consultar">
    </form>
</body>
</html>