<?php

function ehPrimo($numero) {
    for ($i = 2; $i <= pow($numero, 1/2); $i++) {
        if ($numero % $i == 0)
            return false;
    }
    return true;
}

const VALOR_A_FATORIAR = 600851475143;

$i = 2;
$maior = 2;

while (pow($i, 2) < VALOR_A_FATORIAR) {
    $i++;
    if (VALOR_A_FATORIAR % $i == 0 && ehPrimo(($i))) $maior = $i;
}
echo $maior . PHP_EOL;
