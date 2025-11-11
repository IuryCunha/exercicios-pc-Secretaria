<?php

echo "Km percorridos: ";
$Km_percorrido = fgets(STDIN);
echo "Dias alugados: ";
$dias = fgets(STDIN);

var_dump($dias);

$taxa_dias = 90 * $dias;
$taxa_Km_p = 0.20 * $Km_percorrido;

$valor_final = $taxa_dias + $taxa_Km_p;

echo "Serão cobrados $taxa_dias R$ para $dias dia(s) alugado(s)" . "\n";
echo "Serão cobrados $taxa_Km_p R$ para $Km_percorrido km percorrido(s)" . "\n";

echo "O valor final será de $valor_final R$";