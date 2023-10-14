<?php

function getNumeros($entrada) {
    $numeros = preg_split('/[A-Za-z]/', $entrada);
    $numeros = array_filter($numeros);
    $numeros = array_map(fn($x) => intval($x), $numeros);
    return $numeros;
}

$quantidadeNumeros = intval(readline());

for ($i=0; $i < $quantidadeNumeros; $i++) { 
    $numeros = getNumeros(readline());
    $resultado = 0;
    foreach($numeros as $numero) {
        $resultado += $numero;
    }
    echo $resultado . PHP_EOL;
}
