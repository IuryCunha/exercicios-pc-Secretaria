<?php

echo "Nome: ";
$nome = readline();
echo "Salário: ";
$sala = readline();
echo "Anos na empresa: ";
$anos = readline();

function getDescricao($salario, $novoSalario) {
    if ($novoSalario <> null) {
    return "Seu salario de R$ $salario passará para R$ " . number_format($novoSalario , 2, ',', '.');
}
}

if ($anos < 3) {
    echo "O funcionário $nome receberá um aumento de 3%" . PHP_EOL;
    $aumento = ($sala * 3) / 100;
    var_dump($aumento);
    
    $novo_sala = $sala + $aumento;
    var_dump($novo_sala);
    getDescricao($sala,$novoSalario);   
}
elseif ($anos >= 3 && $anos < 10) {
    echo "O funcionário $nome receberá um aumento de 12.5%" . PHP_EOL;
    $aumento = ($sala * 12.5) / 100;
    var_dump($aumento);
    
    $novo_sala = $sala + $aumento;
    var_dump($novo_sala);
    
    getDescricao($sala,$novoSalario);
}
elseif ($anos >= 10) {
    echo "O funcionário $nome receberá um aumento de 20%" . PHP_EOL;
    $aumento = ($sala * 20) / 100;
    var_dump($aumento);
    
    $novo_sala = $sala + $aumento;
    var_dump($novo_sala);
    
    getDescricao($sala,$novoSalario);
}