<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Loteria</title>
</head>
<body>
    <h1>Resultado Loteria</h1>
    <?php
    //Rescatar valores introducidos
    $n1 = $_REQUEST['n1']; 
    $n2 = $_REQUEST['n2']; 
    $n3 = $_REQUEST['n3']; 
    $n4 = $_REQUEST['n4']; 
    $n5 = $_REQUEST['n5']; 
    $n6 = $_REQUEST['n6'];
    $nserie = $_REQUEST['nserie'];
    
    //Generar numero aleatorio 
    $g1 = rand(1,49);
    $g2 = rand(1,49);
    $g3 = rand(1,49);
    $g4 = rand(1,49);
    $g5 = rand(1,49);
    $g6 = rand(1,49);
    $gserie = rand(1,999);

    //Contar aciertos
    $acierto = 0;
    if ($n1==$g1) { $acierto++;}
    if ($n2==$g2) { $acierto++;}
    if ($n3==$g3) { $acierto++;}
    if ($n4==$g4) { $acierto++;}
    if ($n5==$g5) { $acierto++;}
    if ($n6==$g6) { $acierto++;}
    if ($nserie==$gserie) { $acierto++;}

    ?>

    <h2>Combinacion generada</h2>
    <table border="1">
        <tr>
            <td><?=$n1?></td>
            <td><?=$n2?></td>
            <td><?=$n3?></td>
            <td><?=$n4?></td>
            <td><?=$n5?></td>
            <td><?=$n6?></td>
            <th>Numero Serie: <?=$nserie?></th>
        </tr>
    </table>
    <h2>Combinacion ganadora</h2>
    <table border="1">
        <tr>
            <td><?=$g1?></td>
            <td><?=$g2?></td>
            <td><?=$g3?></td>
            <td><?=$g4?></td>
            <td><?=$g5?></td>
            <td><?=$g6?></td>
            <th>Numero Serie: <?=$gserie?></th>
        </tr>
    </table>

    <?php 

    if ($acierto==7) {
        echo "Has acertado todas!! <br>";
    } else {
        echo "Has tenido $acierto acierto/s";
    }
    ?>
</body>
</html>