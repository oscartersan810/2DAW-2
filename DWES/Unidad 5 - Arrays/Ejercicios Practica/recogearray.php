<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //El siguiente bloque solo se puede usar si el array recibido no es asociativo

    // print_r($_REQUEST['notas']);

    // for ($i=0; $i < count($_REQUEST['notas']) ; $i++) { 
    //     echo "Nota" .($i+1). ": {$_REQUEST['notas'][$i]} <br>";
    // }
    $suma = 0;
    foreach ($_REQUEST['notas'] as $indice => $valor) {
        echo "Nota $indice: $valor <br>";
        $suma += $valor;
    }

    echo "<br> La media es " . ($suma / count($_REQUEST['notas']));
    ?>
</body>

</html>