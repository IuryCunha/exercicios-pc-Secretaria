<?php

/*49) Crie um programa que leia 6 números inteiros e no final
mostre quantos deles são pares e quantos são ímpares.*/

$contador = 1;

while ($contador <= 6) {

    
    $numeroInt = intval($contador);
    
    
    if ($numeroInt % 2 == 0) {
        echo "O " . $contador . "° número é par" . PHP_EOL;
        echo "" . PHP_EOL;
    }
    elseif ($numeroInt % 2 != 0) {
        echo "O " . $contador . "° número é ímpar" . PHP_EOL;
        echo "" . PHP_EOL;
    }
    $contador++;
}