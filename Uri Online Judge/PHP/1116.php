<?php

$quantidadePares = intval(readline());

for ($i = 0; $i < $quantidadePares; $i++) { 
    list($valor1, $valor2) = array_map(fn($x) => intval($x), explode(' ', readline()));
    if ($valor2 == 0) {
        echo 'divisao impossivel' . PHP_EOL;
        continue;
    }
    printf("%.1f" . PHP_EOL, $valor1 / $valor2);
}
