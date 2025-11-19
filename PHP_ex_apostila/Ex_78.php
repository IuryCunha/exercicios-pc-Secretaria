<?php

/*
78) Escreva um programa que leia 15 números e guarde-os em um vetor. No final, 
mostre o vetor inteiro na tela e em seguida mostre em que posições foram 
digitados valores que são múltiplos de 10.*/

$vetores = [];
$vetorMult = [];

for ($i = 0; $i <= 5; $i++) {
    $vetores [$i] = (int) readline("Digite um numero: ");
    if ($vetores [$i] % 10 == 0) {
        $vetorMult [$i] = $vetores [$i];
    }
}

foreach ($vetores as $valor) {
    echo $valor . " ";
}

echo PHP_EOL;

foreach ($vetorMult as $multi => $valor) {
    echo "Posição " . $multi . " > " . $valor . PHP_EOL;
}