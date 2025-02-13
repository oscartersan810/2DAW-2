<?php
 function esCapicua($n){
    $aux = 0;
    $cociente = $n;

    do {
        $resto = $cociente % 10;
        $aux =  $aux * 10 + $resto;
        $cociente = (int)($cociente / 10);

    } while($cociente>=1);

    if ($n == $aux) {
        return true;
    } else {
        return false;
    }
 }

 function esPrimo($n){
    for ($i=2; $i < $n; $i++) { 
        
        if (($n % $i) == 0) {
            return false;
        } 
    }
    return true;
 }

 function siguientePrimo($n){
    $primo = false;
    $numero = (int)$n +1;
    do{
        if (esPrimo($numero) == true) {
            $primo = true;
            return $numero;
        } 
        $numero++;

    } while($primo == false);
 }

 function potencia($b, $exp){
    $potencia = 1;

    for ($i=0; $i < $exp; $i++) { 
        $potencia = $potencia*$b;
    }

    return $potencia;
 }

 function digitos($n){
    $cont = 0;

    do {

    } while ($cont=1);
 }
?>