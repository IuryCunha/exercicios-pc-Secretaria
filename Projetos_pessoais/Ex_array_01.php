<?php 

$carros = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux");
$carros[] = "Amarok";
$carros[10] = "Camaro";
echo $carros[10];

echo  PHP_EOL;

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda" ;
$motos[5] = "Suzuki";
echo $motos[5]; 

echo PHP_EOL;

$clientes = ["Rodrigo", "Felipe", "Bia"];
print_r($clientes);